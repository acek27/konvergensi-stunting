<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inovasi;
use App\Models\Opd;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class InovasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:galeri');
    }

    public function index()
    {
        return view('admin.inovasi.index');
    }

    public function create()
    {
        $opds = Opd::all();
        return view('admin.inovasi.create', compact('opds'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        //gambar
        if ($request->image == '') {
            unset($data['image']);
        } else {
            $request->validate([
                'image' => 'nullable|image|max:4196',
            ]);
            $thumnail = uniqid() . '-' . uniqid() . '.' . $request->file('image')->
                getClientOriginalExtension();
            $path = $request->image->storeAs('inovasi', $thumnail);
            $data['image'] = $path;
        }

        //pendukung
        if ($request->pendukung == '') {
            unset($data->pendukung);
        } else {
            $request->validate([
                'pendukung' => 'nullable|mimes:pdf|max:4196',
            ]);
            $pendukung = uniqid() . '-' . uniqid() . '.' . $request->file('pendukung')->
                getClientOriginalExtension();
            $loc = $request->pendukung->storeAs('pendukung', $pendukung);
            $data['pendukung'] = $loc;
            $data['nama_pendukung'] = $request->pendukung->getClientOriginalName();
        }
        Inovasi::create($data);
        return redirect()->route('inovasi.index');
    }

    public function destroy($id)
    {
        Inovasi::destroy($id);
    }

    public function anyData()
    {
        return DataTables::of(Inovasi::query())
            ->addColumn('action', function ($data) {
                $edit = '<a href="' . route('inovasi.edit', $data->id) . '"><i class="fa fa-edit text-primary"></i></a>';
                $del = '<a href="#" data-id="' . $data->id . '" class="hapus-data"> <i class="fa fa-trash text-danger"></i></a>';
                return  $del;
            })
            ->make(true);
    }
}

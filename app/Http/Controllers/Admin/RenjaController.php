<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kecamatan;
use App\Models\Renja;
use App\Models\Tppskec;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RenjaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['anyData', 'file']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tpps.renja.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatan = Kecamatan::all();
        return view('admin.tpps.renja.create', compact('kecamatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "path" => "required|mimes:pdf|max:4096"
        ]);
        $data = $request->all();
        $filename = uniqid() . '-' . uniqid() . '.' . $request->path->
            getClientOriginalExtension();
        $path = $request->path->storeAs('renja', $filename);
        $data['path'] = $path;
        Renja::create($data);
        return redirect()->route('renja.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Renja::findOrFail($id);
        $file = storage_path('app/' . $data->path);
        unlink($file);
        $data::destroy($id);
    }

    public function file($id)
    {
        $poster = Renja::find($id);
        $file = storage_path('app/' . $poster->path);
        return response()
            ->file($file, [
                'Cache-Control' => 'no-cache, no-store, must-revalidate',
                'Pragma' => 'no-cache',
                'Expires' => '0'
            ]);
    }

    public function anyData()
    {
        return DataTables::of(Renja::query())
            ->addColumn('kecamatan', function ($data) {
                $instansi = $data->kec_id == NULL ? 'Kabupaten' : $data->kecamatan->kecamatan;
                $level = '';
                if ($data->level == 1) {
                    $level = 'Renja Kabupaten';
                } elseif ($data->level == 2) {
                    $level = 'Renja Kecamatan';
                } else {
                    $level = 'Renja Desa';
                }
                return $level . ' - (' . $instansi . ')';
            })
            ->addColumn('action', function ($data) {
                $edit = '<a target="_blank" href="' . route('renja.file', $data->id) . '"><i class="fa fa-download text-primary"></i></a>';
                $del = '<a href="#" data-id="' . $data->id . '" class="hapus-data"> <i class="fa fa-trash text-danger"></i></a>';
                return $edit . '&nbsp' . $del;
            })
            ->make(true);
    }
}
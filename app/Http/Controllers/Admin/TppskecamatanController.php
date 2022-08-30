<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Desa;
use App\Models\Kecamatan;
use App\Models\Rembuk;
use App\Models\Tppskec;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TppskecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['anyData', 'file']);
    }

    public function index()
    {
        return view('admin.tpps.kecamatan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatan = Kecamatan::all();
        return view('admin.tpps.kecamatan.create', compact('kecamatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $filename = uniqid() . '-' . uniqid() . '.' . $request->path->
            getClientOriginalExtension();
        $path = $request->path->storeAs('tppskec', $filename);
        $data['path'] = $path;
        Tppskec::create($data);
        return redirect()->route('tppskec.index');
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
        $data = Tppskec::findOrFail($id);
        $file = storage_path('app/' . $data->path);
        unlink($file);
        $data::destroy($id);
    }

    public function loaddesa($id)
    {
        $data = Desa::where('idkecamatan', $id)->get();
        return $data;
    }

    public function file($id)
    {
        $poster = Tppskec::find($id);
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
        return DataTables::of(Tppskec::query())
            ->addColumn('action', function ($data) {
                $edit = '<a target="_blank" href="' . route('tppskec.file', $data->id) . '"><i class="fa fa-download text-primary"></i></a>';
                $del = '<a href="#" data-id="' . $data->id . '" class="hapus-data"> <i class="fa fa-trash text-danger"></i></a>';
                return $edit . '&nbsp' . $del;
            })
            ->make(true);
    }

    public function desa()
    {
        return $this->belongsTo(Desa::class, 'desa_id', 'iddesa');
    }
}

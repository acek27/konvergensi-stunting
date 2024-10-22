<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Peraturan;
use App\Models\Stunting;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DataStuntingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('can:stunting')->except(['anyData', 'file']);
    }

    public function index()
    {
        return view('admin.datastunting.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.datastunting.create');
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
        $path = $request->path->storeAs('stunting', $filename);
        $data['path'] = $path;
        Stunting::create($data);
        return redirect()->route('datastunting.index');
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
        $data = Stunting::findOrFail($id);
        return view('admin.datastunting.edit', compact('data'));
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
        $data = Stunting::findOrFail($id);
        $data->update([
            'judul' => $request->judul,
            'tahun' => $request->tahun,
            'jenis_capaian' => $request->jenis_capaian
        ]);
        return redirect()->route('datastunting.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Stunting::findOrFail($id);
        $file = storage_path('app/' . $data->path);
        unlink($file);
        $data::destroy($id);
    }

    public function file($id)
    {
        $poster = Stunting::find($id);
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
        return DataTables::of(Stunting::query())
            ->addColumn('action', function ($data) {
                $edit = '<a href="' . route('datastunting.edit', $data->id) . '"><i class="fa fa-edit text-primary"></i></a>';
                $del = '<a href="#" data-id="' . $data->id . '" class="hapus-data"> <i class="fa fa-trash text-danger"></i></a>';
                return $edit . '&nbsp' . $del;
            })
            ->addColumn('jenis_capaian', function ($data) {
                if ($data->jenis_capaian == 1) {
                    return "Data Cakupan";
                } elseif ($data->jenis_capaian == 2) {
                    return "Data Sasaran";
                } elseif ($data->jenis_capaian == 3) {
                    return "Data Supply";
                }else{
                    return "-";
                }
            })
            ->make(true);
    }
}

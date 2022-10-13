<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Map;
use App\Models\Sidebar;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SidebarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.sidebar.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sidebar.create');
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
        $path = $request->path->storeAs('sidebar', $filename);
        $data['path'] = $path;
        Sidebar::create($data);
        return redirect()->route('sidebar.index');
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
        $data = Sidebar::findOrFail($id);
        if ($data->status == 1) {
            $data->update([
                'status' => 0
            ]);
        } elseif ($data->status == 0) {
            $data->update([
                'status' => 1
            ]);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Sidebar::findOrFail($id);
        $file = storage_path('app/' . $data->path);
        unlink($file);
        $data::destroy($id);
    }

    public function file($id)
    {
        $poster = Sidebar::find($id);
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
        return DataTables::of(Sidebar::query())
            ->addColumn('status', function ($data) {
                return $data->status == 1 ? 'Ditampilkan' : 'Disembanyikan';
            })
            ->addColumn('action', function ($data) {
                $status = $data->status == 1 ? "active" : "";
                $label = $data->status == 1 ? "Aktif" : "Non-aktif";
                $edit = '<div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <a href="#" data-id="' . $data->id . '" class="btn btn-info status ' . $status . '">' . $label . '
                                                </a>
                                            </div>';
                $del = '<a href="#" data-id="' . $data->id . '" class="hapus-data btn btn-danger"> Hapus</a>';
                return $edit . '&nbsp' . $del;
            })
            ->make(true);
    }
}

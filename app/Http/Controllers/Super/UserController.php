<?php

namespace App\Http\Controllers\Super;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Opd;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('can:admin');
    }

    public function index()
    {
        return view('super.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $opds = Opd::all();
        return view('super.create', compact('roles', 'opds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, User::$rulesCreate);
        $data = User::create($request->all());
        $data->roles()->syncWithoutDetaching($request->role_id);
        return redirect()->route('super.index');
    }

    public function addrole(Request $request, $id)
    {
        $data = User::findOrFail($id);
        $data->roles()->syncWithoutDetaching($request->role_id);
        return redirect()->back();
    }

    public function delrole(Request $request, $id)
    {
        $data = User::findOrFail($id);
        $data->roles()->detach($request->role_id);
        return redirect()->back();
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
        $data = User::findOrFail($id);
        $roles = Role::all();
        $opds = Opd::all();
        return view('super.edit', compact('data', 'roles', 'opds'));
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
        if ($request->password == '') {
            unset($request['password']);
        }
        $data = User::findOrFail($id);
        $data->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
    }

    public function anyData()
    {
        return DataTables::of(User::query())
            ->addColumn('action', function ($data) {
                $edit = '<a href="' . route('super.edit', $data->id) . '"><i class="fa fa-edit text-primary"></i></a>';
                $del = '<a href="#" data-id="' . $data->id . '" class="hapus-data"> <i class="fa fa-trash text-danger"></i></a>';
                return $edit . '&nbsp' . $del;
            })
            ->make(true);
    }
}

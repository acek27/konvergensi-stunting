<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Kpm;
use App\Models\Tppsdesa;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class KpmController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of(Kpm::query())
                ->addColumn('action', function ($data) {
                    $edit = '<a target="_blank" href="' . route('kpmadm.file', $data->id) . '"><i class="fa fa-download text-primary"></i> Download</a>';
                    return $edit;
                })
                ->make(true);
        }
        return view('guest.kpm');
    }
}

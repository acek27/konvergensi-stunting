<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Tppsdesa;
use App\Models\Tppskec;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TppsController extends Controller
{

    public function kabupaten()
    {
        return view('guest.tpps.kabupaten');
    }

    public function kecamatan(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of(Tppskec::query())
                ->addColumn('action', function ($data) {
                    $edit = '<a target="_blank" href="' . route('tppskec.file', $data->id) . '"><i class="fa fa-download text-primary"></i> Download</a>';
                    return $edit;
                })
                ->make(true);
        }
        return view('guest.tpps.kecamatan');
    }

    public function desa(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of(Tppsdesa::query())
                ->addColumn('action', function ($data) {
                    $edit = '<a target="_blank" href="' . route('tppsdesa.file', $data->id) . '"><i class="fa fa-download text-primary"></i> Download</a>';
                    return $edit;
                })
                ->make(true);
        }
        return view('guest.tpps.desa');
    }
}

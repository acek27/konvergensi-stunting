<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Laporan;
use App\Models\Renja;
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

    public function renja(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of(Renja::with('kecamatan')->where('level', $request->id))
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
                    $edit = '<a target="_blank" href="' . route('renja.file', $data->id) . '"><i class="fa fa-download text-primary"></i>Download</a>';
                    $del = '<a href="#" data-id="' . $data->id . '" class="hapus-data"> <i class="fa fa-trash text-danger"></i></a>';
                    return $edit;
                })
                ->make(true);
        }
        return view('guest.tpps.renja');
    }

    public function laporan(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of(Laporan::with('kecamatan')->where('level', $request->id))
                ->addColumn('kecamatan', function ($data) {
                    $instansi = $data->kec_id == NULL ? 'Kabupaten' : $data->kecamatan->kecamatan;
                    $level = '';
                    if ($data->level == 1) {
                        $level = 'Laporan Kabupaten';
                    } elseif ($data->level == 2) {
                        $level = 'Laporan Kecamatan';
                    } else {
                        $level = 'Laporan Desa';
                    }
                    return $level . ' - (' . $instansi . ')';
                })
                ->addColumn('action', function ($data) {
                    $edit = '<a target="_blank" href="' . route('laporan.file', $data->id) . '"><i class="fa fa-download text-primary"></i>Download</a>';
                    $del = '<a href="#" data-id="' . $data->id . '" class="hapus-data"> <i class="fa fa-trash text-danger"></i></a>';
                    return $edit;
                })
                ->make(true);
        }
        return view('guest.tpps.laporan');
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

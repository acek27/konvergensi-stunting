<?php

namespace App\Http\Controllers;

use App\Models\Peraturan;
use App\Models\Qna;
use App\Models\Topik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class FaqController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of(Qna::query())
                ->addColumn('action', function ($data) {
                    $edit = '<a href="' . route('qna.show', $data->tiket) . '"><i class="fa fa-arrow-right text-primary"></i></a>';
                    $update = '<a href="#" data-id="' . $data->tiket . '" class="hapus-data"> <i class="fa fa-check text-success"></i></a>';
                    return $update . '&nbsp' . '&nbsp' . $edit;
                })
                ->addColumn('status', function ($data) {
                    return $data->status == 0 ? 'Belum selesai' : 'Selesai';
                })
                ->make(true);
        }
        return view('admin.qna.index');
    }


    public function create()
    {
        $topics = Topik::all();
        return view('guest.faq', compact('topics'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'topik_id' => 'required',
            'nama_penanya' => 'required|max:200',
            'telp' => 'required|numeric|digits_between:10,15',
            'email' => 'required|email|max:200',
            'pertanyaan' => 'required',
        ]);
        $request->merge(['tiket' => uniqid()]);
        Qna::create($request->all());
        return redirect()->back()->with('message', 'Pertanyaan berhasil dikirim! Kami akan menghubungi anda melalui kotak yang telah dikirim');
    }

    public function show($id)
    {
        $data = Qna::findOrFail($id);
        return view('admin.qna.show', compact('data'));
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $tiket)
    {
        $data = Qna::findOrFail($tiket);
        $data->update([
            'status' => 1,
            'respon_id' => Auth::user()->opd_id
        ]);
    }


}

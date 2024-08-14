<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use App\Models\Inovasi;
use Illuminate\Http\Request;

class InnovationController extends Controller
{
    public function index()
    {
        $data = Inovasi::orderBy('created_at', 'DESC')->paginate(10);
        return view('guest.innovation.index', compact('data'));
    }

    public function image($id)
    {
        $poster = Inovasi::find($id);
        $file = storage_path('app/' . $poster->image);
        return response()
            ->file($file, [
                'Cache-Control' => 'no-cache, no-store, must-revalidate',
                'Pragma' => 'no-cache',
                'Expires' => '0'
            ]);
    }

    public function file($id)
    {
        $poster = Inovasi::find($id);
        $file = storage_path('app/' . $poster->pendukung);
        return response()
            ->file($file, [
                'Cache-Control' => 'no-cache, no-store, must-revalidate',
                'Pragma' => 'no-cache',
                'Expires' => '0'
            ]);
    }

    public function show($id)
    {
        $data = Inovasi::findOrFail($id);
        return view('guest.innovation.show', compact('data'));
    }
}

<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{

    public function index()
    {
        $data = Program::all();
        return view('guest.program', compact('data'));
    }

    public function program(Request $request)
    {
        $data = Program::where('tahun', $request->tahun)->get();
        return view('guest._program', compact('data'))->render();
    }
}

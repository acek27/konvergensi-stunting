<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function reset($id)
    {
        if (Auth::user()->id != $id) {
            return redirect()->route('home');
        }
        return view('auth.reset');
    }

    public function submit($id, Request $request)
    {
        if (Auth::user()->id != $id) {
            return redirect()->route('home');
        }
        $data = User::findOrFail($id);
        $data->update([
            'password' => $request->password
        ]);
        return redirect()->route('home');
    }
}

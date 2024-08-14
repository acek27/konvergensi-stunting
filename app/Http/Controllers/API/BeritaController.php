<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Map;
use App\Models\Post;
use App\Models\Sidebar;
use App\Models\Video;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','DESC')->get()->take(5);
       return $posts;
    }

     public function file($id)
    {
        $poster = Post::find($id);
        $file = storage_path('app/' . $poster->image);
        return response()
            ->file($file, [
                'Cache-Control' => 'no-cache, no-store, must-revalidate',
                'Pragma' => 'no-cache',
                'Expires' => '0'
            ]);
    }
}

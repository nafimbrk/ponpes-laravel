<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Photo;
use App\Models\Video;
use Illuminate\Http\Request;

class AppController extends Controller
{

    public function index()
    {
        return view('welcome', [
            'artikels' => Blog::orderBy('id', 'desc')->limit(3)->get(),
            'videos' => Video::orderBy('id', 'desc')->limit(3)->get(),
            'photos' => Photo::orderBy('id', 'desc')->limit(4)->get()
        ]);
    }

    public function berita()
    {
        return view('berita.berita', [
            'artikels' => Blog::orderBy('id', 'desc')->paginate(6)
        ]);
    }

    public function isiBerita($slug)
    {
        $artikel = Blog::where('slug', $slug)->first();
        return view('berita.isi-berita', [
            'artikel' => $artikel
        ]);
    }
}

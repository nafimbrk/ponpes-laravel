<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    use ValidatesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.video.index', [
            'videos' => Video::orderBy('id', 'desc')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'youtube_code' => 'required'
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi',
            'youtube_code.required' => 'Code Youtube wajib diisi'
        ];

        $this->validate($request, $rules, $messages);

        Video::create([ 
            'judul' => $request->judul,
            'youtube_code' => $request->youtube_code
        ]);

        return redirect(route('video'))->with('success', 'data video berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $video = Video::find($id);

        $rules = [
            'judul' => 'required',
            'youtube_code' => 'required'
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi',
            'youtube_code.required' => 'Code Youtube wajib diisi'
        ];

        $this->validate($request, $rules, $messages);

        $video->update([ 
            'judul' => $request->judul,
            'youtube_code' => $request->youtube_code
        ]);

        return redirect(route('video'))->with('success', 'data video berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $video = Video::find($id);
 
        $video->delete();

        return redirect(route('video'))->with('success', 'data video berhasil dihapus');
    }
}

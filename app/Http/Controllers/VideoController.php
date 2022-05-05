<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Http\Requests\VideoRequest;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pegawai.video.index', [
            'video' => Video::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.video.create', [
            'video' => Video::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\VideoRequest;  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VideoRequest $request)
    {
        Video::create($request->all());

        return redirect()->route('video.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        return view('pegawai.video.edit', [
            'video' => $video
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\VideoRequest;  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(VideoRequest $request, $id)
    {
        Video::find($id)->update($request->all());

        return redirect()->route('video.index')->with('success', 'Data Jabatan Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        Video::destroy($video->id);

        return redirect()->route('video.index');
    }
}

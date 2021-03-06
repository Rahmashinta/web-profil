<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Routing\Controller;
use App\Http\Requests\VideoRequest;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pegawai.video', [
            'video' => Video::orderBy('created_at', 'desc')->get(),
            'navbar' => User::where('id', Auth::user()->id)->get(),
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

        Alert::success('Berhasil', 'Data Video Berhasil Ditambah');

        return redirect()->route('video.index');
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

        Alert::success('Berhasil', 'Data Video Berhasil Diubah');

        return redirect()->route('video.index');
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

        Alert::success('Berhasil', 'Data Video Berhasil Dhapus');

        return redirect()->route('video.index');
    }
}

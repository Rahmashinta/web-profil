<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Konten;
use App\Http\Controllers\Controller;
use App\Http\Requests\GaleriRequest;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pegawai.foto', [
            'foto' => Galeri::orderBy('created_at', 'desc')->get(),
            'navbar' => User::where('id', Auth::user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\GaleriRequest;  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GaleriRequest $request)
    {
        $file = $request->file('file');

        //tujuan upload
        $tujuan_upload = 'storage/foto';

        //upload file
        $file->move($tujuan_upload, $file->getClientOriginalName());

        $data = $request->all();

        $data['file'] = $file->getClientOriginalName();
        Galeri::create($data);

        Alert::success('Berhasil', 'Data Foto Berhasil Ditambah');

        return redirect()->route('galeri.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $galeri)
    {
        return view('pegawai.detailfoto', [
            'foto' => $galeri,
            'navbar' => User::where('id', Auth::user()->id)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeri $galeri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\GaleriRequest;  $request
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(GaleriRequest $request, $id)
    {
        $data = $request->all();

        $file = $request->file('file');

        if ($file) {

            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            //tujuan upload
            $tujuan_upload = 'storage/foto';

            //upload file
            $file->move($tujuan_upload, $file->getClientOriginalName());

            $data['file'] = $request->file('file')->getClientOriginalName();
        }

        Galeri::find($id)->update($data);

        Alert::success('Berhasil', 'Data Foto Berhasil Diubah');

        return redirect()->route('galeri.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeri $galeri)
    {
        Galeri::destroy($galeri->id);

        Alert::success('Berhasil', 'Data Foto Berhasil Dihapus');

        return redirect()->route('galeri.index');
    }
}

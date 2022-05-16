<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Konten;
use App\Http\Controllers\Controller;
use App\Http\Requests\GaleriRequest;
use Illuminate\Support\Facades\Storage;

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
            'foto' => Galeri::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.foto.create', [
            'foto' => Galeri::all()
        ]);
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

        return redirect()->route('galeri.index')->with('foto', 'Data Foto Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $galeri)
    {
        //
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

        return redirect()->route('galeri.index')->with('foto', 'Data Konten Berhasil Diperbaharui');
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

        return redirect()->route('galeri.index');
    }
}

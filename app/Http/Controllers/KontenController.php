<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use App\Http\Controllers\Controller;
use App\Http\Requests\KontenRequest;
use Illuminate\Support\Facades\Storage;


class KontenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pegawai.konten.index', [
            'konten' => Konten::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.konten.create', [
            'konten' => Konten::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\KontenRequest;  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KontenRequest $request)
    {

        $file = $request->file('gambar');

        //tujuan upload
        $tujuan_upload = 'storage/konten';

        //upload file
        $file->move($tujuan_upload, $file->getClientOriginalName());

        $data = $request->all();
        $data['gambar'] = $request->file('gambar')->getClientOriginalName();
        Konten::create($data);

        return redirect()->route('konten.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function show(Konten $konten)
    {
        return view('pegawai.konten.show', [
            'konten' => $konten
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function edit(Konten $konten)
    {
        return view('pegawai.konten.edit', [
            'konten' => $konten
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\KontenRequest;  $request
     * @param  \App\Models\Konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function update(KontenRequest $request, $id)
    {


        // Konten::create([
        //     'judul_konten' => $request->judul_konten,
        //     'kategori_konten' => $request->kategori_konten,
        //     'gambar' => $file->getClientOriginalName(),
        //     'isi_konten' => $request->isi_konten
        // ]);
        $data = $request->all();

        $file = $request->file('gambar');

        if ($file) {

            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            //tujuan upload
            $tujuan_upload = 'storage/konten';

            //upload file
            $file->move($tujuan_upload, $file->getClientOriginalName());

            $data['gambar'] = $request->file('gambar')->getClientOriginalName();
        }

        Konten::find($id)->update($data);

        return redirect()->route('konten.index')->with('success', 'Data Konten Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function destroy(Konten $konten)
    {
        Konten::destroy($konten->id);

        return redirect()->route('konten.index');
    }
}

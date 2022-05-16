<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use App\Models\Jabatan;
use App\Models\Pegawai;
use App\Http\Controllers\Controller;
use App\Http\Requests\PegawaiRequest;
use Illuminate\Support\Facades\Storage;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pegawai.pegawai', [
            'pegawai' => Pegawai::all(),
            'jabatan' => Jabatan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.pegawai.create', [
            'pegawai' => Pegawai::all(),
            'jabatan' => Jabatan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PegawaiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PegawaiRequest $request)
    {
        $file = $request->file('foto_pegawai');

        //tujuan upload
        $tujuan_upload = 'storage/pegawai';

        //upload file
        $file->move($tujuan_upload, $file->getClientOriginalName());

        $data = $request->all();
        $data['foto_pegawai'] = $request->file('foto_pegawai')->getClientOriginalName();
        Pegawai::create($data);

        return redirect()->route('pegawai.index')->with('pegawai', 'Data Pegawai Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        return view('pegawai.pegawai.show', [
            'pegawai' => $pegawai
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        return view('pegawai.pegawai.edit', [
            'pegawai' => $pegawai,
            'jabatan' => Jabatan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(PegawaiRequest $request, $id)
    {
        $data = $request->all();

        $file = $request->file('foto_pegawai');

        if ($file) {

            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            //tujuan upload
            $tujuan_upload = 'storage/pegawai';

            //upload file
            $file->move($tujuan_upload, $file->getClientOriginalName());

            $data['foto_pegawai'] = $request->file('foto_pegawai')->getClientOriginalName();
        }

        Pegawai::find($id)->update($data);

        return redirect()->route('pegawai.index')->with('pegawai', 'Data Pegawai Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        Pegawai::destroy($pegawai->id);

        return redirect()->route('pegawai.index')->with('error', 'Data Berhasil Dihapus');
    }
}

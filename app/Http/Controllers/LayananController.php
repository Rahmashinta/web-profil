<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use App\Models\Layanan;
use App\Http\Controllers\Controller;
use App\Http\Requests\LayananRequest;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pegawai.layanan', [
            'layanan' => Layanan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.layanan.create', [
            'layanan' => Layanan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\LayananRequest;  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LayananRequest $request)
    {
        $file = $request->file('gambar');

        //tujuan upload
        $tujuan_upload = 'storage/layanan';

        //upload file
        $file->move($tujuan_upload, $file->getClientOriginalName());

        $data = $request->all();
        $data['gambar'] = $request->file('gambar')->getClientOriginalName();
        Layanan::create($data);

        return redirect()->route('layanan.index')->with('layanan', 'Data Layanan Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $layanan)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Layanan $layanan)
    {
        return view('pegawai.layanan.edit', [
            'layanan' => $layanan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\LayananRequest;  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(LayananRequest $request, $id)
    {
        $data = $request->all();

        $file = $request->file('gambar');

        if ($file) {

            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            //tujuan upload
            $tujuan_upload = 'storage/layanan';

            //upload file
            $file->move($tujuan_upload, $file->getClientOriginalName());

            $data['gambar'] = $request->file('gambar')->getClientOriginalName();
        }

        Layanan::find($id)->update($data);

        return redirect()->route('layanan.index')->with('layanan', 'Data Layanan Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layanan $layanan)
    {
        Layanan::destroy($layanan->id);

        return redirect()->route('layanan.index')->with('error', 'Data Berhasil Dihapus');
    }
}

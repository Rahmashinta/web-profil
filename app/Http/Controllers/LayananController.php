<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use App\Models\Layanan;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LayananRequest;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

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
            'layanan' => Layanan::all(),
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

        Alert::success('Berhasil', 'Data Layanan Berhasil Ditambah');

        return redirect()->route('layanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Layanan $layanan)
    {
        //
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

        Alert::success('Berhasil', 'Data Layanan Berhasil Diperbaharui');

        return redirect()->route('layanan.index');
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

        Alert::success('Berhasil', 'Data Layanan Berhasil Dihapus');

        return redirect()->route('layanan.index');
    }
}

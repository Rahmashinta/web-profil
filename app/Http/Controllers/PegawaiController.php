<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use App\Models\Jabatan;
use App\Models\Pegawai;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PegawaiRequest;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

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
            'pegawai' => Pegawai::orderBy('created_at', 'desc')->get(),
            'jabatan' => Jabatan::all(),
            'navbar' => User::where('id', Auth::user()->id)->get(),
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

        if ($data['nip'] == Pegawai::where('nip', $data['nip'])->value('nip')) {
            Alert::error('NIP sudah ada!', 'Gagal');
        } else {
            Pegawai::create([
                'nip' => $data['nip'],
                'nama_pegawai' => $data['nama_pegawai'],
                'jabatan' => $data['jabatan'],
                'foto_pegawai' => $file->getClientOriginalName(),
            ]);
            Alert::success('Berhasil', 'Data Pegawai Berhasil Ditambah');
        }
        return redirect()->route('pegawai.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        return view('pegawai.detailpegawai', [
            'pegawai' => $pegawai,
            'navbar' => User::where('id', Auth::user()->id)->get(),
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

        Alert::success('Berhasil', 'Data Pegawai Berhasil Diubah');

        return redirect()->route('pegawai.index');
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

        Alert::success('Berhasil', 'Data Pegawai Berhasil Dihapus');

        return redirect()->route('pegawai.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Konten;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\KontenRequest;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TambahController extends Controller
{
    public function index()
    {
        return view('pegawai.tambahkonten', [
            'navbar' => User::where('id', Auth::user()->id)->get(),
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

        $user = User::where('id', Auth::user()->id)->first();

        $data = $request->all();

        $data['user_id'] = $user['id'];

        $data['status'] = 'Draf';
        $data['gambar'] = $request->file('gambar')->getClientOriginalName();
        Konten::create($data);

        Alert::success('Berhasil', 'Data Konten Berhasil Ditambah');

        return redirect()->route('tambah.index');
    }
}

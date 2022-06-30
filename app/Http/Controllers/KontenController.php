<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use App\Http\Controllers\Controller;
use App\Http\Requests\KontenRequest;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class KontenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('pegawai.konten', [
            'konten' => Konten::orderBy('created_at', 'desc')->get(),
            'navbar' => User::where('id', Auth::user()->id)->get(),
            // 'author' => $author
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
        $data['author'] = $user['nama'];
        $data['gambar'] = $request->file('gambar')->getClientOriginalName();

        Konten::create($data);

        Alert::success('Berhasil', 'Data Konten Berhasil Ditambah');

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
        $user_id = Konten::find($konten->id)->user_id;
        $author = User::where('id', $user_id)->first();

        return view('pegawai.detailkonten', [
            'konten' => $konten,
            'navbar' => User::where('id', Auth::user()->id)->get(),
            'author' => $author
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

        Alert::success('Berhasil', 'Data Konten Berhasil Diubah');

        return redirect()->route('konten.index');
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

        Alert::success('Berhasil', 'Data Konten Berhasil Dihapus');

        return redirect()->route('konten.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Pegawai;
use Illuminate\Routing\Controller;
use App\Http\Requests\JabatanRequest;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pegawai.jabatan', [
            'jabatan' => Jabatan::all(),
            'navbar' => User::where('id', Auth::user()->id)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PegawaiRequest;  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JabatanRequest $request)
    {
        $request->validated([
            'kode_jabatan' => 'required|max:255|string|unique:jabatans',
            'jabatan' => 'required|max:255|string|unique:jabatans',
        ]);

        Jabatan::create($request->all());

        Alert::success('Berhasil', 'Data Jabatan Berhasil Ditambah');

        return redirect()->route('jabatan.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PegawaiRequest;  $request
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(JabatanRequest $request, $id)
    {

        Jabatan::find($id)->update($request->all());

        Alert::success('Berhasil', 'Data Jabatan Berhasil Diperbaharui');

        return redirect()->route('jabatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jabatan $jabatan)
    {
        Jabatan::destroy($jabatan->id);

        Alert::success('Berhasil', 'Data Jabatan Berhasil Dihapus');

        return redirect()->route('jabatan.index');
    }
}

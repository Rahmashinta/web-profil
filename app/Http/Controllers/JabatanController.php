<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Routing\Controller;
use App\Http\Requests\JabatanRequest;
use Illuminate\Auth\Events\Validated;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pegawai.jabatan.index', [
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
        return view('pegawai.jabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PegawaiRequest;  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JabatanRequest $request)
    {
        // if ($request != Validated::class) {
        //     return redirect()->route('jabatan.create')->withInput()->withErrors($request->validated());
        // };

        Jabatan::create($request->all());

        return redirect()->route('jabatan.index')->with('success', 'Data Jabatan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function show(Jabatan $jabatan)
    {
        return view('pegawai.jabatan.show', [
            'jabatan' => $jabatan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jabatan $jabatan)
    {
        return view('pegawai.jabatan.edit', [
            'jabatan' => $jabatan
        ]);
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

        return redirect()->route('jabatan.index')->with('success', 'Data Jabatan Berhasil Diperbaharui');
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

        return redirect()->route('jabatan.index')->with('error', 'Data Jabatan Berhasil Dihapus');;
    }
}

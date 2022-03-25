<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Routing\Controller;
use App\Http\Requests\JabatanRequest;

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
        return view('pegawai.jabatan', [
            'jabatan' => Jabatan::all()
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
        Jabatan::create($request->all());

        return redirect()->route('jabatan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function show(Jabatan $jabatan)
    {
        return view('pegawai.tes', [
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
        return view('pegawai.edit', [
            'jabatan' => $jabatan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PegawaiRequest;  $request
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(JabatanRequest $request, Jabatan $jabatan)
    {
        $rules = [
            'jabatan' => 'required|max:255',
            'kode_jabatan' => 'required|unique:jabatan',
        ];

        $validatedData = $request->validate($rules);

        Jabatan::where('id', $jabatan->id)->update($validatedData);

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

        return redirect()->route('jabatan.index');
    }
}

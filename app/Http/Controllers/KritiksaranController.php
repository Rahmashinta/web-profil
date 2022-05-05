<?php

namespace App\Http\Controllers;

use App\Models\Kritiksaran;
use Illuminate\Http\Request;

class KritiksaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pegawai.kritiksaran.index', [
            'kritiksaran' => Kritiksaran::all()
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kritiksaran::create($request->all());

        return view('masyarakat.hubungikami');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kritiksaran  $kritiksaran
     * @return \Illuminate\Http\Response
     */
    public function show(Kritiksaran $kritiksaran)
    {
        return view('pegawai.kritiksaran.show', [
            'kritiksaran' => $kritiksaran
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kritiksaran  $kritiksaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Kritiksaran $kritiksaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kritiksaran  $kritiksaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kritiksaran $kritiksaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kritiksaran  $kritiksaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kritiksaran $kritiksaran)
    {
        Kritiksaran::destroy($kritiksaran->id);

        return redirect()->route('kritiksaran.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Layanan;
use App\Models\Kritiksaran;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class KritiksaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pegawai.kritiksaran', [
            'kritiksaran' => Kritiksaran::all(),
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kritiksaran::create($request->all());

        Alert::success('Thank You', 'Kritik dan Saran Berhasil Dikirim');

        return view('masyarakat.hubungikami',[
            'layanan' => Layanan::all(),
            'menu' => Menu::all(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kritiksaran  $kritiksaran
     * @return \Illuminate\Http\Response
     */
    public function show(Kritiksaran $kritiksaran)
    {
        //
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

        Alert::success('Berhasil', 'Data Kritik dan Saran Berhasil Dihapus');

        return redirect()->route('kritiksaran.index');
    }
}

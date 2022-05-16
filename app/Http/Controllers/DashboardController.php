<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $jabatan = DB::table('jabatans')->count();
        $pegawai = DB::table('pegawais')->count();
        $konten = DB::table('kontens')->count();
        $foto = DB::table('galeris')->count();
        $video = DB::table('videos')->count();
        $layanan = DB::table('layanans')->count();
        $menu = DB::table('menus')->count();
        $pengguna = DB::table('users')->count();
        $kritiksaran = DB::table('kritiksarans')->count();
        return view('pegawai.dashboard', [
            'jabatan' =>  $jabatan,
            'pegawai' =>  $pegawai,
            'konten' =>  $konten,
            'foto' =>  $foto,
            'video' =>  $video,
            'layanan' =>  $layanan,
            'menu' =>  $menu,
            'pengguna' =>  $pengguna,
            'kritiksaran' =>  $kritiksaran,
        ]);
    }
}

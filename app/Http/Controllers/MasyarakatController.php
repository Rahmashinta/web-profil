<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Galeri;
use App\Models\Konten;
use App\Models\Layanan;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MasyarakatController extends Controller
{
    public function sejarah()
    {
        return view('masyarakat.sejarah');
    }
    public function visimisi()
    {
        return view('masyarakat.visimisi');
    }
    public function bidangkerja()
    {
        return view('masyarakat.bidangkerja');
    }
    public function struktur()
    {
        return view('masyarakat.struktur');
    }
    public function tugasdanfungsi()
    {
        return view('masyarakat.tugasdanfungsi');
    }
    public function hubungikami()
    {
        return view('masyarakat.hubungikami');
    }
    public function profilpejabat()
    {
        return view('masyarakat.profilpejabat', [
            'pegawai' => Pegawai::all()
        ]);
    }
    public function berita()
    {
        return view('masyarakat.berita', [
            'berita' => Konten::all()->where('kategori_konten', 'Berita'),
            'layanan' => Layanan::all()
        ]);
    }
    public function detailberita($berita)
    {
        return view('masyarakat.detailberita', [
            'berita' => Konten::all()->where('id', $berita),
            'layanan' => Layanan::all()
        ]);
    }
    public function artikel()
    {
        return view('masyarakat.artikel', [
            'artikel' => Konten::all()->where('kategori_konten', 'Artikel'),
            'layanan' => Layanan::all()
        ]);
    }
    public function detailartikel($artikel)
    {
        return view('masyarakat.detailartikel', [
            'artikel' => Konten::all()->where('id', $artikel),
            'layanan' => Layanan::all()
        ]);
    }
    public function pengumuman()
    {
        return view('masyarakat.pengumuman', [
            'pengumuman' => Konten::all()->where('kategori_konten', 'Pengumuman'),
            'layanan' => Layanan::all()
        ]);
    }
    public function detailpengumuman($pengumuman)
    {
        return view('masyarakat.detailpengumuman', [
            'pengumuman' => Konten::all()->where('id', $pengumuman),
            'layanan' => Layanan::all()
        ]);
    }
    public function foto()
    {
        return view('masyarakat.foto', [
            'foto' => Galeri::all()
        ]);
    }
    public function video()
    {
        return view('masyarakat.video', [
            'video' => Video::all()
        ]);
    }
}

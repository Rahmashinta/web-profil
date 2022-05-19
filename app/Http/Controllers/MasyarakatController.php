<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Video;
use App\Models\Galeri;
use App\Models\Konten;
use App\Models\Layanan;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MasyarakatController extends Controller
{
    public function home()
    {
        return view('masyarakat.home', [
            'layanan' => Layanan::all(),
            'video' => Video::limit(2)->orderBy('created_at', 'desc')->get(),
            'foto' => Galeri::limit(4)->orderBy('created_at', 'desc')->get(),
            'berita' => Konten::where('kategori_konten', 'Berita')->where('status', 'Publish')->limit(5)->orderBy('created_at', 'desc')->get(),
            'artikel' => Konten::where('kategori_konten', 'Artikel')->where('status', 'Publish')->limit(5)->orderBy('created_at', 'desc')->get(),
            'pengumuman' => Konten::where('kategori_konten', 'Pengumuman')->where('status', 'Publish')->limit(5)->orderBy('created_at', 'desc')->get(),
            'menu' => Menu::all(),
            'layanan' => Layanan::all()
        ]);
    }
    public function sejarah()
    {
        return view('masyarakat.sejarah', [
            'layanan' => Layanan::all(),
            'menu' => Menu::all(),
            'berita' => Konten::where('kategori_konten', 'Berita')->where('status', 'Publish')->limit(2)->orderBy('created_at', 'desc')->get(),
            'artikel' => Konten::where('kategori_konten', 'Artikel')->where('status', 'Publish')->limit(2)->orderBy('created_at', 'desc')->get(),
            'pengumuman' => Konten::where('kategori_konten', 'Pengumuman')->where('status', 'Publish')->limit(2)->orderBy('created_at', 'desc')->get(),
        ]);
    }
    public function visimisi()
    {
        return view('masyarakat.visimisi', [
            'layanan' => Layanan::all(),
            'menu' => Menu::all(),
            'berita' => Konten::where('kategori_konten', 'Berita')->where('status', 'Publish')->limit(2)->orderBy('created_at', 'desc')->get(),
            'artikel' => Konten::where('kategori_konten', 'Artikel')->where('status', 'Publish')->limit(2)->orderBy('created_at', 'desc')->get(),
            'pengumuman' => Konten::where('kategori_konten', 'Pengumuman')->where('status', 'Publish')->limit(2)->orderBy('created_at', 'desc')->get(),
        ]);
    }
    public function struktur()
    {
        return view('masyarakat.struktur', [
            'layanan' => Layanan::all(),
            'menu' => Menu::all(),
            'berita' => Konten::where('kategori_konten', 'Berita')->where('status', 'Publish')->limit(2)->orderBy('created_at', 'desc')->get(),
            'artikel' => Konten::where('kategori_konten', 'Artikel')->where('status', 'Publish')->limit(2)->orderBy('created_at', 'desc')->get(),
            'pengumuman' => Konten::where('kategori_konten', 'Pengumuman')->where('status', 'Publish')->limit(2)->orderBy('created_at', 'desc')->get(),
        ]);
    }
    public function tugasdanfungsi()
    {
        return view('masyarakat.tugasdanfungsi', [
            'layanan' => Layanan::all(),
            'menu' => Menu::all(),
            'berita' => Konten::where('kategori_konten', 'Berita')->where('status', 'Publish')->limit(2)->orderBy('created_at', 'desc')->get(),
            'artikel' => Konten::where('kategori_konten', 'Artikel')->where('status', 'Publish')->limit(2)->orderBy('created_at', 'desc')->get(),
            'pengumuman' => Konten::where('kategori_konten', 'Pengumuman')->where('status', 'Publish')->limit(2)->orderBy('created_at', 'desc')->get(),
        ]);
    }
    public function hubungikami()
    {
        return view('masyarakat.hubungikami', [
            'layanan' => Layanan::all(),
            'menu' => Menu::all(),
        ]);
    }
    public function profilpejabat()
    {
        return view('masyarakat.profilpejabat', [
            'pegawai' => Pegawai::all(),
            'layanan' => Layanan::all(),
            'menu' => Menu::all(),
            'berita' => Konten::where('kategori_konten', 'Berita')->where('status', 'Publish')->limit(2)->orderBy('created_at', 'desc')->get(),
            'artikel' => Konten::where('kategori_konten', 'Artikel')->where('status', 'Publish')->limit(2)->orderBy('created_at', 'desc')->get(),
            'pengumuman' => Konten::where('kategori_konten', 'Pengumuman')->where('status', 'Publish')->limit(2)->orderBy('created_at', 'desc')->get(),
        ]);
    }
    public function berita()
    {
        return view('masyarakat.berita', [
            'berita' => Konten::where('kategori_konten', 'Berita')->where('status', 'Publish')->get(),
            'layanan' => Layanan::all(),
            'menu' => Menu::all(),
        ]);
    }
    public function detailberita($berita)
    {
        return view('masyarakat.detailberita', [
            'berita' => Konten::where('id', $berita),
            'layanan' => Layanan::all(),
            'menu' => Menu::all(),
        ]);
    }
    public function artikel()
    {
        return view('masyarakat.artikel', [
            'artikel' => Konten::where('kategori_konten', 'Artikel')->where('status', 'Publish')->get(),
            'layanan' => Layanan::all(),
            'menu' => Menu::all(),
        ]);
    }
    public function detailartikel($artikel)
    {
        return view('masyarakat.detailartikel', [
            'artikel' => Konten::all()->where('id', $artikel),
            'layanan' => Layanan::all(),
            'menu' => Menu::all(),
        ]);
    }
    public function pengumuman()
    {
        return view('masyarakat.pengumuman', [
            'pengumuman' => Konten::where('kategori_konten', 'Pengumuman')->where('status', 'Publish')->get(),
            'layanan' => Layanan::all(),
            'menu' => Menu::all(),
        ]);
    }
    public function detailpengumuman($pengumuman)
    {
        return view('masyarakat.detailpengumuman', [
            'pengumuman' => Konten::all()->where('id', $pengumuman),
            'layanan' => Layanan::all(),
            'menu' => Menu::all(),
        ]);
    }
    public function foto()
    {
        return view('masyarakat.foto', [
            'foto' => Galeri::all(),
            'layanan' => Layanan::all(),
            'menu' => Menu::all(),
        ]);
    }
    public function video()
    {
        return view('masyarakat.video', [
            'video' => Video::all(),
            'layanan' => Layanan::all(),
            'menu' => Menu::all(),
        ]);
    }
}

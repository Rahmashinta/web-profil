<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\KritiksaranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('masyarakat.home');
});

Route::controller(MasyarakatController::class)->group(function () {
    Route::get('sejarah', 'sejarah')->name('masyarakat.sejarah');
    Route::get('bidangkerja', 'bidangkerja')->name('masyarakat.bidangkerja');
    Route::get('visimisi', 'visimisi')->name('masyarakat.visimisi');
    Route::get('profilpejabat', 'profilpejabat')->name('masyarakat.profilpejabat');
    Route::get('berita', 'berita')->name('masyarakat.berita');
    Route::get('detailberita/{id}', 'detailberita')->name('masyarakat.detailberita');
    Route::get('artikel', 'artikel')->name('masyarakat.artikel')->name('masyarakat.artikel');
    Route::get('detailartikel/{id}', 'detailartikel')->name('masyarakat.detailartikel');
    Route::get('pengumuman', 'pengumuman')->name('masyarakat.pengumuman')->name('masyarakat.pengumuman');
    Route::get('detailpengumuman/{id}', 'detailpengumuman')->name('masyarakat.detailpengumuman');
    Route::get('tugasdanfungsi', 'tugasdanfungsi')->name('masyarakat.tugasdanfungsi');
    Route::get('struktur', 'struktur')->name('masyarakat.struktur');
    Route::get('foto', 'foto')->name('masyarakat.foto');
    Route::get('videomasyarakat', 'video')->name('masyarakat.video');
    Route::get('hubungikami', 'hubungikami')->name('masyarakat.hubungikami');
});

Route::controller(DashboardController::class)->middleware('auth')->group(function () {
    Route::get('dashboard', 'index')->name('pegawai.dashboard');
});

Route::controller(JabatanController::class)->middleware('auth')->group(function () {
    Route::get('jabatan', 'index')->name('jabatan.index');
    Route::post('jabatan', 'store')->name('jabatan.store');
    Route::put('jabatan/{jabatan}', 'update')->name('jabatan.update');
    Route::delete('jabatan/{jabatan}', 'destroy')->name('jabatan.destroy');
});

Route::controller(PegawaiController::class)->middleware('auth')->group(function () {
    Route::get('pegawai', 'index')->name('pegawai.index');
    Route::post('pegawai', 'store')->name('pegawai.store');
    Route::put('pegawai/{pegawai}', 'update')->name('pegawai.update');
    Route::delete('pegawai/{pegawai}', 'destroy')->name('pegawai.destroy');
});

Route::controller(KontenController::class)->middleware('auth')->group(function () {
    Route::get('konten', 'index')->name('konten.index');
    Route::post('konten', 'store')->name('konten.store');
    Route::put('konten/{konten}', 'update')->name('konten.update');
    Route::delete('konten/{konten}', 'destroy')->name('konten.destroy');
});

Route::controller(GaleriController::class)->middleware('auth')->group(function () {
    Route::get('galeri', 'index')->name('galeri.index');
    Route::post('galeri', 'store')->name('galeri.store');
    Route::put('galeri/{galeri}', 'update')->name('galeri.update');
    Route::delete('galeri/{galeri}', 'destroy')->name('galeri.destroy');
});


Route::controller(VideoController::class)->middleware('auth')->group(function () {
    Route::get('video', 'index')->name('video.index');
    Route::post('video', 'store')->name('video.store');
    Route::put('video/{video}', 'update')->name('video.update');
    Route::delete('video/{video}', 'destroy')->name('video.destroy');
});

Route::controller(LayananController::class)->middleware('auth')->group(function () {
    Route::get('layanan', 'index')->name('layanan.index');
    Route::post('layanan', 'store')->name('layanan.store');
    Route::put('layanan/{layanan}', 'update')->name('layanan.update');
    Route::delete('layanan/{layanan}', 'destroy')->name('layanan.destroy');
});

Route::controller(MenuController::class)->middleware('auth')->group(function () {
    Route::get('menu', 'index')->name('menu.index');
    Route::post('menu', 'store')->name('menu.store');
    Route::put('menu/{menu}', 'update')->name('menu.update');
    Route::delete('menu/{menu}', 'destroy')->name('menu.destroy');
});

Route::controller(UserController::class)->middleware('auth')->group(function () {
    Route::get('pengguna', 'index')->name('pengguna.index');
    Route::post('pengguna', 'store')->name('pengguna.store');
    Route::put('pengguna/{pengguna}', 'update')->name('pengguna.update');
    Route::delete('pengguna/{pengguna}', 'destroy')->name('pengguna.destroy');
});

Route::controller(KritiksaranController::class)->middleware('auth')->group(function () {
    Route::get('kritiksaran', 'index')->name('kritiksaran.index');
    Route::post('kritiksaran', 'store')->name('kritiksaran.store');
    Route::put('kritiksaran/{kritiksaran}', 'update')->name('kritiksaran.update');
    Route::delete('kritiksaran/{kritiksaran}', 'destroy')->name('kritiksaran.destroy');
});



require __DIR__ . '/auth.php';

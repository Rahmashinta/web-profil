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
use App\Http\Controllers\TambahController;
use App\Providers\RouteServiceProvider;

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
    if (Auth::check()) {
        if (Auth::user()->role == 'admin') {
            return redirect(RouteServiceProvider::HOME);
        } elseif (Auth::user()->role == 'pegawai') {
            return redirect(RouteServiceProvider::PEGAWAI);
        }
    }
    return view('masyarakat.index');
});

Route::controller(MasyarakatController::class)->group(function () {
    Route::get('/', 'home')->name('masyarakat.home');
    Route::get('berita', 'berita')->name('masyarakat.berita');
    Route::get('detailberita/{id}', 'detailberita')->name('masyarakat.detailberita');
    Route::get('artikel', 'artikel')->name('masyarakat.artikel');
    Route::get('detailartikel/{id}', 'detailartikel')->name('masyarakat.detailartikel');
    Route::get('pengumuman', 'pengumuman')->name('masyarakat.pengumuman');
    Route::get('detailpengumuman/{id}', 'detailpengumuman')->name('masyarakat.detailpengumuman');
    Route::get('tugasdanfungsi', 'tugasdanfungsi')->name('masyarakat.tugasdanfungsi');
    Route::get('struktur', 'struktur')->name('masyarakat.struktur');
    Route::get('sejarah', 'sejarah')->name('masyarakat.sejarah');
    Route::get('visimisi', 'visimisi')->name('masyarakat.visimisi');
    Route::get('profilpegawai', 'profilpejabat')->name('masyarakat.profilpejabat');
    Route::get('foto', 'foto')->name('masyarakat.foto');
    Route::get('videomasyarakat', 'video')->name('masyarakat.video');
    Route::get('hubungikami', 'hubungikami')->name('masyarakat.hubungikami');
});

Route::controller(TambahController::class)->middleware('auth', 'verified', 'is_pegawai')->group(function () {
    Route::get('tambahkonten', 'index')->name('tambah.index');
    Route::post('tambahkonten', 'store')->name('tambahkonten.store');
});

Route::controller(DashboardController::class)->middleware('auth', 'verified', 'is_admin')->group(function () {
    Route::get('dashboard', 'index')->name('pegawai.dashboard');
});

Route::controller(JabatanController::class)->middleware('auth', 'verified', 'is_admin')->group(function () {
    Route::get('jabatan', 'index')->name('jabatan.index');
    Route::post('jabatan', 'store')->name('jabatan.store');
    Route::put('jabatan/{jabatan}', 'update')->name('jabatan.update');
    Route::delete('jabatan/{jabatan}', 'destroy')->name('jabatan.destroy');
});

Route::controller(PegawaiController::class)->middleware('auth', 'verified', 'is_admin')->group(function () {
    Route::get('pegawai', 'index')->name('pegawai.index');
    Route::get('pegawai/{pegawai}', 'show')->name('pegawai.show');
    Route::post('pegawai', 'store')->name('pegawai.store');
    Route::put('pegawai/{pegawai}', 'update')->name('pegawai.update');
    Route::delete('pegawai/{pegawai}', 'destroy')->name('pegawai.destroy');
});

Route::controller(KontenController::class)->middleware('auth', 'verified', 'is_admin')->group(function () {
    Route::get('konten', 'index')->name('konten.index');
    Route::get('konten/{konten}', 'show')->name('konten.show');
    Route::post('konten', 'store')->name('konten.store');
    Route::put('konten/{konten}', 'update')->name('konten.update');
    Route::delete('konten/{konten}', 'destroy')->name('konten.destroy');
});

Route::controller(GaleriController::class)->middleware('auth', 'verified', 'is_admin')->group(function () {
    Route::get('galeri', 'index')->name('galeri.index');
    Route::get('galeri/{galeri}', 'show')->name('galeri.show');
    Route::post('galeri', 'store')->name('galeri.store');
    Route::put('galeri/{galeri}', 'update')->name('galeri.update');
    Route::delete('galeri/{galeri}', 'destroy')->name('galeri.destroy');
});


Route::controller(VideoController::class)->middleware('auth', 'verified', 'is_admin')->group(function () {
    Route::get('video', 'index')->name('video.index');
    Route::post('video', 'store')->name('video.store');
    Route::put('video/{video}', 'update')->name('video.update');
    Route::delete('video/{video}', 'destroy')->name('video.destroy');
});

Route::controller(LayananController::class)->middleware('auth', 'verified', 'is_admin')->group(function () {
    Route::get('layanan', 'index')->name('layanan.index');
    Route::post('layanan', 'store')->name('layanan.store');
    Route::put('layanan/{layanan}', 'update')->name('layanan.update');
    Route::delete('layanan/{layanan}', 'destroy')->name('layanan.destroy');
});

Route::controller(MenuController::class)->middleware('auth', 'verified', 'is_admin')->group(function () {
    Route::get('menu', 'index')->name('menu.index');
    Route::post('menu', 'store')->name('menu.store');
    Route::put('menu/{menu}', 'update')->name('menu.update');
    Route::delete('menu/{menu}', 'destroy')->name('menu.destroy');
});

Route::controller(UserController::class)->middleware('auth', 'verified', 'is_admin')->group(function () {
    Route::get('user', 'index')->name('user.index');
    Route::post('user', 'store')->name('user.store');
    Route::put('user/{user}', 'update')->name('user.update');
    Route::delete('user/{user}', 'destroy')->name('user.destroy');
});

Route::controller(KritiksaranController::class)->middleware('auth', 'verified', 'is_admin')->group(function () {
    Route::get('kritiksaran', 'index')->name('kritiksaran.index');
    Route::delete('kritiksaran/{kritiksaran}', 'destroy')->name('kritiksaran.destroy');
});

Route::controller(KritiksaranController::class)->group(function () {
    Route::post('kritiksaran', 'store')->name('kritiksaran.store');
});



require __DIR__ . '/auth.php';

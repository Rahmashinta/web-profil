<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\UserController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::get('/home', function () {
    return view('masyarakat.home');
});
Route::get('/sejarah', function () {
    return view('masyarakat.sejarah');
});
Route::get('/visimisi', function () {
    return view('masyarakat.visimisi');
});
Route::get('/struktur', function () {
    return view('masyarakat.struktur');
});
Route::get('/tugasdanfungsi', function () {
    return view('masyarakat.tugasdanfungsi');
});
Route::get('/profilpejabat', function () {
    return view('masyarakat.profilpejabat');
});
Route::get('/bidangkerja', function () {
    return view('masyarakat.bidangkerja');
});
Route::get('/berita', function () {
    return view('masyarakat.berita');
});
Route::get('/artikel', function () {
    return view('masyarakat.artikel');
});
Route::get('/pengumuman', function () {
    return view('masyarakat.pengumuman');
});
Route::get('/galerifoto', function () {
    return view('masyarakat.foto');
});
Route::get('/galerivideo', function () {
    return view('masyarakat.video');
});
Route::get('/hubungikami', function () {
    return view('masyarakat.hubungikami');
});


Route::get('/dashboard', function () {
    return view('pegawai.dashboard');
});

// Route::resource('jabatan', JabatanController::class);

Route::get('/jabatan', [JabatanController::class, 'index'])->name('jabatan.index');
Route::get('/jabatan/create', [JabatanController::class, 'create'])->name('jabatan.create');
Route::get('/jabatan/{jabatan}/edit', [JabatanController::class, 'edit'])->name('jabatan.edit');
Route::post('/jabatan', [JabatanController::class, 'store'])->name('jabatan.store');
Route::get('/jabatan/{jabatan}', [JabatanController::class, 'show'])->name('jabatan.show');
Route::put('/jabatan/{jabatan}', [JabatanController::class, 'update'])->name('jabatan.update');
Route::delete('/jabatan/{jabatan}', [JabatanController::class, 'destroy'])->name('jabatan.destroy');

Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('/pegawai/{pegawai}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::post('/pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('/pegawai/{pegawai}', [PegawaiController::class, 'show'])->name('pegawai.show');
Route::put('/pegawai/{pegawai}', [PegawaiController::class, 'update'])->name('pegawai.update');
Route::delete('/pegawai/{pegawai}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');

Route::get('/konten', [KontenController::class, 'index'])->name('konten.index');
Route::get('/konten/create', [KontenController::class, 'create'])->name('konten.create');
Route::get('/konten/{konten}/edit', [KontenController::class, 'edit'])->name('konten.edit');
Route::post('/konten', [KontenController::class, 'store'])->name('konten.store');
Route::get('/konten/{konten}', [KontenController::class, 'show'])->name('konten.show');
Route::put('/konten/{konten}', [KontenController::class, 'update'])->name('konten.update');
Route::delete('/konten/{konten}', [KontenController::class, 'destroy'])->name('konten.destroy');

Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
Route::get('/galeri/create', [GaleriController::class, 'create'])->name('galeri.create');
Route::post('/galeri', [GaleriController::class, 'store'])->name('galeri.store');
Route::delete('/galeri/{galeri}', [GaleriController::class, 'destroy'])->name('galeri.destroy');

Route::get('/video', [VideoController::class, 'index'])->name('video.index');
Route::post('/video', [VideoController::class, 'store'])->name('video.store');
Route::delete('/video/{video}', [VideoController::class, 'destroy'])->name('video.destroy');

Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index');
Route::post('/layanan', [LayananController::class, 'store'])->name('layanan.store');
Route::delete('/layanan/{layanan}', [LayananController::class, 'destroy'])->name('layanan.destroy');

Route::get('/kelolamenu', [MenuController::class, 'index'])->name('menu.index');
Route::post('/kelolamenu', [MenuController::class, 'store'])->name('menu.store');
Route::delete('/kelolamenu/{menu}', [MenuController::class, 'destroy'])->name('menu.destroy');

Route::get('/kelolapengguna', [UserController::class, 'index'])->name('user.index');
Route::post('/kelolapengguna', [UserController::class, 'store'])->name('user.store');
Route::delete('/kelolapengguna/{user}', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/kritiksaran', [KritiksaranController::class, 'index'])->name('kritiksaran.index');

require __DIR__ . '/auth.php';

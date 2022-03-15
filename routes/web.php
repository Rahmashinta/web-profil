<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/tugasdanfungsi', function () {
    return view('masyarakat.tugasdanfungsi');
});
Route::get('/profilpejabat', function () {
    return view('masyarakat.profilpejabat');
});

Route::get('/dashboard', function () {
    return view('pegawai.dashboard');
});
Route::get('/jabatan', function () {
    return view('pegawai.jabatan');
});
Route::get('/pegawai', function () {
    return view('pegawai.pegawai');
});
Route::get('/konten', function () {
    return view('pegawai.konten');
});
Route::get('/foto', function () {
    return view('pegawai.foto');
});
Route::get('/video', function () {
    return view('pegawai.video');
});
Route::get('/layanan', function () {
    return view('pegawai.layanan');
});
Route::get('/kelolamenu', function () {
    return view('pegawai.kelolamenu');
});
Route::get('/kelolapengguna', function () {
    return view('pegawai.kelolapengguna');
});


require __DIR__ . '/auth.php';

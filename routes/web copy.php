<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;

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
    return view('welcome');
});

Route::get('/home', function () {
    return 'Halaman home';
});

Route::get('/about', function () {
    echo 'Halaman about';
});

// Route::get('/mahasiswa/{nama}', function ($nama) {
//     echo 'Nama saya: '. $nama;
// });

// Route::get('/mahasiswa/{nama}/{npm}', function ($nama, $npm) {
//     echo 'Nama saya: '. $nama;
//     echo '<br>NPM saya: '. $npm;
// });

// Group Route
// /dosen/jadwal => /pengajar/jadwal
// /dosen/materi => /pengajar/materi
Route::prefix('/pengajar')->group(function (){
    Route::get('/jadwal', function () {
        return "Halaman jadwal";
    });

    Route::get('/materi', function () {
        return "Halaman materi";
    });
});

Route::get('/dosen', function (){
    return view('dosen');
});

Route::get('/dosen/index', function (){
    return view('dosen.index');
});

Route::get('/fakultas', function (){
    // return view('fakultas.index', ["fikr" => "Fakultas Ilmu Komputer dan Rekayasa"]);

    return view('fakultas.index', ["fakultas" => ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"]]);
});

Route::get('/fakultas/indexinclude', function (){
    $kampus = "Universitas Multi Data Palembang";
    $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"];

    return view('fakultas.index_include', compact('kampus', 'fakultas'));
});

Route::get('/fakultas/indexextend', function (){
    $kampus = "Universitas Multi Data Palembang";
    $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"];

    return view('fakultas.index_extend', compact('kampus', 'fakultas'));
});

// Controller
Route::get('/prodi', [ProdiController::class, 'index']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::get('/mahasiswa/update', [MahasiswaController::class, 'update']);
Route::get('/mahasiswa/delete', [MahasiswaController::class, 'delete']);

Route::resource('prodi', ProdiController::class);
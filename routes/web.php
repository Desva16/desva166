<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/Tabel', function () {
    return view('Tabel');
});


Route::get('/profile', function () {
    return view('profile');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/tabel', function () {
    $npm = [2109020134, 2109020120, 2109020166, 2109020144, 2109020134];
    $nama = ['despa', 'wahyu', 'andika', 'Raka', 'roby'];
    $jurusan = ['Teknologi Informasi', 'Sistem Informasi', 'Data Sains', 'Sistem Informasi', 'Data Sains'];
    $kelas = ['E1', 'C1', 'D1', 'A1', 'B1'];
    $jumlah = count($npm);
    return view('tabel', compact('npm', 'jumlah', 'nama', 'jurusan', 'kelas'));
});
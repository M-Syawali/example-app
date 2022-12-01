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
// URL Index
Route::get('/', function () {
    return view('welcome');
});
// Url About
Route::get('/about', function () {
    return view('ini halaman about');
});

//contact
// Route::get('/contact', function () {
//     return view ('contact');
// });

//versi pendek URL CONTACT
// Route::view('/contact', 'contact', ['name' => 'Muthia']);

//Versi Array dalam bentuk variabel atau Membuat Contact

$profile =[
    'name' => 'Muthia',
      'nohp' => '083822664144',
      'status'=> 'manager' 
];
Route::view('/profile', 'profile', $profile);
//atau


//Versi  Mengambil data dari url
//EX.localhost8000/berita/kasus-penculikan-remaja
Route::get('/berita/{id}', function ($id) {
    return 'BERITA ID : ' . $id;
});

Route::get('/berita/{id}/komentar/{komentar}', function ($id,$komentar) {
    return 'BERITA ID : ' . $id . '<br> Komentar Berita :'. $komentar;
});

//Halaman adminstirator
Route::prefix('smkn1subang')->group(function () {
    Route::get('/profile', function () {
        return 'nama syawali 
        kelas XI RPL 1';
    });

Route::get('/sejarah', function () {
    return 'sejarah';
});

Route::get('/visimisi', function () {
    return 'ini visimisi';
});

Route::get('/jurusan', function () {
    return 'ini jurusan';
});

Route::get('/prestasi', function () {
    return 'ini prestasi';
});

});

//tugas membuat profile
$profile =[
    'name' => 'Muthia',
      'nohp' => '083822664144',
      'status'=> 'pelajar' 
];
Route::view('/profile', 'profile', $profile);
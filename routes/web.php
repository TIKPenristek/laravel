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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('User/index', [
        'tittle'=>'UKM PENRISTEK UT BOGOR'
    ]);
});
Route::get('tentang-kami', function () {
    return view('User/tentang-kami', [
        'tittle'=>'Tentang Kami'
    ]);
});
Route::get('berita', function () {
    return view('User/berita', [
        'tittle'=>'Berita'
    ]);
});
Route::get('dokumentasi', function () {
    return view('User/dokumentasi', [
        'tittle'=>'Dokumentasi'
    ]);
});
Route::get('kontak', function () {
    return view('User/kontak', [
        'tittle'=>'Kontak'
    ]);
});
// admin
Route::get('admin_divtikpenristek', function () {
    return view('admin/index', [
        'tittle'=>'Admin'
    ]);
});
Route::get('admin_divtikpenristek_dokumentasi', function () {
    
    $data_dokumentasi=[
        [
            'nama_dokumentasi'=>'Bukber dan pembagian hadiah',
            'keterangan_dokumentasi'=>'lomba pekan publik speaking penristek',
            'foto'=>'wer1.jpg'
        ]
    
        ];
    return view('admin/dokumentasi', [
        'tittle'=>'Dokumentasi',
        'dokumentasi'=> $data_dokumentasi
    ]);
});

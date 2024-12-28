<?php

use App\Controller\ProductController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\test1\Testcontroller;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//    return view('welcome');
// });

// Route::get('/halo', function (){
//    echo "<h1>Hallo Selamat Datang di Laravel</h1>";
//    echo "Sebuah Framework untuk pengembangan web";
// });

// Route::get('/halo', function (){
//    return view('testing.coba');
// });

// Route::get('/halo', [Testcontroller::class, 'index']);

// Route::get('/projects', function (){
//     return view('testing.projects');
// });

// Route::get('/', function (){
//     return view('testing.home');
// });

// Route::get('/about', function (){
//     return view('testing.about');
// });

// Route::get('/', function (){
//     return view('dbkoneksi');
// });

// // Login
// Route::get('/', [LoginController::class, 'login'])->name('login');
// Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// // Home
// Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

// // Register
// Route::get('/register', [RegisterController::class, 'register'])->name('register');
// Route::get('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

// // Route Mengelola Data
// Route::get('/insert-sql', [AnggotaController::class, 'insertsql']);
// Route::get('/tampil', [AnggotaController::class, 'tampilan']);
// Route::get('/delete', [AnggotaController::class,'hapus']);
// Route::get('/insert-timestamp', [AnggotaController::class, 'insertTimestamp']);
// Route::get('/proses', [AnggotaController::class, 'prosesinput']);
// Route::get('/', [AnggotaController::class, 'index']);

// Route::get('/siswa', 'SiswaController@index');

// Route::get('/files', [App\Http\Controllers\FileController::class, 'index'])->name('files.index');
// Route::get('/files/create', [App\Http\Controllers\FileController::class, 'create'])->name('files.create');
// Route::get('/files/store', [App\Http\Controllers\FileController::class, 'store'])->name('files.store');
// Route::get('/files/{file}/download', [App\Http\Controllers\FileController::class, 'download'])->name('files.download');

// Route::get('/file-upload', [FileUploadController::class, 'fileUpload']);
// Route::post('/file-upload', [FileUploadController::class, 'prosesfileupload']);

// Route::get('/daftar-mahasiswa', [MahasiswaController::class, 'daftarMahasiswa']);
// Route::get('/tabel-mahasiswa', [MahasiswaController::class, 'tabelMahasiswa']);
// Route::get('/blog-mahasiswa', [MahasiswaController::class, 'blogMahasiswa']);

// Route::get('/produk', [ProductController::class, 'index']);
$router->get('/produk', [ProductController::class, 'index']);
<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

//Interface Admin
Route::get('Dash',[AdminController::class,'DashAdmin']);
Route::get('TambahBuku',[AdminController::class,'BukuTambah']);
Route::get('TambahKategori',[AdminController::class,'kategori']);
Route::get('TambahKategoriRelasi',[AdminController::class,'kategoriRelasi']);
Route::get('Histori',[AdminController::class,'hPeminjaman']);
Route::get('TambahPetugas',[AdminController::class,('dataPetugas')]);

//Interface Tambah Menambah
Route::get('AddBuku',[AdminController::class,'addBuku']);
Route::get('AddPetugas',[AdminController::class,'addPetugas']);
Route::get('AddKategori',[AdminController::class,'addKategori']);
Route::get('AddKategoriRelasi',[AdminController::class,'addKategoriRelasi']);

//INterface User
Route::get('Dashboard',[UserController::class,('Dashboard')]);
Route::get('BukuSaya',[UserController::class,('BukuSaya')]);

//CRUD BUKU
Route::post('simpanbuku',[AdminController::class,'simpanBuku']);
Route::get('hapusBuku/{idb}',[AdminController::class,'hapusBuku']);
Route::get('editBuku/{idb}',[AdminController::class,'editBuku']);


//CRUD Kategori
Route::post('simpanKategori',[AdminController::class,'simpanKategori']);
Route::post('simpanKategoriRelasi',[AdminController::class,'simpanKategoriRelasi']);
Route::get('hapusKategori/{idk}',[AdminController::class,'hapusKategori']);
Route::get('hapusKategoriRelasi/{idkR}',[AdminController::class,'hapusKategoriRelasi']);
Route::get('editKategori/{idk}',[AdminController::class,'editKategori']);

//CRUD Petugas
Route::post('simpanpetugas',[AdminController::class,('simpanPetugas')]);
Route::get('hapusPetugas/{idpet}',[AdminController::class,'hapusPetugas']);










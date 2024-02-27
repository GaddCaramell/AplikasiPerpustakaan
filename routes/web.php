<?php

use App\Http\Controllers\AdminController;
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

//Interface
Route::get('Dash',[AdminController::class,'DashAdmin']);
Route::get('TambahBuku',[AdminController::class,'BukuTambah']);
Route::get('Histori',[AdminController::class,'hPeminjaman']);
Route::get('TambahPetugas',[AdminController::class,('dataPetugas')]);

//Interface Tambah Menambah
Route::get('AddBuku',[AdminController::class,'addBuku']);
Route::get('AddPetugas',[AdminController::class,'addPetugas']);

//CRUD BUKU
Route::post('simpanbuku',[AdminController::class,'simpanBuku']);
Route::get('hapusBuku/{idb}',[AdminController::class,'hapusBuku']);
Route::get('editBuku/{idb}',[AdminController::class,'editBuku']);

//CRUD Petugas
Route::post('simpanpetugas',[AdminController::class,('simpanPetugas')]);
Route::get('hapusPetugas/{idpet}',[AdminController::class,'hapusPetugas']);
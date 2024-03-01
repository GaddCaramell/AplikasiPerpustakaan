<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategoribuku;
use App\Models\Kategoribuku_relasi;
use App\Models\Peminjam;
use App\Models\Pengguna;
use App\Models\Petugas;
use App\Models\Ulasanbuku;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Interface Dashboard Admin
    public function DashAdmin(){
        return view('AdminDash.DashBlade',['JumlahPengguna'=>Pengguna::count(),'JumlahBuku'=>Buku::count(),'BukuDipinjam'=>Peminjam::count(),'Ulasan'=>Ulasanbuku::count()]);
    }
    //Interface Buku
    public function BukuTambah(){
        $bku = new Buku();
        return view('AdminDash.BukuBlade',['Buku'=>$bku->all()]);
    }
    //Interface Tambah Buku
    public function addBuku(){
        $bku = new Buku();
        return view('AdminDash.addBukuBlade');
    }
    //Interface Petugas
    public function dataPetugas(){
        $petu = new Petugas();
        return view ('AdminDash.PetugasBlade',['Petu'=>$petu->all()]);
    }
    //Interface Tambah Petugas
    public function addPetugas(){
        return view('AdminDash.addPetugasBlade');
    }
    //Interface History Peminjaman
    public function hPeminjaman(){
        return view('AdminDash.historyBlade');
    }

    //Interface Kategori
    public function kategori(){
        $kat = new Kategoribuku();
        return view ('AdminDash.KategoriBlade',['KBuku'=>$kat->all()]);
    }
    //Interface Tambah Kategori
    public function addKategori(){
        return view('AdminDash.addKategoriBlade');
    }
    //Interface Kategori Relasi
    public function kategoriRelasi(){
        $katR = new Kategoribuku_relasi();
        return view('AdminDash.RelasiBlade',['KRBuku'=>$katR->all()]);
    }
    //Interface Tambah RelasiKategori
    public function addKategoriRelasi(){
        $katR = new Kategoribuku_relasi();
        $kat = new Kategoribuku();
        $bku = new Buku();
        return view('AdminDash.addKategoriRelasi',['KBuku'=>$kat->all(),'Bku'=>$bku->all()]);
    }
    //CRUD Buku
    public function simpanBuku(Request $request){
        $bku = new Buku();
        $bku->create($request->all());
        return redirect('TambahBuku')->with('alert','Sukses');
    }
    public function hapusBuku($idb){
        $bku = new Buku();
        $bku = $bku->where('BukuID',$idb);
        $bku->delete();
        return back();
    }

    //End CRUD Buku

    //CRUD Petugas
    public function simpanPetugas(Request $request){
        $petu = new Petugas();
        $petu->create($request->all());
        return redirect('TambahPetugas')->with('alert','Sukses');
    }
    public function hapusPetugas($idpet){
        $petu = new Petugas();
        $petu->find($idpet)->delete();
        return back();
    }
    //END CRUD Petugas

    //CRUD Kategori

    public function simpanKategori(Request $request){
        $kat = new Kategoribuku();
        $cek = $request->validate([
            'KategoriID'=>'required',
            'NamaKategori'=>'required',
        ]);
        $kat->create($request->all());
        return redirect('TambahKategori');
    }

    public function hapusKategori($idk){
        $kat = new Kategoribuku();
        $kat = $kat->find($idk);
        $kat->delete();
        return back();
    }

    //END CRUD Kategori

    //CRUD KRelasi
    public function simpanKategoriRelasi(Request $request){
        $katR = new Kategoribuku_relasi();
        $katR->create($request->all());
        return redirect('TambahKategoriRelasi');
    }

    public function hapusKategoriRelasi($idkR){
        $katR = new Kategoribuku_relasi();
        $katR = $katR->find($idkR);
        $katR->delete();
        return back();
    }
    //END CRUD KRelasi


}

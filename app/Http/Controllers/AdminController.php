<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Pengguna;
use App\Models\Petugas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Interface Dashboard
    public function DashAdmin(){
        return view('AdminDash.DashBlade',['JumlahPengguna'=>Pengguna::count(),'JumlahBuku'=>Buku::count()]);
    }
    //Interface Buku
    public function BukuTambah(){
        $bku = new Buku();
        return view('AdminDash.BukuBlade',['Buku'=>$bku->all()]);
    }
    //Interface Tambah Buku
    public function addBuku(){
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
        
    //CRUD Buku
    public function simpanBuku(Request $request){
        $bku = new Buku();
        $bku->create($request->all());
        return redirect('TambahBuku')->with('alert','Sukses');
    }
    public function hapusBuku($idb){
        $bku = new Buku();
        $bku->find($idb)->delete();
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
}

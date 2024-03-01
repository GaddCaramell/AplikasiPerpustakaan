<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjam;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Dashboard(){
        $bku = new Buku();
        return view('UserDash.UserDashBlade',['Buku'=>$bku->paginate(5)]);
    }

    public function BukuSaya(){
        $pin = new Peminjam();
        return view('UserDash.BukuSaya',['BukuSaya'=>$pin->all()]);
    }
}

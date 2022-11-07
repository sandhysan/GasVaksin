<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Tempat;
use App\Models\User;
use Illuminate\Http\Request;

class AdminLaporanController extends Controller
{
    public function index(){
        $pendaftar = Pendaftaran::get()->count();
        $user= User::get()->count();
        $tempat = Tempat::get()->count();
        return view('admin.laporan',['pendaftar'=>$pendaftar,'user'=>$user,'tempat'=>$tempat]);
    }
}

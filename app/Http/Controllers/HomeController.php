<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\Pendaftaran;
use App\Models\Tempat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $tempat = Tempat::first();

        $blogs = Informasi::with('user')->get();

        if (isset(Auth::user()->id)) {
            $riwayat = Pendaftaran::where('user_id','=', Auth::user()->id)->with('tempat','user','informasi')->first();

            return view('user.home', ['tempat' => $tempat, 'riwayat' => $riwayat, 'blogs'=>$blogs]);

        }
        return view('user.home', ['blogs'=>$blogs]);
    }
}

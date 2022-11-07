<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        $riwayat = Pendaftaran::where('user_id','=', $id)->with('tempat','user','informasi')->get();

        return view('user.riwayat',['data' => $riwayat]);
    }

    public function sertif($id){

        $riwayat = Pendaftaran::where('id','=', $id)->with('tempat','user','informasi')->first();

        return view('user.sertif',['riwayat'=>$riwayat]);

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Tempat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Redirect;

class DaftarController extends Controller
{
    public function index(){
        $tempat = Tempat::where('tahap','=', 1)->paginate(7);

        // $dataCari = 0;
        return view('user.pendaftaran',['tempat' => $tempat]);

    }

    public function daftar($id){

        $cek = Pendaftaran::select('*')->where('user_id','=', Auth::user()->id)->get();

        $user = Auth::user()->id;
        $count = Pendaftaran::select('*')->where('user_id','=', $user)->count();
        if ($count < 1) {


                $tempat = Tempat::find($id);
                $kuota = intval($tempat->kuota - 1);
                $tempat->kuota = $kuota;
                $tempat->save();


                Pendaftaran::create([
                    'user_id' => Auth::user()->id,
                    'tempat_id' => $id,
                    'status' => 'belum'
                ]);

                $tempat = Tempat::paginate(7);
                return redirect('/daftar');



            }
            return back()->with('kosong','batas maksimal mendaftar 1 kali dan untuk tahap kedua bisa di akan didaftarkan oleh petugas');
    }
    // cari
    public function search(Request $request)
    {
            $id = $request ->id;

            $hasil = Tempat::select('*')->where('id','=', $id)->where('tahap','=', 1)->first();

            $dataCari = Tempat::select('*')->where('id','=', $id)->where('tahap','=', 1)->count();

            $tempat = Tempat::where('tahap','=', 1)->paginate(7);

            if ($dataCari > 0) {
                return view('user.pendaftaran',['tempat' => $tempat ,'hasil' => $hasil,'data' => $dataCari]);
            } else {
                return redirect('/daftar')->with('kosong','Ups data tidak di temukan');
            }


    }

}

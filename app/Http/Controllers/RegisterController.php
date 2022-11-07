<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;

class RegisterController extends Controller
{
    public function index(){
        return view('registrasi');
    }
    public function store(Request $request){

        if ($request->Password == $request->Konfirmasi) {
            $validateData = $request->validate([
                'NIK'           => 'required | unique:users,id',
                'Nama'          => 'required',
                'Email'         => 'required | email | unique:users,email',
                'lahir'         => 'required',
                'Alamat'        => 'required',
                'Tlp'           => 'required',
                'Password'      => 'required | min:6',
                'level'         => 'required'
             ]);

             $pass= Hash::make($request->Password);

             User::create([
                'id' => $request->NIK,
                'nama' => $request->Nama,
                'email' => $request->Email,
                'tgl_lahir' => $request->lahir,
                'alamat' => $request->Alamat,
                'no_hp' => $request->Tlp,
                'password' => $pass,
                'level_user' => $request->level
            ]);

            return redirect('login')->with('registrasi','Selamat anda telah terdaftar!, Silakan Login');
        }else {
            return view('registrasi');
        }
    }
}

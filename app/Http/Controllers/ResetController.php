<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ResetController extends Controller
{
    public function index(){
        return view('forget');
    }
    public function reset(Request $request){
            $pass= Hash::make($request->password);
            $request->validate([
                'id'           => 'required ',
                'email'          => 'required',
                'password'          =>'required'
            ]);
            $data=User::where('id',$request->id )->where('email', $request->email)->first();
            if (isset($data)) {
                $data->password = $pass;
                $data->save();
                return back()->with('gagal','berhasil');
            }
            return back()->with('gagal','gagal');





        }

}

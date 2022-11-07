<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'id' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt(['id' => $request->id, 'password' => $request->password, 'level_user' => 'admin'])) {
            $request->session()->regenerate();
            return redirect()->intended('/root/admin');
        }elseif (Auth::attempt(['id' => $request->id, 'password' => $request->password, 'level_user' => 'user'])) {
            $request->session()->regenerate();
            return redirect()->intended('/beranda');
        }

        return back()->with('loginError','Login gagal!');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

}

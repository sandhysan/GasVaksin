<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserAdminController extends Controller
{
    public function index(){
        $user=User::where('level_user','admin')->paginate(10);
        return view('admin.useradmin', ['user'=>$user]);
    }
    public function hapus($id){
        $data = User::find($id);
        if (isset($data)) {
            $data->delete();
            return back()->with('pesan','data berhasi di hapus');
        }
        return back()->with('pesan','data gagal di hapus');
    }

    public function viewedit($id){
        $cek = User::select('*')->where('id',$id)->first();
        if (isset($cek)) {
            return view('admin.posts.editadmin', ['data' => $cek]);
        } else {
            return back()->with('pesan', 'Gagal Menampilkan Form Edit Admin');
        }
    }

    public function edit(Request $request){
        $useradmin = User::find($request->id);
        if (isset($useradmin)) {
            $useradmin->nama = $request->nama;
            $useradmin->email = $request->email;
            $useradmin->tgl_lahir = $request->tgl;
            $useradmin->no_hp = $request->nohp;
            $useradmin->level_user = $request->level;
            $useradmin->save();
            if ($request->level=='user') {
                return redirect('/admin/user')->with('pesan', 'Edit Akun Berhasil');
            }
            return redirect('/admin/admin')->with('pesan', 'Edit Akun Berhasil');
        }else {
            return redirect('/admin/admin')->with('pesan', 'Proses Edit Gagal');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index(){
        $user=User::where('level_user','user')->paginate(10);
        return view('admin.user', ['user'=>$user]);
    }
    public function hapus($id){
        $data = User::find($id);
        if (isset($data)) {
            $data->delete();
            return back()->with('pesan','data berhasi di hapus');
        }
        return back()->with('pesan','data gagal di hapus');
    }
    public function editview($id){
        $cek = User::select('*')->where('id', $id)->first();
        if (isset($cek)) {
            return view('admin.posts.edituser', ['data' => $cek]);
        } else {
            return back()->with('pesan', 'Gagal Menampilkan Form Edit');
        }
    }

    public function edit(Request $request){
        $tempat = User::find($request->id);
        if (isset($tempat)) {
            $tempat->provinsi = $request->provinsi;
            $tempat->nama_tempat = $request->provinsi;
            $tempat->alamat_tempat = $request->alamat;
            $tempat->link_lokasi = $request->link;
            $tempat->tanggal = $request->tanggal;
            $tempat->jam = $request->jam;
            $tempat->kuota = $request->kuota;
            $tempat->tahap = $request->tahap;
            $tempat->save();
            return redirect('/admin/tempat')->with('pesan', 'Proses Edit Berhasil');
        } else {
            return redirect('/admin/tempat')->with('pesan', 'Proses Edit Gagal');
        }
    }
}

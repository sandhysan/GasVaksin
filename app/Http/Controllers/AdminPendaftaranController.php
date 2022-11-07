<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class AdminPendaftaranController extends Controller
{
    public function index(){
        $daftar = Pendaftaran::with('tempat','user','informasi')->paginate(10);
        return view('admin.pendaftaran',['daftar'=>$daftar]);
    }
    public function hapus($id){
        $data = Pendaftaran::find($id);
        if (isset($data)) {
            $data->delete();
            return back()->with('pesan','data berhasi di hapus');
        }
        return back()->with('pesan','data gagal di hapus');
    }
    public function viewedit($id){
        $cek = Pendaftaran::select('*')->where('id',$id)->first();
        $vaksin = Informasi::get();
        if (isset($cek)) {
            return view('admin.posts.editdaftar', ['data' => $cek,'vaksin'=>$vaksin]);
        } else {
            return back()->with('pesan', 'Gagal Menampilkan Form Edit');
        }
    }
    public function edit(Request $request){
        $daftar = Pendaftaran::find($request->id);
        if (isset($daftar)) {
            $daftar->user_id = $request->user;
            $daftar->tempat_id = $request->tempat;
            $daftar->informasi_id = $request->informasi;
            $daftar->status = $request->status;
            $daftar->save();
            return redirect('/admin/pendaftaran')->with('pesan', 'Proses Edit Berhasil');
        } else {
            return redirect('/admin/pendaftaran')->with('pesan', 'Proses Edit Gagal');
        }
    }
}

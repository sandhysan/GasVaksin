<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminInfoController extends Controller
{
    public function index(){
        $info=Informasi::paginate(10);
        return view('admin.info',['info'=>$info]);
    }

    public function hapus($id){
        $data = Informasi::find($id);
        if (isset($data)) {
            $data->delete();
            return back()->with('pesan','data berhasi di hapus');
        }
        return back()->with('pesan','data gagal di hapus');
    }

    public function input(){
        return view('admin.posts.inputinfo');
    }

    public function simpan(Request $request){
        $request->validate([
            'judul' => 'required',
            'potongan' => 'required',
            'konten' => 'required'
        ]);

        Informasi::create([
            'user_id'=>Auth::user()->id,
            'judul'=>$request->judul,
            'potongan_konten'=>$request->potongan,
            'konten'=>$request->konten
        ]);
        return redirect('/admin/info')->with('pesan', 'Sukses menambahkan informasi');
    }

    public function viewedit($id){
        $cek = Informasi::select('*')->where('id',$id)->first();
        if (isset($cek)) {
            return view('admin.posts.editinfo', ['data' => $cek]);
        } else {
            return back()->with('pesan', 'Gagal Menampilkan Form Edit');
        }
    }

    public function edit(Request $request){
        $info = Informasi::find($request->id);
        if (isset($info)) {
            $info->judul = $request->judul;
            $info->potongan_konten = $request->potongan;
            $info->konten = $request->konten;
            $info->save();
            return redirect('/admin/info')->with('pesan', 'Proses Edit Berhasil');
        }else {
            return redirect('/admin/info')->with('pesan', 'Proses Edit Gagal');
        }
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Tempat;
use Illuminate\Http\Request;

class AdminTempatController extends Controller
{
    public function index(){
        $tempat=Tempat::paginate(10);
        return view('admin.tempat',['tempat'=>$tempat]);
    }
    public function hapus($id){
        $data = Tempat::find($id);
        if (isset($data)) {
            $data->delete();
            return back()->with('pesan','data berhasi di hapus');
        }
        return back()->with('pesan','data gagal di hapus');
    }

    public function input(){
        return view('admin.posts.inputtempat');
    }

    public function simpan(Request $request){
        $request->validate([
            'provinsi' => 'required',
            'nik' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'link' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'kuota' => 'required',
            'tahap' => 'required'
        ]);

        // dd($request);

        Tempat::create([
            'provinsi'=>$request->provinsi,
            'nama_tempat'=>$request->nama,
            'user_id'=>$request->nik,
            'alamat_tempat'=>$request->alamat,
            'link_lokasi'=>$request->link,
            'tanggal'=>$request->tanggal,
            'jam'=>$request->jam,
            'kuota'=>$request->kuota,
            'tahap'=>$request->tahap,

        ]);
        return redirect('/admin/tempat')->with('pesan', 'Sukses menambahkan tempat lokasi vaksin');
    }

    public function editview($id){
        $cek = Tempat::select('*')->where('id', $id)->first();
        if (isset($cek)) {
            return view('admin.posts.edittempat', ['data' => $cek]);
        } else {
            return back()->with('pesan', 'Gagal Menampilkan Form Edit');
        }
    }

    public function edit(Request $request){
        $tempat = Tempat::find($request->id);
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

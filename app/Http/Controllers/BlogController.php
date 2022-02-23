<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function home(){
        return view('home');
    }

    public function tabel(){
        $pegawai = DB::table('pegawai')->paginate(10);
        return view('tabel',['pegawai' => $pegawai]);
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
		->where('pegawai_nama','like',"%".$cari."%") 
        ->orwhere ('pegawai_jabatan','like',"%".$cari."%")
		->paginate();
 
		return view('tabel',['pegawai' => $pegawai]);
 
	}

    public function tambah(){
        return view('tambah');
    }

    public function store(Request $request){
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

        return redirect('/blog/tabel');
    }

    public function edit($id){
        $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
        return view('edit',['pegawai' => $pegawai]);
    }

    public function hapus($id){
        DB::table('pegawai')->where('pegawai_id',$id)->delete();
        return redirect('/blog/tabel');
    }

    public function kontak(){
        return view('kontak');
    }
}

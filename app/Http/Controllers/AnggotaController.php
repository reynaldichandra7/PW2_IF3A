<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    //
    public function insertsql(){
        $result=DB::insert("insert into anggotas(no_anggota,nama,alamat,jurusan,tgl_daftar,noHP) values (
        'A00001', 
        'Yulianto', 
        'Plaju', 
        'Informatika', 
        '2024-9-24', 
        '08123456789')"
    );
    dump($result);
    }

    public function tampilan(){
        $result=DB::select('select * from anggotas');
        return view('tampil-anggotas', ['anggotas' => $result]);
    }

    public function hapus(){
        $result=DB::delete('DELETE from anggotas Where nama= ?', ['Yulianto']);
        dump($result);
    }

    public function index() {
        return view('daftar');
    }

    public function prosesinput(Request $request) {
        DB::table('anggotas')->insert([
            'noanggota' => $request->nomor,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jurusan' => $request->jurusan,
            'tgl_daftar' => $request->tgl,
            'notelp' => $request->notel,
        ]
        );
        
        return view('/daftar');
    }

    public function delete($id){
        DB::table('anggotas')->where('id',$id)->delete();
    }

}

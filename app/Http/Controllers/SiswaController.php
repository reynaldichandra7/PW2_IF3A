<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function insertsql() {
        $result=DB::insert("insert into siswa(npm,nama,alamat,telpon) values (
        '2125250008', 
        'Reynaldi Chandra', 
        'Jl. Panca Usaha', 
        '08123456789')"
    );
    dump($result);
    }

    public function tampilan() {
        $result=DB::select('select * from siswa');
        return view('tampil-siswa', ['siswa' => $result]);
    }
}

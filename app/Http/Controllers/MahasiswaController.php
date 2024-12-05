<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Membuat Beberapa Method
    public function daftarMahasiswa()
    {
        return 'Ini Form Mahasiswa';
    }

    public function tabelMahasiswa()
    {
        return "Tabel Data Mahasiswa";
    }

    public function blogMahasiswa()
    {
        return 'Blog Mahasiswa';
    }
}

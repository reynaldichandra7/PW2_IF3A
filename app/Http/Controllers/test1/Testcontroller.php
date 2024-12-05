<?php

namespace App\Http\Controllers\test1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Testcontroller extends Controller
{
    public function index (){
        return "<h1>Hallo Selamat Datang, ini dari Controller</h1>";
    }
}

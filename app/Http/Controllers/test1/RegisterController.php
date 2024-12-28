<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    //
    public function register()
    {
        return view('./testing/register');
    }

    public function actionregister(Request $request) {
        $user= User::create([
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=>Hash::make($request->password),
            'role'=>$request->role,
            'active'=>1
        ]);
    }
}

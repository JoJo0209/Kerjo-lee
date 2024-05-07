<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function proseslogin(Request $request)
    {
        if(Auth::guard("Karyawan")->attempt(["nik" => $request->nik, "password" => $request->password])){
            return redirect('/dashboard');
        } else {
            echo "Gagal Login";
        }
    }
    public function proseslogout()
    {
        if (Auth::guard('Karyawan')->check ()){
            Auth::guard('Karyawan')->logout();
            return redirect('/');

        }
    }

}


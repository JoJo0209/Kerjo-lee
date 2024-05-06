<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Perlu di-import

class AuthController extends Controller
{
    public function proseslogin(Request $request)
    {
        if(Auth::guard("karyawan")->attempt(["Nik" => $request->Nik, "password" => $request->password])){
            echo "Berhasil Login";
        } else {
            echo "Gagal Login";
        }
    }
}


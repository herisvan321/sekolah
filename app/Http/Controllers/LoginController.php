<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminModel;
use App\BkModel;
use App\GuruModel;
use App\KepSekModel;
use App\OrTuModel;
use App\PerpusModel;
use App\SiswaModel;
use App\SuperAdminModel;

class LoginController extends Controller
{
    public function LoginSuperAdmin(Request $req){
    	$credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/homesuperadmin');
        }
    }
}

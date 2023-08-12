<?php

namespace App\Http\Controllers\Auth;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    // login untuk masyarakat
    public function FormLoginMasyarakat()
    {
        return view ('auth.login');
    }
    public function LoginMasyarakat() {
        $auth = request()->only('username', 'password');
        if(Auth()->guard('masyarakat')->attempt($auth)){
            return redirect()->to('/');
        }
    }

    // login untuk petugas
    public function FormLoginPetugas()
    {
        return view('petugas.auth.login');
    }

    public function LoginPetugas()
    {
        $auth = request()->only('username', 'password');
        if(Auth()->guard('petugas')->user()->level == 'petugas')
        {
            return redirect()->to('/');
        } else {
            return redirect()->to('/petugas.login');
        }
    }


}

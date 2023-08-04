<?php

namespace App\Http\Controllers\Auth;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
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
}

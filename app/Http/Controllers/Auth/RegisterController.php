<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Masyarakat;

class RegisterController extends Controller
{
    public function RegisterFormMasyarakat()
    {
        return view('auth.register');
    }

    public function RegisterMasyrakat()
    {
        $data_masyarakat = new Masyarakat();
        $data_masyarakat->nik = request()->get('nik');
        $data_masyarakat->nama = request()->get('nama');
        $data_masyarakat->username = request()->get('username');
        $data_masyarakat->password = bcrypt(request()->get('password'));
        $data_masyarakat->telp = request()->get('telp');
        $data_masyarakat->save();
        return redirect()->to('/register')->with('success', 'Data Masyarakat Sukses Ditambahkan!');
    }
}

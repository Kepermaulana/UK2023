<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Masyarakat, Petugas};

class RegisterController extends Controller
{
    public function RegisterFormMasyarakat()
    {
        return view('auth.register');
    }

    public function RegisterMasyarakat()
    {
        request()->validate([
            'nik' => 'required|unique:masyarakats',
            'nama' => 'required',
            'username' => 'required|unique:masyarakats',
            'password' => 'required',
            'telp' => 'required',
        ]);

        $data_masyarakat = new Masyarakat();
        $data_masyarakat->nik = request()->get('nik');
        $data_masyarakat->nama = request()->get('nama');
        $data_masyarakat->username = request()->get('username');
        $data_masyarakat->password = bcrypt(request()->get('password'));
        $data_masyarakat->telp = request()->get('telp');
        $data_masyarakat->save();
        return redirect()->to('/register')->with('success', 'Data Masyarakat Sukses Ditambahkan!');
    }


    // Regitrasi Admin & Petugas
    public function RegisterFormAdmin()
    {
        return view('admin.auth.register');
    }

    public function RegisterAdmin()
    {
        request()->validate([
            'nama_petugas' => 'required',
            'username' => 'required|unique:petugas',
            'password' => 'required',
            'telp' => 'required',
        ]);

        $data_admin = new Petugas();
        $data_admin->nama_petugas = request()->get('nama_petugas');
        $data_admin->username = request()->get('username');
        $data_admin->password = bcrypt(request()->get('password'));
        $data_admin->telp = request()->get('telp');
        $data_admin->level = request()->get('level');
        $data_admin->save();    
        return redirect()->to('/admin/register')->with('success' , 'Registrasi Berhasil !');
    }
}

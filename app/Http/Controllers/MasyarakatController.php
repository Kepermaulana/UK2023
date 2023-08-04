<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Pengaduan, Masyarakat, Tanggapan};
use Illuminate\Support\Facades\Auth;

class MasyarakatController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function FormPengaduan()
    {
        return view('form-pengaduan');
    }

    public function simpanPengaduan()
    {
        $data_pengaduan = Pengaduan::create(request()->all());
        return redirect()->to('/');
    }
    public function laporanku()
    {
        $data_pengaduan = Auth()->guard('masyarakat')->user()->pengaduans;
        return view('laporanku', compact('data_pengaduan'));
    }
    public function logout()
    {
        Auth()->guard('masyarakat')->logout();
        return redirect()->to('/');
    }
}

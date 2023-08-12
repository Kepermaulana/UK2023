<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Pengaduan, Masyarakat, Tanggapan, Image};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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

    public function simpanPengaduan(Request $request)
    {
        // $data_pengaduan = Pengaduan::create(request()->all());
        // $foto = request()->file('foto');
        // $filename = $foto->getClientOriginalName();

        // $foto->move(public_path().'/images/' . $filename);
        // $foto_compress = Image::make(public_path(). '/images/'. $filename);
        // $foto_compress->fit(240, 400);
        // $foto_compress->save(public_path('/img/'.$filename));
        // unlink(public_path('/images/'.$filename));

        

    //   if($request->has('foto')){        
        $foto = $request->foto;
        $ext = $foto->extension();
        $newAttachment = Str::uuid()->toString().'.'.$ext;
        $foto->move('images/', $newAttachment); 

        $data_pengaduan = new Pengaduan();
        $data_pengaduan->tanggal_pengaduan = request()->get('tanggal_pengaduan');
        $data_pengaduan->masyarakat_nik = request()->get('masyarakat_nik');
        $data_pengaduan->isi_laporan = request()->get('isi_laporan');
        $data_pengaduan->foto = $newAttachment;
        $data_pengaduan->save();
        return redirect()->to('/');
    //   }
    }
    public function laporanku()
    {
        // $data_pengaduan = Auth()->guard('masyarakat')->user()->pengaduans;
        $data_pengaduan = Pengaduan::with('masyarakat')->where('masyarakat_nik', Auth()->guard('masyarakat')->user()->nik)->get();
        return view('laporanku', compact('data_pengaduan'));
    }
    public function logout()
    {
        Auth()->guard('masyarakat')->logout();
        return redirect()->to('/');
    }
}

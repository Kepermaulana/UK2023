<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    protected $table = "pengaduans";
    protected $fillable = ['tanggal_pengaduan', 'masyarakat_nik', 'isi_laporan', 'foto', 'status'];

    public function masyarakat()
    {
        return $this->belongsTo('App\Models\Masyarakat', 'foreign_key', 'local_key');
    }
}

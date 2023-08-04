<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;
    protected $table = "tanggapans";
    protected $fillable = ['pengaduan_id', 'tanggal_tanggapan', 'tanggapan', 'petugas_id'];
}

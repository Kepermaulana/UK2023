<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Masyarakat extends Authenticatable
{
    use HasFactory;
    protected $table = "masyarakats";
    protected $fillable = ['nama', 'username', 'password', 'telp'];
    protected $primaryKey = "nik";
    protected $guard = 'masyarakat'; 
    protected $hidden = ['password'];

    public function pengaduans()
    {
        return $this->hasMany(Pengaduan::class);
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;

class Masyarakat extends Model
{
    use HasFactory;
    protected $table = 'masyarakats';
    protected $fillable=[
        'nik', 
        'nama', 
        'email', 
        'password', 
        'telp', 
    ];

    public function pengaduan() 
    {
        return $this->hasMany(Pengaduan::class, 'masyarakat_id');
    }

}



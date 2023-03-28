<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;

class Petugas extends Model
{
    use HasFactory;
    protected $table = 'petugas';
    protected $guard = 'petugas';
    protected $fillable = [ 
        'nama_petugas',
        'email',
        'password',
        'telp',
        'level',
    ];

    public function tanggapan() 
    {
        return $this->hasMany(Tanggapan::class, 'petugas_id');
    }
}
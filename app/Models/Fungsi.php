<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fungsi extends Model
{
    use HasFactory;
    protected $table= 'fungsis';
    protected $fillable=[ 
        'nama_petugas',
        'username',
        'password',
        'telp',
        'level',
    ];
}

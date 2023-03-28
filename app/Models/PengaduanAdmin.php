<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengaduanAdmin extends Model
{
    use HasFactory;
    protected $table = 'pengaduans';
    protected $fillable=[
        'masyarakat_id',
        'tgl_pengaduan', 
        'judul_laporan', 
        'isi_laporan', 
        'foto',
        'jenis_pengaduan',
        'status', 
    ];

    public function masyarakat() 
    {
        return $this->belongsTo(Masyarakat::class, 'masyarakat_id', 'id');
    }

    public function tanggapan()
    {
        return $this->hasOne(Tanggapan::class, 'pengaduan_id');
    }
}

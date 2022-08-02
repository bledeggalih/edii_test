<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','lamaran_id',
            "p_jenjang_pendidikan",
            "p_nama_institusi",
            "p_jurusan",
            "p_tahun_lulus",
            "p_ipk"
    ];

    protected $table = 'riwayat_pendidikan';
}

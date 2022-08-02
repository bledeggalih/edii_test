<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    use HasFactory;

    protected $fillable = ['user_id',
            "lamaran_id",
            "l_nama_kursus",
            "l_sertifikat",
            "l_tahun"
];

    protected $table = 'riwayat_pelatihan';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    use HasFactory;

    protected $fillable = ['user_id',
            "lamaran_id",
            "k_perusahaan",
            "k_posisi",
            "k_pendapatan",
            "k_tahun"
];

    protected $table = 'riwayat_pekerjaan';
}

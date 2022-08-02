<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    use HasFactory;

    protected $fillable = ['user_id',
            "posisi",
            "nama",
            "ktp",
            "ttl",
            "jk",
            "agama",
            "goldar",
            "status",
            "alamat_ktp",
            "alamat_tinggal",
            "email",
            "telpon",
            "org_dpt_dihubungi",
            "skill",
            "penempatan",
            "pendapatan"
];

    protected $table = 'lamaran';
}

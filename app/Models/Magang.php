<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magang extends Model
{
    use HasFactory;

    protected $fillable = [
        'tempat_magang',
        'longitude',
        'latitude',
        'alamat',
        'kecamatan',
        'deskripsi',
        'posisi',
        'domain',
        'path_gambar'
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    use HasFactory;
    public $table = "data_sertifikat";
    protected $fillable = [
        'nomor_sertifikat',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'pelatihan',
        'tanggal_pelatihan',
        'kelas',
        'masa_berlaku',
    ];
}

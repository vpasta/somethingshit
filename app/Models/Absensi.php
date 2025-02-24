<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensi';

    protected $fillable = [
        'nama_kegiatan',
        'pembawa_materi',
        'perusahaan_penyelenggara',
        'departemen_penyelenggara',
        'absen_dibuka',
        'absen_ditutup',
    ];

    // public function karyawanAbsensi()
    // {
    //     return $this->hasMany(KaryawanAbsensi::class);
    // }
}

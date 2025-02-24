<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Karyawan extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nama', 'nik', 'jabatan', 'email', 'password',
    ];

    protected $hidden = [
        'password',
    ];
}

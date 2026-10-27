<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggans';

    protected $fillable = [
        'kode_pelanggan',
        'nama',
        'kategori',
        'email',
        'tanggal_daftar',
        'alamat',
        'keterangan',
    ];
}

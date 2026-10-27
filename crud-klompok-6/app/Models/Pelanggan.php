<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
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

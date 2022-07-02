<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paketkilo extends Model
{
    use HasFactory;
    // Table Paket Kiloan
    protected $fillable = [
        'kd_paket', 'nama_paket', 'harga_paket', 'hari_paket', 'min_berat_paket', 'antar_jemput_paket'
    ];
}

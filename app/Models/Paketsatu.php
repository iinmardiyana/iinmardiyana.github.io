<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paketsatu extends Model
{
    use HasFactory;
    // Table Paket Satuan
    protected $fillable = [
        'kd_barang', 'nama_barang', 'ket_barang', 'harga_barang'
    ];
}

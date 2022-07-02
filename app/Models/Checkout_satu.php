<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout_satu extends Model
{
    use HasFactory;
    // Table Checkout Satus
    protected $fillable = [
        'kd_invoice', 'kd_barang', 'jumlah_barang', 'metode_pembayaran', 'harga_barang', 'harga_antar', 'harga_total'
    ];
}

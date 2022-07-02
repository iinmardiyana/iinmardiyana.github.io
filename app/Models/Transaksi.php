<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    // Table Transaksis
    protected $fillable = [
        'id_outlet', 'kd_invoice', 'kd_pelanggan', 'tgl_pemberian', 'tgl_selesai', 'tgl_bayar', 'diskon', 'pajak', 'status', 'ket_bayar', 'kd_pegawai'
    ];
}

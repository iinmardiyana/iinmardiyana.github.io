<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    // Table Pelanggans
    protected $fillable = [
        'kd_pelanggan', 'nama_pelanggan', 'jk_pelanggan', 'email_pelanggan', 'no_hp_pelanggan', 'alamat_pelanggan'
    ];
}

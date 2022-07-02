<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Struk extends Model
{
    use HasFactory;
    // Table Struks
    protected $fillable = [
        'kd_invoice', 'harga_total', 'harga_bayar', 'harga_kembali'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;
    // Table Outlets
    protected $fillable = [
        'nama', 'alamat', 'hotline', 'email', 'iframe_script'
    ];
}

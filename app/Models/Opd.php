<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opd extends Model
{
    protected $primaryKey = 'kode';
    protected $casts = [
        'kode' => 'string'
    ];
}

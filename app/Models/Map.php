<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    protected $fillable = ['nama_map','periode', 'tahun', 'path'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peraturan extends Model
{
    protected $fillable = ["nama_peraturan", "tentang", "tanggal_penetapan", "nomor", "status", "path"];
    protected $attributes = [
      'status' => 1
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peraturan extends Model
{
    protected $fillable = ["jenis_peraturan", "tentang", "tanggal_penetapan", "nomor", "status", "path"];
}
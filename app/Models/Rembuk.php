<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rembuk extends Model
{
    protected $fillable = ['judul', 'kategori', 'keterangan','path'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sidebar extends Model
{
    protected $table = 'sidebar';
    protected $fillable = ['nama_sidebar', 'path', 'status'];
}

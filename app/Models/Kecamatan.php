<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';

    public function desa()
    {
        return $this->hasMany(Desa::class);
    }
}

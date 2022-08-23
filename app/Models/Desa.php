<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    protected $table = 'desa';
    protected $with = ['kecamatan'];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'idkecamatan', 'idkecamatan');
    }
}

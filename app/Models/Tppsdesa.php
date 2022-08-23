<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tppsdesa extends Model
{
    protected $table = 'tppsdesa';
    protected $fillable = ['desa_id', 'path', 'sk', 'tahun'];
    protected $with = ['desa'];

    public function desa()
    {
        return $this->belongsTo(Desa::class, 'desa_id', 'iddesa');
    }
}


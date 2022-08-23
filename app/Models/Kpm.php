<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kpm extends Model
{
    protected $fillable = ['desa_id', 'path', 'nama_kpm', 'tahun'];
    protected $with = ['desa'];

    public function desa()
    {
        return $this->belongsTo(Desa::class, 'desa_id', 'iddesa');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renja extends Model
{
    protected $table = 'renja';
    protected $fillable = ['kec_id', 'renja', 'tahun', 'path', 'level'];

    /**
     * For level:.
     * 1 -> Desa
     * 2 -> Kecamatan
     * 3 -> Kabupaten
     */

    protected $attributes = ['kec_id' => null];

    protected $with = 'kecamatan';

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kec_id', 'idkecamatan');
    }

    public function desa()
    {
        return $this->belongsTo(Desa::class, 'kec_id', 'idkecamatan');
    }
}

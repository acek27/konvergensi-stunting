<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'lapor';
    protected $fillable = [
        'kec_id',
        'nama_laporan',
        'tahun',
        'path',
        'level'
    ];

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

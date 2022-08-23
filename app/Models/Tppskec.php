<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tppskec extends Model
{
    protected $table = 'tppskec';
    protected $fillable = ['kec_id', 'sk', 'tahun', 'path'];
    protected $with = 'kecamatan';

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kec_id', 'idkecamatan');
    }
}

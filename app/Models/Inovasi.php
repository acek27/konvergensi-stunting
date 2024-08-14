<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inovasi extends Model
{
    protected $table = 'inovasi';
    protected $guarded = [];
    protected $with = ['opd'];
    protected $casts = [
        'opd_id'=> 'string'
    ];
    protected $attributes = [
      'image' => null,
        'pendukung' => null
    ];

    public function opd()
    {
        return $this->belongsTo(Opd::class, 'opd_id', 'kode');
    }
}

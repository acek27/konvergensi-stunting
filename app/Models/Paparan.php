<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paparan extends Model
{
    protected $fillable = ['nama_paparan', 'path'];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->isoFormat('D MMMM Y');
    }
}

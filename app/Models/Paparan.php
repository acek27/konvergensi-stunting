<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paparan extends Model
{
    protected $fillable = ['nama_paparan', 'path'];
      protected $appends = ['tgl'];

    public function getTglAttribute()
{
     return Carbon::parse($this->created_ay)->isoFormat('D MMMM Y');
}
}

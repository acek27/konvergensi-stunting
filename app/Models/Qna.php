<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qna extends Model
{
    protected $table = 'qna';
    protected $primaryKey = 'tiket';
    protected $casts = ['tiket' => 'string'];
    protected $fillable = ['tiket', 'topik_id', 'nama_penanya', 'tanggal', 'pertanyaan', 'respon', 'status', 'email', 'telp', 'respon_id'];
    protected $attributes = ['respon' => null, 'status' => 0, 'respon_id' => null];
    protected $with = ['topik'];

    public function getTanggalAttribute($value)
    {
        return Carbon::parse($value)->isoFormat('D MMMM Y');
    }

    public function topik()
    {
        return $this->belongsTo(Topik::class, 'topik_id', 'id');
    }
    public function opd()
    {
        return $this->belongsTo(Opd::class, 'respon_id', 'kode');
    }
}

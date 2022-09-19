<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = ["nama_agenda", "sasaran", "tgl_mulai", "tgl_selesai", "opd_id"];
    protected $appends = ['start', 'finish'];
    protected $with = ['opds'];

    public function setTglMulaiAttribute($value)
    {
        $date = $value;
        $time = strtotime($date);
        $tanggal = date("Y-m-d", $time);
        $this->attributes['tgl_mulai'] = $tanggal;
    }

    public function getTglMulaiAttribute($value)
    {
        return date("Y-m-d", strtotime($value));
    }


    public function setTglSelesaiAttribute($value)
    {
        $date = $value;
        $time = strtotime($date);
        $tanggal = date("Y-m-d", $time);
        $this->attributes['tgl_selesai'] = $tanggal;
    }

    public function getTglSelesaiAttribute($value)
    {
        return date("Y-m-d", strtotime($value));
    }

//appends
    public function getStartAttribute()
    {
        return Carbon::parse($this->tgl_mulai)->isoFormat('D MMMM Y');
    }

    public function getFinishAttribute()
    {
        return Carbon::parse($this->tgl_selesai)->isoFormat('D MMMM Y');
    }

    public function opds()
    {
        return $this->belongsTo(Opd::class, 'opd_id', 'kode');
    }
}

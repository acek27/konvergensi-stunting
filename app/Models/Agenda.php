<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = ["nama_agenda", "sasaran", "tgl_mulai", "tgl_selesai",  "opd_id"];
    protected $appends = ['start', 'finish'];

    public function setTglMulaiAttribute($value)
    {
        $date = $value;
        $dt = str_replace('/', '-', $date);
        $tanggal = date("Y-m-d H:i", strtotime($dt));
        $this->attributes['tgl_mulai'] = $tanggal;
    }

    public function getTglMulaiAttribute($value)
    {
        return date("d-m-Y", strtotime($value));
    }
    public function getStartAttribute()
    {
        return date("m-d-Y", strtotime($this->tgl_mulai));
    }

    public function setTglSelesaiAttribute($value)
    {
        $date = $value;
        $dt = str_replace('/', '-', $date);
        $tanggal = date("Y-m-d H:i", strtotime($dt));
        $this->attributes['tgl_selesai'] = $tanggal;
    }

    public function getTglSelesaiAttribute($value)
    {
        return date("d-m-Y", strtotime($value));
    }
    public function getFinishAttribute($value)
    {
        return date("m-d-Y", strtotime($this->tgl_selesai));
    }
}

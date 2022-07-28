<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stunting extends Model
{
    protected $fillable = ['judul', 'kategori', 'keterangan','path'];
    protected $appends = ["jenis"];

    public function getJenisAttribute()
    {
        $jenis = "";
        if ($this->kategori == 1) {
            $jenis = "Jumlah dan Preverensi Stunting";
        } elseif ($this->kategori == 2) {
            $jenis = "Capaian Indikator";
        } else{
            $jenis = "Lokus Stunting";
        }
        return $jenis;
    }
}

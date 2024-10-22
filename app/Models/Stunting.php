<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stunting extends Model
{
    protected $fillable = ['judul', 'kategori', 'keterangan', 'path', 'tahun', 'jenis_capaian'];
    protected $appends = ["jenis"];
    protected $attributes = ['jenis_capaian' => null];

    public function getJenisAttribute()
    {
        $jenis = "";
        if ($this->kategori == 1) {
            $jenis = "Jumlah dan Preverensi Stunting";
        } elseif ($this->kategori == 2) {
            $jenis = "Capaian Indikator";
        } elseif ($this->kategori == 3) {
            $jenis = "Lokus Stunting";
        } else {
            $jenis = "Keluarga Berisiko Stunting";
        }
        return $jenis;
    }
}

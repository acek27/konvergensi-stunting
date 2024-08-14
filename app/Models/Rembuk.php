<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rembuk extends Model
{
    protected $fillable = ['judul', 'kategori', 'keterangan', 'path'];
    protected $appends = ["jenis"];

    public function getJenisAttribute()
    {
        $jenis = "";
        if ($this->kategori == 1) {
            $jenis = "Kabupaten";
        } elseif ($this->kategori == 2) {
            $jenis = "Desa";
        }
        elseif ($this->kategori == 3) {
            $jenis = "Kecamatan";
        }
        return $jenis;
    }
}

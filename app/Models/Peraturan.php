<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peraturan extends Model
{
    protected $fillable = ["nama_peraturan", "kategori", "tentang", "tanggal_penetapan", "nomor", "status", "path"];
    protected $attributes = [
        'status' => 1
    ];

    protected $appends = ["jenis"];

    public function getJenisAttribute()
    {
        $jenis = "";
        if ($this->kategori == 1) {
            $jenis = "Perpres";
        } elseif ($this->kategori == 2) {
            $jenis = "Perka";
        } elseif ($this->kategori == 3) {
            $jenis = "BKKBN";
        } elseif ($this->kategori == 4) {
            $jenis = "PERBUP";
        } elseif ($this->kategori == 5) {
            $jenis = "SK";
        } elseif ($this->kategori == 6) {
            $jenis = "PERDES";
        } elseif ($this->kategori == 7) {
            $jenis = "PERKADES";
        }
        return $jenis;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = ['id','judul','id_jenis','deskripsi','tanggal_terbit','penulis'];
    public $timestamp = true;

    // relasi ke tabel jenis
    public function jenis()
    {
        return $this->belongsTo(Jenis::class,'id_jenis');
    }
}

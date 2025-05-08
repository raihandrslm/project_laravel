<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;
    protected $fillable = ['id','jenis'];
    public $timestamp = true;

    // relasi ke tabel artikel
    public function artikel()
    {
        return $this->hasMany(Artikel::class);
    }
}

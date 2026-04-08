<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Rak;
use App\Models\Peminjaman;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'judul',
        'kategori',
        'pengarang',
        'penerbit',
        'tahun_terbit',
        'stok',
        'cover',
        'rak_id'
    ];

    //  RELASI
    public function rak()
    {
        return $this->belongsTo(Rak::class);
    }

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
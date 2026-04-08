<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Peminjaman;

class Pengembalian extends Model
{
    protected $table = 'pengembalian';

    protected $fillable = [
        'peminjaman_id',
        'tanggal_pengembalian',
        'denda'
    ];

    //  RELASI
    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class);
    }
}
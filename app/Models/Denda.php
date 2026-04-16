<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denda extends Model
{
    use HasFactory;

    protected $table = 'denda';

    protected $fillable = [
        'peminjaman_id',
        'hari_terlambat',
        'jumlah_denda',
        'status',
        'tanggal_denda',
        'tanggal_bayar'
    ];

    protected $casts = [
        'tanggal_denda' => 'datetime',
        'tanggal_bayar' => 'datetime',
    ];

    // RELASI
    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class);
    }

    public function user()
    {
        return $this->peminjaman->user;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';

    protected $fillable = [
        'user_id',
        'buku_id',
        'tanggal_pinjam',
        'tanggal_jatuh_tempo',
        'tanggal_kembali',
        'status'
    ];

    // RELASI
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }

    public function denda()
    {
        return $this->hasOne(Denda::class);
    }

    // Aksesor untuk hitung denda jika terlambat
    public function hitungDenda()
    {
        if (!$this->tanggal_jatuh_tempo) {
            return 0;
        }

        $terlambat = now()->diffInDays($this->tanggal_jatuh_tempo, false);
        
        if ($terlambat <= 0) {
            return 0;
        }

        return $terlambat * 5000; // Rp 5.000 per hari
    }

    public function isTerlambat()
    {
        if (!$this->tanggal_jatuh_tempo) {
            return false;
        }

        return now()->gt($this->tanggal_jatuh_tempo);
    }
}
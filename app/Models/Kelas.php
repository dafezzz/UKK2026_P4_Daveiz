<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    protected $fillable = [
        'tingkat',
        'jurusan',
        'nama_kelas'
    ];

    // relasi ke anggota
    public function anggota()
    {
        return $this->hasMany(Anggota::class);
    }
}
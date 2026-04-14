<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengarang extends Model
{
    protected $fillable = [
    'nama',
    'email',
    'telepon',
    'alamat'
];

    // relasi ke buku 
    public function books()
    {
        return $this->hasMany(Buku::class);
    }

}

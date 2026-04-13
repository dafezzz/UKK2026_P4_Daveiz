<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengarang extends Model
{
    protected $fillable = ['nama'];

    // relasi ke buku (nanti dipakai)
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}

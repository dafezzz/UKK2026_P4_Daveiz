<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['nama'];

   //relasi
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}

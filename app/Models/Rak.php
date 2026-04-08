<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Rak extends Model
{
    protected $table = 'raks';

    protected $fillable = [
        'kode_rak',
        'nama_rak',
        'keterangan'
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
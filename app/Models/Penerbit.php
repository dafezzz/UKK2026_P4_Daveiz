<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    protected $fillable = [
        'nama',
        'kode',
        'kota',
        'negara',
        'alamat',
        'telepon',
        'email'
    ];

    public function buku()
{
    return $this->hasMany(Buku::class);
}
}
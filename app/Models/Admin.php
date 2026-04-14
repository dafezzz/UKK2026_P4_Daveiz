<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
   protected $fillable = [
    'user_id',
    'nip',
    'no_hp',
    'alamat'
];

public function user()
{
    return $this->belongsTo(User::class);
}
}
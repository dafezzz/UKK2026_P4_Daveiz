<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ActivityLog extends Model
{
    protected $table = 'activity_logs';

    protected $fillable = [
        'user_id',
        'activity',
        'model',
        'model_id',
        'description',
        'ip_address'
    ];

    // 🔥 RELASI
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
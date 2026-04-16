<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $table = 'activity_logs';

    protected $fillable = [
        'user_id',
        'action',
        'description',
        'model',
        'model_id',
        'activity',
        'ip_address'
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];

    // 🔥 RELASI
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
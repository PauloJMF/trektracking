<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_owner_id',
        'user_id',
        'tracking_code',
        'name',
        'delivered_at',
    ];

    protected $casts = [
        'delivered_at' => 'datetime',
    ];
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $casts = [
        'profile_movie' => 'json',
        'opening_movie' => 'json',
        'ending_movie' => 'json',
        'way_to_get_info' => 'json',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class activitie extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'activity_date',
        'location',
    ];
}

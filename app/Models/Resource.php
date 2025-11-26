<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category',
        'url',
        'thumbnail',
        'is_featured'
    ];
}
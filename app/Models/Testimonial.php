<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'author_name',
        'company_name',
        'author_title',
        'quote',
        'author_image',
        'order',
        'is_active'
    ];
}
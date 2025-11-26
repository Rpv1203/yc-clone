<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $fillable = [
        'heading',
        'subheading',
        'cta_text',
        'cta_link',
        'background_image',
        'is_active'
    ];
}
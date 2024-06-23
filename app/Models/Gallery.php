<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'photo_path',
        'video_url',
        'description',
        'type',
    ];

    protected $casts = [
        'type' => 'string', // Ensure 'type' is cast to a string
    ];

    /**
     * Get the URL of the photo or video based on the type.
     *
     * @return string|null
     */
  
}

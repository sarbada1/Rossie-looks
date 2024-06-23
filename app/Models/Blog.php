<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'published_at',
        'status',
        'image_path',
    ];

    protected $dates = [
        'published_at', 
    ];


    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = strtolower($value); 
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'address', 'phone_number', 'email', 'facebook_url', 'instagram_url', 'twitter_url',  'slogan',
    ];
}

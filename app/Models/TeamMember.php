<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'bio',
        'photo_path',
    ];

    /**
     * Get the full URL of the team member's photo.
     *
     * @return string|null
     */
    public function getPhotoUrlAttribute()
    {
        if ($this->photo_path) {
            return asset($this->photo_path);
        }

        return null;
    }
}

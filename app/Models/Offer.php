<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_id', 'title', 'description', 'discount_percentage', 'start_date', 'end_date',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}

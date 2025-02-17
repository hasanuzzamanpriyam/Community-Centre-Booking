<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';

    protected $fillable = [
        'booking_date',
        'comminity_name',
        'user_id',
        'event_name',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}

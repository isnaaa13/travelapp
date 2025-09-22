<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    //
    use HasFactory;

    protected $table = 'itineraries';
    protected $primaryKey = 'itinerary_id';

    protected $fillable = ['booking_id', 'day_number', 'activity_description'];

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id', 'booking_id');
    }
}

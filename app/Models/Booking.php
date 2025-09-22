<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    use HasFactory;

    protected $table = 'bookings';
    protected $primaryKey = 'booking_id';

    protected $fillable = [
        'customer_id',
        'package_id',
        'booking_date',
        'pax',
        'start_date',
        'end_date',
        'total_price',
        'currency_id',
        'status',
    ];

    // Relasi ke Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }

    // Relasi ke Tour Package
    public function package()
    {
        return $this->belongsTo(TourPackage::class, 'package_id', 'package_id');
    }

    // Relasi ke Currency
    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_id', 'currency_id');
    }

    // Relasi ke Reviews
    public function reviews()
    {
        return $this->hasMany(Review::class, 'booking_id', 'booking_id');
    }

    // Relasi ke Itinerary
    public function itineraries()
    {
        return $this->hasMany(Itinerary::class, 'booking_id', 'booking_id');
    }

    // Relasi ke Guide Assignment
    public function guideAssignments()
    {
        return $this->hasMany(GuideAssignment::class, 'booking_id', 'booking_id');
    }
}

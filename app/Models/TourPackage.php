<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourPackage extends Model
{
    //
    use HasFactory;

    protected $table = 'tour_packages';
    protected $primaryKey = 'package_id';

    protected $fillable = [
        'destination_id',
        'title',
        'max_pax',
        'description',
        'base_price',
        'duration_days',
    ];

    // Relasi ke Destination
    public function destination()
    {
        return $this->belongsTo(Destination::class, 'destination_id', 'destination_id');
    }

    // Relasi ke Booking
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'package_id', 'package_id');
    }
}

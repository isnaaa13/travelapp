<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'customer_id';

    protected $fillable = ['name', 'email', 'phone', 'nationality'];

    // Relasi: Customer punya banyak Booking
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'customer_id', 'customer_id');
    }

    // Relasi: Customer bisa kasih banyak Review
    public function reviews()
    {
        return $this->hasMany(Review::class, 'customer_id', 'customer_id');
    }
}

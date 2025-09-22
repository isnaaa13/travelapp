<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    //
    use HasFactory;

    protected $table = 'currencies';
    protected $primaryKey = 'currency_id';

    protected $fillable = ['code', 'exchange_rate'];

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'currency_id', 'currency_id');
    }
}

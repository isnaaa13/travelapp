<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    //
    use HasFactory;

    protected $table = 'destinations';
    protected $primaryKey = 'destination_id';

    protected $fillable = ['name', 'country', 'description'];

    // Relasi: Destination punya banyak TourPackage
    public function packages()
    {
        return $this->hasMany(TourPackage::class, 'destination_id', 'destination_id');
    }
}

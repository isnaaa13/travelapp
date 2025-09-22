<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuideAssignment extends Model
{
    //
    use HasFactory;

    protected $table = 'guide_assignments';
    protected $primaryKey = 'assignment_id';

    protected $fillable = ['booking_id', 'guide_id', 'assigned_date'];

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id', 'booking_id');
    }

    public function guide()
    {
        return $this->belongsTo(Guide::class, 'guide_id', 'guide_id');
    }
}

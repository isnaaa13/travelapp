<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    //
    use HasFactory;

    protected $table = 'guides';
    protected $primaryKey = 'guide_id';

    protected $fillable = ['name', 'phone', 'language', 'rating'];

    public function assignments()
    {
        return $this->hasMany(GuideAssignment::class, 'guide_id', 'guide_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ServiceDetails;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'duration',
        'price',
        'image',
    ];

    public function detailsService()
    {
        return $this->hasOne(ServiceDetails::class);
    }

     public function Bookings()
     {
         return $this->belongsToMany(Booking::class,'services_booking');
     }
}

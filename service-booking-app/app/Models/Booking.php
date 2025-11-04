<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
       
        'date',
        'time',
        'status'
    ];

 public function service()
 {
    return $this->belongsToMany(Service::class,'services_booking');
 }
}

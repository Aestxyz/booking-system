<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'roomType',      // Jenis kamar
        'roomStatus',        // Status kamar (Available/Booked/Checked Out)
    ];

    // Relasi dengan Booking
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}

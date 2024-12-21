<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingSource extends Model
{
    use HasFactory;

     protected $fillable = [
        'sourceName',        // Nama sumber pemesanan
        'otaSourceName',     // Nama sumber OTA (optional)
    ];

    // Relasi dengan Booking
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}

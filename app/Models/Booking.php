<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',         // ID pengguna (Guest)
        'booking_source_id',       // ID sumber pemesanan
        'checkIn',        // Tanggal check-in
        'checkOut',       // Tanggal check-out
        'bookingStatus',  // Status pemesanan (Checked In/Checked Out/Cancelled)
        'totalNights',    // Jumlah malam total
        'usedNights',     // Jumlah malam yang digunakan
    ];

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(User::class, 'userID');
    }

    // Relasi dengan BookingSource
    public function bookingSource()
    {
        return $this->belongsTo(BookingSource::class, 'sourceID');
    }

    // Relasi dengan Payment
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}

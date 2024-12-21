<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',      // ID booking
        'amount',         // Jumlah pembayaran
        'paymentDate',    // Tanggal pembayaran
    ];

    // Relasi dengan Booking
    public function booking()
    {
        return $this->belongsTo(Booking::class, 'bookingID');
    }
}

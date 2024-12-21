<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('booking_source_id')->constrained('booking_sources')->onDelete('cascade');
            $table->date('checkIn');
            $table->date('checkOut');
            $table->enum('bookingStatus', ['Checked In', 'Checked Out', 'Cancelled'])->default('Checked In');
            $table->integer('totalNights');
            $table->integer('usedNights')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};

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
            $table->increments('booking_id');
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('package_id'); 
            $table->date('booking_date');
            $table->integer('pax');
            $table->date('start_date');
            $table->date('end_date');
            $table->decimal('total_price', 10, 2);
            $table->unsignedInteger('currency_id');
            $table->string('status',20);
            $table->timestamps();

            // Foreign Keys
            $table->foreign('customer_id')->references('customer_id')->on('customers')->onDelete('cascade');
            $table->foreign('package_id')->references('package_id')->on('tour_packages')->onDelete('cascade');
            $table->foreign('currency_id')->references('currency_id')->on('currencies')->onDelete('cascade');
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

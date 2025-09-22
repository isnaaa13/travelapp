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
        Schema::create('tour_packages', function (Blueprint $table) {
            $table->increments('package_id');
            $table->unsignedInteger('destination_id');
            $table->string('title',150);
            $table->integer('max_pax');
            $table->text('description');
            $table->decimal('base_price', 12, 2);
            $table->integer('duration_days');
            $table->timestamps();

            $table->foreign('destination_id')->references('destination_id')->on('destinations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_packages');
    }
};

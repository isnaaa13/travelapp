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
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();          // kode unik permission, ex: manage_destinations
            $table->string('display_name');           // nama yang terlihat di dashboard, ex: Manage Destinations
            $table->string('group')->nullable();      // kategori permission, ex: Destination, Booking, Guide
            $table->text('description')->nullable();  // deskripsi fungsi permission
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};

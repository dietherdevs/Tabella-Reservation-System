<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained(); // Links to User table
            $table->string('bundle');         // e.g., "Family Bundle"
            $table->integer('guests');        // e.g., 4
            $table->string('preference');     // Indoor/Outdoor
            $table->date('reservation_date');
            $table->string('reservation_time');
            $table->string('payment_method');
            $table->text('notes')->nullable();
            $table->timestamps(); // Created at, Updated at
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};

<?php

use App\Models\Renter;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table-> foreignIdFor(Renter::class);
            $table-> foreignIdFor(Vehicle::class);
            $table->string('pickup_location');
            $table->string('dropoff_location')->nullable();
            $table->date('pickup_date');
            $table->date('return_date');
            $table->decimal('renting_price', 9, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

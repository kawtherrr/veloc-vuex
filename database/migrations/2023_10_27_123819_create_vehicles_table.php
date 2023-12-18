<?php

use App\Models\Agency;
use App\Models\VehicleModel;
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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table-> foreignIdFor(Agency::class);
            $table-> string('vehicle_model');
            $table->string('license_plate');
            $table->integer('production_year');
            $table->string('model');
            $table->string('color');
            $table->string('number_seats');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};

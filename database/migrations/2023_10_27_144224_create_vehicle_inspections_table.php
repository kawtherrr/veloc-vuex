<?php

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
        Schema::create('vehicle_inspections', function (Blueprint $table) {
            $table->id();
            $table-> foreignIdFor(Vehicle::class);
            $table->integer('meter_reading_outgoing');
            $table->integer('meter_reading_incoming');
            $table->integer('fuel_level_outgoing');
            $table->integer('fuel_level_incoming');
            $table->date('date_outgoing');
            $table->date('date_incoming');
            $table->boolean('interior_lights_damage')->default(false);
            $table->boolean('car_mats_damage')->default(false);
            $table->boolean('exterior_lights_damage')->default(false);
            $table->boolean('exterior_headlights_damage')->default(false);
            $table->boolean('exterior_damage')->default(false);
            $table->boolean('dents_damage')->default(false);
            $table->boolean('scartch_damage')->default(false);
            $table->boolean('deflated_tyre')->default(false);
            $table->boolean('replace_tyre')->default(false);
            $table->boolean('add_ladders')->default(false);
            $table->boolean('broken_air_conditioner')->default(false);
            $table->boolean('broken_automatic_locks')->default(false);
            $table->boolean('broken_automatic_alarm')->default(false);
            $table->boolean('broken_front_window')->default(false);
            $table->boolean('broken_back_window')->default(false);
            $table->boolean('broken_passenger_window')->default(false);
            $table->boolean('broken_driver_window')->default(false);
            $table->boolean('broken_left_backseat_window')->default(false);
            $table->boolean('broken_right_backseat_window')->default(false);
            $table->boolean('tinted_windows')->default(false);
            $table->boolean('tools_box')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_inspections');
    }
};

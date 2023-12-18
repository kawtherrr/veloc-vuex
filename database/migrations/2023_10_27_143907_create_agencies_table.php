<?php

use App\Models\User;
use App\Models\Wilaya;
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
        Schema::create('agencies', function (Blueprint $table) {
            $table->id();
            $table-> foreignIdFor(User::class);
            $table->string('agency_name');
            $table->string('car_models');
            $table->string('working_days');
            $table->string('opening_hour');
            $table->string('closing_hour');
            $table->string('agency_address');
            $table->string('city');
            $table->string('wilaya');
            $table->string('phone');
            $table->string('phone_two')->nullable();
            $table->string('status')->default('under review');
            $table->string('status_warning')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agencies');
    }
};

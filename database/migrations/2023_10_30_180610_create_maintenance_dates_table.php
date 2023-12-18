<?php

use App\Models\Vehicle;
use App\Models\Maintenace;
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
        Schema::create('maintenance_dates', function (Blueprint $table) {
            $table->id();
            $table-> foreignIdFor(Vehicle::class);
            $table-> foreignIdFor(Maintenace::class);
            $table->date('maintenace_date');
            $table->string('maintenace_nature');
            $table->decimal('maintenace_price', 9, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_dates');
    }
};

<?php

use App\Models\Agency;
use App\Models\Renter;
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
        Schema::create('agency_ratings', function (Blueprint $table) {
            $table->id();
            $table-> foreignIdFor(Agency::class);
            $table-> foreignIdFor(Renter::class);
            $table->string('review')->nullable();
            $table->integer('rating')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agency_ratings');
    }
};

<?php

use App\Models\User;
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
        Schema::create('renters', function (Blueprint $table) {
            $table->id();
            $table-> foreignIdFor(User::class);
            $table->string('driver_license_number');
            $table->date('issue_date');
            $table->date('expiry_date');
            $table->date('issue_country');
            $table->string('driver_license_proof');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renters');
    }
};

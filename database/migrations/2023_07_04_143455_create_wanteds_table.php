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
        Schema::create('wanteds', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('other_names')->nullable();
            $table->string('dob')->nullable();
            $table->string('height')->nullable();
            $table->string('nationality')->nullable();
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('lanquages_spoken')->nullable();
            $table->string('hair_color')->nullable();
            $table->string('complexion_color')->nullable();
            $table->string('eye_color')->nullable();
            $table->text('other_body_descriptions')->nullable();
            $table->string('crime_committed')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wanteds');
    }
};
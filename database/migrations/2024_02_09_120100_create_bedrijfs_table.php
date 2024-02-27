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
        Schema::create('bedrijfs', function (Blueprint $table) {
            $table->id();
            $table->string('bedrijfsnaam');
            $table->unsignedBigInteger('kvk_nummer')->digits(8);
            $table->boolean('isbedrijf'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bedrijfs');
    }
};

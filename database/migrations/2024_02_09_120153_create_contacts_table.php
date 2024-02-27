<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Bedrijf;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Bedrijf::class)->constrained()->cascadeOnDelete();
            $table->string('voornaam');
            $table->string('achternaam');
            $table->string('straat');
            $table->string('huisnummer');
            $table->string('postcode');
            $table->string('plaats');
            $table->string('email');
            $table->string('telefoonnummer');
            $table->string('functie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};

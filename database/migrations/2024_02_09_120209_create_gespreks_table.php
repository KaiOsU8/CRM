<?php

use App\Models\Bedrijf;
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
        Schema::create('gespreks', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Bedrijf::class)->constrained()->cascadeOnDelete();
            $table->date('gesprekdatum');
            $table->time('gesprektijd');
            $table->string('gesprokenmet');
            $table->text('notitiegesprek');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gespreks');
    }
};

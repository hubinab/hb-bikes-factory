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
        Schema::create('bikes', function (Blueprint $table) {
            $table->id();
            $table->string('manufacturer', 30);
            $table->string('model', 15);
            $table->string('license_plate', 9);
            $table->string('color', 30);
            $table->integer('horsepower');
            $table->float('consumption')->nullable();
            $table->year('year');
            $table->foreignId('owner_id')->constrained()->cascadeOnDelete();            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bikes');
    }
};

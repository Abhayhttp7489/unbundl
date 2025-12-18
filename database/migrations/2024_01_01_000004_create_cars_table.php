<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand');
            $table->string('model');
            $table->string('type'); // Hatchback, Sedan, SUV
            $table->text('description')->nullable();
            $table->string('image');
            $table->decimal('price', 10, 2)->nullable();
            $table->string('fuel_type')->nullable(); // Petrol, Diesel, Electric, etc.
            $table->integer('seating_capacity')->nullable();
            $table->boolean('is_most_searched')->default(false);
            $table->boolean('is_latest')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};


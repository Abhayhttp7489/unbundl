<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->text('about_text')->nullable();
            $table->string('logo')->nullable();
            $table->json('quick_links')->nullable(); // [{'label': 'About Us', 'url': '/about'}, ...]
            $table->json('social_links')->nullable(); // [{'platform': 'Facebook', 'url': '...'}, ...]
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('copyright_text')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};


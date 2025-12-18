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
        Schema::table('footers', function (Blueprint $table) {
            $table->string('heading')->nullable()->after('logo');
            $table->text('subheading')->nullable()->after('heading');
            $table->json('top_info_items')->nullable()->after('subheading'); // 4 items with icon and text
            $table->json('about_links')->nullable()->after('top_info_items');
            $table->json('connect_links')->nullable()->after('about_links');
            $table->json('others_links')->nullable()->after('connect_links');
            $table->string('app_store_url')->nullable()->after('others_links');
            $table->string('google_play_url')->nullable()->after('app_store_url');
            $table->json('group_ventures')->nullable()->after('google_play_url'); // logos and names
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('footers', function (Blueprint $table) {
            $table->dropColumn([
                'heading',
                'subheading',
                'top_info_items',
                'about_links',
                'connect_links',
                'others_links',
                'app_store_url',
                'google_play_url',
                'group_ventures',
            ]);
        });
    }
};

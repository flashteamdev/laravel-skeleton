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
        Schema::create('blog_categories', function (Blueprint $blueprint): void {
            $blueprint->id();
            $blueprint->string('name');
            $blueprint->string('slug')->unique();
            $blueprint->longText('description')->nullable();
            $blueprint->boolean('is_visible')->default(false);
            $blueprint->string('seo_title', 60)->nullable();
            $blueprint->string('seo_description', 160)->nullable();
            $blueprint->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_categories');
    }
};

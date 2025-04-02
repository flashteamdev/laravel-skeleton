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
        Schema::create('blog_posts', function (Blueprint $blueprint): void {
            $blueprint->id();
            $blueprint->foreignId('blog_author_id')->nullable()->cascadeOnDelete();
            $blueprint->foreignId('blog_category_id')->nullable()->nullOnDelete();
            $blueprint->string('title');
            $blueprint->string('slug')->unique();
            $blueprint->string('content_type')->default('markdown')->comment('markdown, html');
            $blueprint->longText('content');
            $blueprint->date('published_at')->nullable();
            $blueprint->string('seo_title', 60)->nullable();
            $blueprint->string('seo_description', 160)->nullable();
            $blueprint->string('image')->nullable();
            $blueprint->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};

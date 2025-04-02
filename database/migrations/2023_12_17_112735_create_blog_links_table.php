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
        Schema::create('blog_links', function (Blueprint $blueprint): void {
            $blueprint->id();
            $blueprint->string('url');
            $blueprint->json('title');
            $blueprint->json('description');
            $blueprint->string('color');
            $blueprint->string('image')->nullable();
            $blueprint->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_links');
    }
};

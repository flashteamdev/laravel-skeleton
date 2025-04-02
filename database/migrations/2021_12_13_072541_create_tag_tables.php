<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tags', function (Blueprint $blueprint): void {
            $blueprint->id();

            $blueprint->json('name');
            $blueprint->json('slug');
            $blueprint->string('type')->nullable();
            $blueprint->integer('order_column')->nullable();

            $blueprint->timestamps();
        });

        Schema::create('taggables', function (Blueprint $blueprint): void {
            $blueprint->foreignId('tag_id')->constrained()->cascadeOnDelete();

            $blueprint->morphs('taggable');

            $blueprint->unique(['tag_id', 'taggable_id', 'taggable_type']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('taggables');
        Schema::dropIfExists('tags');
    }
};

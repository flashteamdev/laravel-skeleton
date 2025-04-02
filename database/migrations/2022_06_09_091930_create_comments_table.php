<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $blueprint): void {
            $blueprint->id();

            $blueprint->foreignIdFor(User::class)->nullable()->constrained('users')->cascadeOnDelete();
            $blueprint->morphs('commentable');
            $blueprint->text('title')->nullable();
            $blueprint->text('content')->nullable();
            $blueprint->boolean('is_visible')->default(false);

            $blueprint->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};

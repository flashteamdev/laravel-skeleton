<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $blueprint): void {
            $blueprint->id();

            $blueprint->string('group')->index();
            $blueprint->string('name');
            $blueprint->boolean('locked');
            $blueprint->json('payload');

            $blueprint->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};

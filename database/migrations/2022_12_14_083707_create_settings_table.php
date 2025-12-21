<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $blueprint): void {
            $blueprint->id();

            $blueprint->string('group');
            $blueprint->string('name');
            $blueprint->boolean('locked')->default(false);
            $blueprint->json('payload');

            $blueprint->timestamps();

            $blueprint->unique(['group', 'name']);
        });
    }
};

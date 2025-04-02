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
        Schema::create('imports', function (Blueprint $blueprint): void {
            $blueprint->id();
            $blueprint->timestamp('completed_at')->nullable();
            $blueprint->string('file_name');
            $blueprint->string('file_path');
            $blueprint->string('importer');
            $blueprint->unsignedInteger('processed_rows')->default(0);
            $blueprint->unsignedInteger('total_rows');
            $blueprint->unsignedInteger('successful_rows')->default(0);
            $blueprint->foreignId('user_id')->constrained()->cascadeOnDelete();
            $blueprint->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imports');
    }
};

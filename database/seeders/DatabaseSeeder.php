<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $adminUser = User::query()->where('email', config()->string('app.admin_email'))->first();

        if (! $adminUser) {
            User::factory()->create([
                'name' => 'Admin User',
                'email' => config()->string('app.admin_email'),
            ]);
        }
    }
}

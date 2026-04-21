<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Enterprise;
use App\Models\Worker;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
		Enterprise::factory(10)->create();
		Worker::factory(10)->create();
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User\User::factory(50)->create();
            \App\Models\Task\TaskGroup::factory(5)->create();
            \App\Models\Task\Task::factory(200)->create();
    }
}

<?php

namespace Database\Factories\Task;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'description' => fake()->text(),
            'task_group_id' => fake()->numberBetween(1, 5),
            'user_id' => fake()->numberBetween(1, 50),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
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
            "Title" => $this->faker->sentence(),
            "Description" => $this->faker->paragraph(),
            "Completed" => $this->faker->boolean(),
            "user_id" => User::factory(),
        ];
    }
}

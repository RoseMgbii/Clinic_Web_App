<?php

namespace Database\Factories;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $created_at = Carbon::parse('2023-05-10')->setTimestamp('UTC');

        return [
            'name' => fake()->name(),
            'phone_number' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'created_at' => $created_at,

        ];
    }
}

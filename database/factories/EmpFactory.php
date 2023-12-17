<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Emp>
 */
class EmpFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
                'age' => $this->faker->numberBetween(18, 65),
                'phone' => $this->faker->randomNumber(9, true), // Adjust the length as needed
                'email' => $this->faker->unique()->safeEmail,
                'file_path' => 'uploads/' . $this->faker->word . '.' . $this->faker->randomElement(['png','jpeg','jpg','gif']),
                'address' => $this->faker->address,
                'created_at' => now(),
                'updated_at' => now(),
        ];
    }
}

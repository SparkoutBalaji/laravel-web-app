<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Emp;
use Faker\Factory as Faker;

class EmpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Seed the database with fake data
        for ($i = 0; $i < 10; $i++) {
            Emp::create([
                'name' => $faker->name,
                'age' => $faker->numberBetween(18, 65),
                'phone' => $faker->randomNumber(9, true), // Adjust the length as needed
                'email' => $faker->unique()->safeEmail,
                'file_path' => 'uploads/' . $faker->word . '.' . $faker->randomElement(['png','jpeg','jpg','gif']),
                'address' => $faker->address,
                //'created_at' => now(),
                //'updated_at' => now(),
            ]);
        }
    }
}

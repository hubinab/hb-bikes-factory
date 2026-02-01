<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Owner>
 */
class OwnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // copilot ---->
        $sex = $this->faker->randomElement(['male', 'female', 'other']);

        return [
            'name' => match ($sex) {
                'male'   => $this->faker->firstNameMale . ' ' . $this->faker->lastName,
                'female' => $this->faker->firstNameFemale . ' ' . $this->faker->lastName,
                'other'  => $this->faker->name, // teljesen random
            },
            'country' => $this->faker->country,
            'sex'     => $sex,
        ];

        // <---- copilot
    }
}

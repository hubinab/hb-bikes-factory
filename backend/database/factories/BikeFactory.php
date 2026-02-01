<?php

namespace Database\Factories;

use App\Models\Owner;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bike>
 */
class BikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // copilot ---->
        return [
            'manufacturer' => $this->faker->randomElement([
                'Honda', 'Yamaha', 'Kawasaki', 'Suzuki', 'BMW', 'Ducati', 'KTM'
            ]),

            'model' => ucfirst($this->faker->word),

            'license_plate' => $this->faker->regexify('[A-Z]{2}-[A-Z]{2}-[0-9]{3}'),

            'color' => $this->faker->safeColorName(),

            'horsepower' => $this->faker->numberBetween(10, 100),

            'consumption' => $this->faker->randomFloat(2, 1, 10),

            'year' => $this->faker->year,

            'owner_id' => Owner::inRandomOrder()->first()->id,
        ];
        // <---- copilot
    }
}

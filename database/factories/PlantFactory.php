<?php

namespace Database\Factories;

use App\Models\Plant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plant>
 */
class PlantFactory extends Factory
{
    protected $model = Plant::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'species' => $this->faker->words(2, true),
            'family' => $this->faker->word(),
            'height_cm' => $this->faker->numberBetween(1, 1000),
            'average_water_needs' => $this->faker->randomFloat(2, 0.5, 20),
            'is_exotic' => $this->faker->boolean(),
            'is_perennial' => $this->faker->boolean(),
            'flowering_season' => $this->faker->randomElement(['spring', 'summer', 'autumn', 'winter']),
            'germination_date' => $this->faker->date(),
            'planted_at' => $this->faker->optional()->date(),
            'description' => $this->faker->text(),
        ];
    }
}

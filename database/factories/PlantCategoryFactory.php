<?php

namespace Database\Factories;

use App\Models\PlantCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PlantCategory>
 */
class PlantCategoryFactory extends Factory
{
    protected $model = PlantCategory::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->optional()->sentence(),
            'is_active' => $this->faker->boolean(),
            'priority' => $this->faker->optional()->numberBetween(1, 5),
            'growth_rate' => $this->faker->randomFloat(2, 0, 5),
        ];
    }
}

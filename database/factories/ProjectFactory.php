<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'category' => $this->faker->word(),
            'date' => $this->faker->date(),
            'url' => $this->faker->url(),
            'description' => $this->faker->sentence(20),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class FooFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'thud' => $this->faker->numberBetween(5, 732),
            'wombat' => $this->faker->boolean(),
            'skwal' => Post::all()->random()->id
        ];
    }
}

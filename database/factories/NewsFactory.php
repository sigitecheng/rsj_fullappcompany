<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'         => $this->faker->sentence(),
            'penjelasan'    => $this->faker->paragraph(1, 3, true),
            'kategori'      => $this->faker->unique()->sentence(),
            'penulis'       => $this->faker->email(),
        ];
    }
}

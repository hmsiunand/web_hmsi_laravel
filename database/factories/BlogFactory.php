<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(mt_rand(2,7)),
            'slug' => $this->faker->slug(),
            'ringkasan' => $this->faker->paragraph(),
            'gambar' => $this->faker->word().".png",
            // 'artikel' => $this->faker->paragraph(mt_rand(10,20))
            'artikel' => collect($this->faker->paragraphs(mt_rand(6,10)))
                            ->map(fn($p) => "<p>$p</p>")
                            ->implode('')
        ];
    }
}

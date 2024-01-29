<?php

namespace Database\Factories;

use App\Models\TravelPack;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TravelPackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = TravelPack::class;
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => Str::slug($this->faker->sentence),
            'location' => $this->faker->city,
            'about' => $this->faker->paragraph,
            'featured_event' => $this->faker->sentence,
            'language' => $this->faker->languageCode,
            'foods' => $this->faker->word,
            'departure_date' => $this->faker->date,
            'duration' => $this->faker->numberBetween(1, 30),
            'type' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 100, 1000),
        ];
    }
}

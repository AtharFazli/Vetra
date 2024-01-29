<?php

namespace Database\Factories;

use App\Models\Gallery;
use App\Models\TravelPack;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gallery>
 */
class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Gallery::class;
    public function definition(): array
    {
        return [
            'travel_pack_id' => TravelPack::factory(),
            'image' => 'gallery/'. $this->faker->image('public/gallery', 400, 300, null, false),
        ];
    }
}

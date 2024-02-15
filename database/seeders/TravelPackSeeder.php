<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\TravelPack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TravelPackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TravelPack::factory(10)->create()->each(function ($travelPack) {
            Gallery::factory(10)->create(['travel_pack_id' => $travelPack->id]);     
        });
    }
}

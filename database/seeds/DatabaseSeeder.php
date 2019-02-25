<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $this->call(PlacesTableSeeder::class);
       //$this->call(UserSeeder::class);
        $this->call(GalleryPlacesSeeder::class);
        $this->call(ActivitiesPlacesSeeder::class);
        $this->call(RecommendationsPlacesSeeder::class);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\ActivityPlaces;
class ActivitiesPlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $activities=[
            [
                'place_id'=>1,
                'description'=>"Para un público aventurero, dormir en la selva en un campamento temporal (cambuche) es una experiencia inolvidable. En hamacas con mosquitero, el turista es cobijado por los sonidos de la selva y aprende técnicas tradicionales de supervivencia. "
            ],
            [
                'place_id'=>1,
                'description'=>"El sendero Miquiando de la Fundación Maikuchiga en el Resguardo Indígena de Mocagua, es una oportunidad para aprender sobre los nueve primates que se encuentran en la zona: churucos, maiceros, frailes, aulladores, bebeleches, leoncitos, monos nocturnos, voladores y tocones"
            ],
            [
                'place_id'=>1,
                'description'=>"El sendero Miquiando de la Fundación Maikuchiga en el Resguardo Indígena de Mocagua, es una oportunidad para aprender sobre los nueve primates que se encuentran en la zona: churucos, maiceros, frailes, aulladores, bebeleches, leoncitos, monos nocturnos, voladores y tocones"
            ]
        ];
        foreach ($activities as $activity) {
            ActivityPlaces::create($activity);
        }
    }
}

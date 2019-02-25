<?php

use Illuminate\Database\Seeder;
use App\Models\RecommendationPlaces;
class RecommendationsPlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recommendations=[
            [
                'place_id'=>1,
                'description'=>"El centro de visitantes del Parque se encuentra cerrado al público y no se tiene una fecha determinada para reanudar la actividad ecoturística. Las comunidades de San Martín de Amacayacu y Mocagua, en este momento ofertan servicios ecoturísticos comunitarios y familiares a los cuales puede acceder cualquier visitante nacional o extranjero"
            ],
            [
                'place_id'=>1,
                'description'=>"Las comunidades de Mocagua y San Martín prestan servicios básicos de alojamiento en hamaca, alimentación, transporte, guianza e interpretación ambiental"
            ],
            [
                'place_id'=>1,
                'description'=>"En consideración a que las actividades ecoturísticas en el PNN Amacayacu se desarrollan en zonas de traslape con los territorios de los resguardos indígenas, tanto las autoridades indígenas como la autoridad ambiental (Parques Nacionales Naturales) son quienes ejercen el control y la regulación de estas actividades de desarrollo alternativo como el ecoturismo."
            ]
        ];
        foreach ($recommendations as $recommendation) {
            RecommendationPlaces::create($recommendation);
        }
    }
}

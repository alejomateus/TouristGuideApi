<?php

use Illuminate\Database\Seeder;
use App\Models\GalleryPlaces;
class GalleryPlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images=[
            [
                'place_id'=>1,
                'url'=>"bioparques/amacayacu/amacayacu-1.jpg"
            ],
            [
                'place_id'=>1,
                'url'=>"bioparques/amacayacu/amacayacu-2.jpg"
            ],
            [
                'place_id'=>1,
                'url'=>"bioparques/amacayacu/amacayacu-3.jpg"
            ],
            [
                'place_id'=>1,
                'url'=>"bioparques/amacayacu/amacayacu-4.jpg"
            ],
            [
                'place_id'=>1,
                'url'=>"bioparques/amacayacu/amacayacu-5.jpg"
            ],
            [
                'place_id'=>2,
                'url'=>"bioparques/caboVela/caboVela-1.jpg"
            ],
            [
                'place_id'=>2,
                'url'=>"bioparques/caboVela/caboVela-2.jpg"
            ],
            [
                'place_id'=>2,
                'url'=>"bioparques/caboVela/caboVela-3.jpg"
            ],
            [
                'place_id'=>2,
                'url'=>"bioparques/caboVela/caboVela-4.jpg"
            ],
            [
                'place_id'=>2,
                'url'=>"bioparques/caboVela/caboVela-5.jpg"
            ],
            [
                'place_id'=>3,
                'url'=>"bioparques/cahuinari/cahuinari-1.jpg"
            ],
            [
                'place_id'=>3,
                'url'=>"bioparques/cahuinari/cahuinari-2.jpg"
            ],
            [
                'place_id'=>3,
                'url'=>"bioparques/cahuinari/cahuinari-3.jpg"
            ],
            [
                'place_id'=>3,
                'url'=>"bioparques/cahuinari/cahuinari-4.jpg"
            ],
            [
                'place_id'=>3,
                'url'=>"bioparques/cahuinari/cahuinari-5.jpg"
            ],
            [
                'place_id'=>4,
                'url'=>"bioparques/chingaza/chingaza-1.jpg"
            ],
            [
                'place_id'=>4,
                'url'=>"bioparques/chingaza/chingaza-2.jpg"
            ],
            [
                'place_id'=>4,
                'url'=>"bioparques/chingaza/chingaza-3.jpg"
            ],
            [
                'place_id'=>4,
                'url'=>"bioparques/chingaza/chingaza-4.jpg"
            ],
            [
                'place_id'=>4,
                'url'=>"bioparques/chingaza/chingaza-5.jpg"
            ],
            [
                'place_id'=>5,
                'url'=>"bioparques/cocora/cocora-1.jpg"
            ],
            [
                'place_id'=>5,
                'url'=>"bioparques/cocora/cocora-2.jpg"
            ],
            [
                'place_id'=>5,
                'url'=>"bioparques/cocora/cocora-3.jpg"
            ],
            [
                'place_id'=>5,
                'url'=>"bioparques/cocora/cocora-4.jpg"
            ],
            [
                'place_id'=>5,
                'url'=>"bioparques/cocora/cocora-5.jpg"
            ],
            [
                'place_id'=>6,
                'url'=>"bioparques/cocuy/cocuy-1.jpg"
            ],
            [
                'place_id'=>6,
                'url'=>"bioparques/cocuy/cocuy-2.jpg"
            ],
            [
                'place_id'=>6,
                'url'=>"bioparques/cocuy/cocuy-3.jpg"
            ],
            [
                'place_id'=>6,
                'url'=>"bioparques/cocuy/cocuy-4.jpg"
            ],
            [
                'place_id'=>6,
                'url'=>"bioparques/cocuy/cocuy-5.jpg"
            ],
            [
                'place_id'=>7,
                'url'=>"bioparques/coralesRosario/coralesRosario-1.jpg"
            ],
            [
                'place_id'=>7,
                'url'=>"bioparques/coralesRosario/coralesRosario-2.jpg"
            ],
            [
                'place_id'=>7,
                'url'=>"bioparques/coralesRosario/coralesRosario-3.jpg"
            ],
            [
                'place_id'=>7,
                'url'=>"bioparques/coralesRosario/coralesRosario-4.jpg"
            ],
            [
                'place_id'=>7,
                'url'=>"bioparques/coralesRosario/coralesRosario-5.jpg"
            ],
            [
                'place_id'=>8,
                'url'=>"bioparques/corota/corota-1.jpg"
            ]
            ,
            [
                'place_id'=>8,
                'url'=>"bioparques/corota/corota-2.jpg"
            ]
            ,
            [
                'place_id'=>8,
                'url'=>"bioparques/corota/corota-3.jpg"
            ]
            ,
            [
                'place_id'=>8,
                'url'=>"bioparques/corota/corota-4.jpg"
            ]
            ,
            [
                'place_id'=>8,
                'url'=>"bioparques/corota/corota-5.jpg"
            ],
            [
                'place_id'=>9,
                'url'=>"bioparques/farallones/farallones-1.jpg"
            ]
            ,
            [
                'place_id'=>9,
                'url'=>"bioparques/farallones/farallones-2.jpg"
            ]
            ,
            [
                'place_id'=>9,
                'url'=>"bioparques/farallones/farallones-3.jpg"
            ]
            ,
            [
                'place_id'=>9,
                'url'=>"bioparques/farallones/farallones-4.jpg"
            ]
            ,
            [
                'place_id'=>9,
                'url'=>"bioparques/farallones/farallones-5.jpg"
            ],
            [
                'place_id'=>10,
                'url'=>"bioparques/galeras/galeras-1.jpg"
            ]
            ,
            [
                'place_id'=>10,
                'url'=>"bioparques/galeras/galeras-2.jpg"
            ]
            ,
            [
                'place_id'=>10,
                'url'=>"bioparques/galeras/galeras-3.jpg"
            ]
            ,
            [
                'place_id'=>10,
                'url'=>"bioparques/galeras/galeras-4.jpg"
            ]
            ,
            [
                'place_id'=>10,
                'url'=>"bioparques/galeras/galeras-5.jpg"
            ],
            [
                'place_id'=>11,
                'url'=>"bioparques/iguaque/iguaque-1.jpg"
            ]
            ,
            [
                'place_id'=>11,
                'url'=>"bioparques/iguaque/iguaque-2.jpg"
            ]
            ,
            [
                'place_id'=>11,
                'url'=>"bioparques/iguaque/iguaque-3.jpg"
            ]
            ,
            [
                'place_id'=>11,
                'url'=>"bioparques/iguaque/iguaque-4.jpg"
            ]
            ,
            [
                'place_id'=>11,
                'url'=>"bioparques/iguaque/iguaque-5.jpg"
            ],
            [
                'place_id'=>12,
                'url'=>"bioparques/losNevados/losNevados-1.jpg"
            ]
            ,
            [
                'place_id'=>12,
                'url'=>"bioparques/losNevados/losNevados-2.jpg"
            ]
            ,
            [
                'place_id'=>12,
                'url'=>"bioparques/losNevados/losNevados-3.jpg"
            ]
            ,
            [
                'place_id'=>12,
                'url'=>"bioparques/losNevados/losNevados-4.jpg"
            ]
            ,
            [
                'place_id'=>12,
                'url'=>"bioparques/losNevados/losNevados-5.jpg"
            ],
            [
                'place_id'=>13,
                'url'=>"bioparques/malpelo/malpelo-1.jpg"
            ]
            ,
            [
                'place_id'=>13,
                'url'=>"bioparques/malpelo/malpelo-2.jpg"
            ]
            ,
            [
                'place_id'=>13,
                'url'=>"bioparques/malpelo/malpelo-3.jpg"
            ]
            ,
            [
                'place_id'=>13,
                'url'=>"bioparques/malpelo/malpelo-4.jpg"
            ]
            ,
            [
                'place_id'=>13,
                'url'=>"bioparques/malpelo/malpelo-5.jpg"
            ],
            [
                'place_id'=>14,
                'url'=>"bioparques/mcbean/mcbean-1.jpg"
            ]
            ,
            [
                'place_id'=>14,
                'url'=>"bioparques/mcbean/mcbean-2.jpg"
            ]
            ,
            [
                'place_id'=>14,
                'url'=>"bioparques/mcbean/mcbean-3.jpg"
            ]
            ,
            [
                'place_id'=>14,
                'url'=>"bioparques/mcbean/mcbean-4.jpg"
            ]
            ,
            [
                'place_id'=>14,
                'url'=>"bioparques/mcbean/mcbean-5.jpg"
            ],
            [
                'place_id'=>15,
                'url'=>"bioparques/santurban/santurban-1.jpg"
            ]
            ,
            [
                'place_id'=>15,
                'url'=>"bioparques/santurban/santurban-2.jpg"
            ]
            ,
            [
                'place_id'=>15,
                'url'=>"bioparques/santurban/santurban-3.jpg"
            ]
            ,
            [
                'place_id'=>15,
                'url'=>"bioparques/santurban/santurban-4.jpg"
            ]
            ,
            [
                'place_id'=>15,
                'url'=>"bioparques/santurban/santurban-5.jpg"
            ],
            [
                'place_id'=>16,
                'url'=>"bioparques/sierraMacarena/sierraMacarena-1.jpg"
            ]
            ,
            [
                'place_id'=>16,
                'url'=>"bioparques/sierraMacarena/sierraMacarena-2.jpg"
            ]
            ,
            [
                'place_id'=>16,
                'url'=>"bioparques/sierraMacarena/sierraMacarena-3.jpg"
            ]
            ,
            [
                'place_id'=>16,
                'url'=>"bioparques/sierraMacarena/sierraMacarena-4.jpg"
            ]
            ,
            [
                'place_id'=>16,
                'url'=>"bioparques/sierraMacarena/sierraMacarena-5.jpg"
            ],
            [
                'place_id'=>17,
                'url'=>"bioparques/sierraNevada/sierraNevada-1.jpg"
            ]
            ,
            [
                'place_id'=>17,
                'url'=>"bioparques/sierraNevada/sierraNevada-2.jpg"
            ]
            ,
            [
                'place_id'=>17,
                'url'=>"bioparques/sierraNevada/sierraNevada-3.jpg"
            ]
            ,
            [
                'place_id'=>17,
                'url'=>"bioparques/sierraNevada/sierraNevada-4.jpg"
            ]
            ,
            [
                'place_id'=>17,
                'url'=>"bioparques/sierraNevada/sierraNevada-5.jpg"
            ],
            [
                'place_id'=>18,
                'url'=>"bioparques/tayrona/tayrona-1.jpg"
            ]
            ,
            [
                'place_id'=>18,
                'url'=>"bioparques/tayrona/tayrona-2.jpg"
            ]
            ,
            [
                'place_id'=>18,
                'url'=>"bioparques/tayrona/tayrona-3.jpg"
            ]
            ,
            [
                'place_id'=>18,
                'url'=>"bioparques/tayrona/tayrona-4.jpg"
            ]
            ,
            [
                'place_id'=>18,
                'url'=>"bioparques/tayrona/tayrona-5.jpg"
            ],
            [
                'place_id'=>19,
                'url'=>"bioparques/tuparro/tuparro-1.jpg"
            ]
            ,
            [
                'place_id'=>19,
                'url'=>"bioparques/tuparro/tuparro-2.jpg"
            ]
            ,
            [
                'place_id'=>19,
                'url'=>"bioparques/tuparro/tuparro-3.jpg"
            ]
            ,
            [
                'place_id'=>19,
                'url'=>"bioparques/tuparro/tuparro-4.jpg"
            ]
            ,
            [
                'place_id'=>19,
                'url'=>"bioparques/tuparro/tuparro-5.jpg"
            ],
            [
                'place_id'=>20,
                'url'=>"bioparques/utria/utria-1.jpg"
            ]
            ,
            [
                'place_id'=>20,
                'url'=>"bioparques/utria/utria-2.jpg"
            ]
            ,
            [
                'place_id'=>20,
                'url'=>"bioparques/utria/utria-3.jpg"
            ]
            ,
            [
                'place_id'=>20,
                'url'=>"bioparques/utria/utria-4.jpg"
            ]
            ,
            [
                'place_id'=>20,
                'url'=>"bioparques/utria/utria-5.jpg"
            ],
            [
                'place_id'=>21,
                'url'=>"zoologicos/zoo-amazonia/zoo-amazonia-1.jpg"
            ]
            ,
            [
                'place_id'=>21,
                'url'=>"zoologicos/zoo-amazonia/zoo-amazonia-2.jpg"
            ]
            ,
            [
                'place_id'=>21,
                'url'=>"zoologicos/zoo-amazonia/zoo-amazonia-3.jpg"
            ]
            ,
            [
                'place_id'=>21,
                'url'=>"zoologicos/zoo-amazonia/zoo-amazonia-4.jpg"
            ]
            ,
            [
                'place_id'=>21,
                'url'=>"zoologicos/zoo-amazonia/zoo-amazonia-5.jpg"
            ],
            [
                'place_id'=>22,
                'url'=>"zoologicos/zoo-barranquilla/zoo-barranquilla-1.jpg"
            ]
            ,
            [
                'place_id'=>22,
                'url'=>"zoologicos/zoo-barranquilla/zoo-barranquilla-2.jpg"
            ]
            ,
            [
                'place_id'=>22,
                'url'=>"zoologicos/zoo-barranquilla/zoo-barranquilla-3.jpg"
            ]
            ,
            [
                'place_id'=>22,
                'url'=>"zoologicos/zoo-barranquilla/zoo-barranquilla-4.jpg"
            ]
            ,
            [
                'place_id'=>22,
                'url'=>"zoologicos/zoo-barranquilla/zoo-barranquilla-5.jpg"
            ],
            [
                'place_id'=>23,
                'url'=>"zoologicos/zoo-cafammelgar/zoo-cafammelgar-1.jpg"
            ]
            ,
            [
                'place_id'=>23,
                'url'=>"zoologicos/zoo-cafammelgar/zoo-cafammelgar-2.jpg"
            ]
            ,
            [
                'place_id'=>23,
                'url'=>"zoologicos/zoo-cafammelgar/zoo-cafammelgar-3.jpg"
            ]
            ,
            [
                'place_id'=>23,
                'url'=>"zoologicos/zoo-cafammelgar/zoo-cafammelgar-4.jpg"
            ]
            ,
            [
                'place_id'=>23,
                'url'=>"zoologicos/zoo-cafammelgar/zoo-cafammelgar-5.jpg"
            ],
            [
                'place_id'=>24,
                'url'=>"zoologicos/zoo-cali/zoo-cali-1.jpg"
            ]
            ,
            [
                'place_id'=>24,
                'url'=>"zoologicos/zoo-cali/zoo-cali-2.jpg"
            ]
            ,
            [
                'place_id'=>24,
                'url'=>"zoologicos/zoo-cali/zoo-cali-3.jpg"
            ]
            ,
            [
                'place_id'=>24,
                'url'=>"zoologicos/zoo-cali/zoo-cali-4.jpg"
            ]
            ,
            [
                'place_id'=>24,
                'url'=>"zoologicos/zoo-cali/zoo-cali-5.jpg"
            ],
            [
                'place_id'=>25,
                'url'=>"zoologicos/zoo-guatika/zoo-guatika-1.jpg"
            ]
            ,
            [
                'place_id'=>25,
                'url'=>"zoologicos/zoo-guatika/zoo-guatika-2.jpg"
            ]
            ,
            [
                'place_id'=>25,
                'url'=>"zoologicos/zoo-guatika/zoo-guatika-3.jpg"
            ]
            ,
            [
                'place_id'=>25,
                'url'=>"zoologicos/zoo-guatika/zoo-guatika-4.jpg"
            ]
            ,
            [
                'place_id'=>25,
                'url'=>"zoologicos/zoo-guatika/zoo-guatika-5.jpg"
            ],
            [
                'place_id'=>26,
                'url'=>"zoologicos/zoo-haciendanapoles/zoo-haciendanapoles-1.jpg"
            ]
            ,
            [
                'place_id'=>26,
                'url'=>"zoologicos/zoo-haciendanapoles/zoo-haciendanapoles-2.jpg"
            ]
            ,
            [
                'place_id'=>26,
                'url'=>"zoologicos/zoo-haciendanapoles/zoo-haciendanapoles-3.jpg"
            ]
            ,
            [
                'place_id'=>26,
                'url'=>"zoologicos/zoo-haciendanapoles/zoo-haciendanapoles-4.jpg"
            ]
            ,
            [
                'place_id'=>26,
                'url'=>"zoologicos/zoo-haciendanapoles/zoo-haciendanapoles-5.jpg"
            ],
            [
                'place_id'=>27,
                'url'=>"zoologicos/zoo-jaimeduque/zoo-jaimeduque-1.jpg"
            ]
            ,
            [
                'place_id'=>27,
                'url'=>"zoologicos/zoo-jaimeduque/zoo-jaimeduque-2.jpg"
            ]
            ,
            [
                'place_id'=>27,
                'url'=>"zoologicos/zoo-jaimeduque/zoo-jaimeduque-3.jpg"
            ]
            ,
            [
                'place_id'=>27,
                'url'=>"zoologicos/zoo-jaimeduque/zoo-jaimeduque-4.jpg"
            ]
            ,
            [
                'place_id'=>27,
                'url'=>"zoologicos/zoo-jaimeduque/zoo-jaimeduque-5.jpg"
            ],
            [
                'place_id'=>28,
                'url'=>"zoologicos/zoo-losocarros/zoo-losocarros-1.jpg"
            ]
            ,
            [
                'place_id'=>28,
                'url'=>"zoologicos/zoo-losocarros/zoo-losocarros-2.jpg"
            ]
            ,
            [
                'place_id'=>28,
                'url'=>"zoologicos/zoo-losocarros/zoo-losocarros-3.jpg"
            ]
            ,
            [
                'place_id'=>28,
                'url'=>"zoologicos/zoo-losocarros/zoo-losocarros-4.jpg"
            ]
            ,
            [
                'place_id'=>28,
                'url'=>"zoologicos/zoo-losocarros/zoo-losocarros-5.jpg"
            ],
            [
                'place_id'=>29,
                'url'=>"zoologicos/zoo-panaca/zoo-panaca-1.jpg"
            ]
            ,
            [
                'place_id'=>29,
                'url'=>"zoologicos/zoo-panaca/zoo-panaca-2.jpg"
            ]
            ,
            [
                'place_id'=>29,
                'url'=>"zoologicos/zoo-panaca/zoo-panaca-3.jpg"
            ]
            ,
            [
                'place_id'=>29,
                'url'=>"zoologicos/zoo-panaca/zoo-panaca-4.jpg"
            ]
            ,
            [
                'place_id'=>29,
                'url'=>"zoologicos/zoo-panaca/zoo-panaca-5.jpg"
            ],
            [
                'place_id'=>30,
                'url'=>"zoologicos/zoo-santacruz/zoo-santacruz-1.jpg"
            ]
            ,
            [
                'place_id'=>30,
                'url'=>"zoologicos/zoo-santacruz/zoo-santacruz-2.jpg"
            ]
            ,
            [
                'place_id'=>30,
                'url'=>"zoologicos/zoo-santacruz/zoo-santacruz-3.jpg"
            ]
            ,
            [
                'place_id'=>30,
                'url'=>"zoologicos/zoo-santacruz/zoo-santacruz-4.jpg"
            ]
            ,
            [
                'place_id'=>30,
                'url'=>"zoologicos/zoo-santacruz/zoo-santacruz-5.jpg"
            ],
            [
                'place_id'=>31,
                'url'=>"zoologicos/zoo-santafe/zoo-santafe-1.jpg"
            ]
            ,
            [
                'place_id'=>31,
                'url'=>"zoologicos/zoo-santafe/zoo-santafe-2.jpg"
            ]
            ,
            [
                'place_id'=>31,
                'url'=>"zoologicos/zoo-santafe/zoo-santafe-3.jpg"
            ]
            ,
            [
                'place_id'=>31,
                'url'=>"zoologicos/zoo-santafe/zoo-santafe-4.jpg"
            ]
            ,
            [
                'place_id'=>31,
                'url'=>"zoologicos/zoo-santafe/zoo-santafe-5.jpg"
            ],
            [
                'place_id'=>32,
                'url'=>"zoologicos/zoo-ukumari/zoo-ukumari-1.jpg"
            ]
            ,
            [
                'place_id'=>32,
                'url'=>"zoologicos/zoo-ukumari/zoo-ukumari-2.jpg"
            ]
            ,
            [
                'place_id'=>32,
                'url'=>"zoologicos/zoo-ukumari/zoo-ukumari-3.jpg"
            ]
            ,
            [
                'place_id'=>32,
                'url'=>"zoologicos/zoo-ukumari/zoo-ukumari-4.jpg"
            ]
            ,
            [
                'place_id'=>32,
                'url'=>"zoologicos/zoo-ukumari/zoo-ukumari-5.jpg"
            ],
            [
                'place_id'=>33,
                'url'=>"jardines/jb-bogota/jb-bogota-1.jpg"
            ]
            ,
            [
                'place_id'=>33,
                'url'=>"jardines/jb-bogota/jb-bogota-2.jpg"
            ]
            ,
            [
                'place_id'=>33,
                'url'=>"jardines/jb-bogota/jb-bogota-3.jpg"
            ]
            ,
            [
                'place_id'=>33,
                'url'=>"jardines/jb-bogota/jb-bogota-4.jpg"
            ]
            ,
            [
                'place_id'=>33,
                'url'=>"jardines/jb-bogota/jb-bogota-5.jpg"
            ],
            [
                'place_id'=>34,
                'url'=>"jardines/jb-caldas/jb-caldas-1.jpg"
            ]
            ,
            [
                'place_id'=>34,
                'url'=>"jardines/jb-caldas/jb-caldas-2.jpg"
            ]
            ,
            [
                'place_id'=>34,
                'url'=>"jardines/jb-caldas/jb-caldas-3.jpg"
            ]
            ,
            [
                'place_id'=>34,
                'url'=>"jardines/jb-caldas/jb-caldas-4.jpg"
            ]
            ,
            [
                'place_id'=>34,
                'url'=>"jardines/jb-caldas/jb-caldas-5.jpg"
            ],
            [
                'place_id'=>35,
                'url'=>"jardines/jb-cali/jb-cali-1.jpg"
            ]
            ,
            [
                'place_id'=>35,
                'url'=>"jardines/jb-cali/jb-cali-2.jpeg"
            ]
            ,
            [
                'place_id'=>35,
                'url'=>"jardines/jb-cali/jb-cali-3.jpg"
            ]
            ,
            [
                'place_id'=>35,
                'url'=>"jardines/jb-cali/jb-cali-4.jpg"
            ]
            ,
            [
                'place_id'=>35,
                'url'=>"jardines/jb-cali/jb-cali-5.jpg"
            ],
            [
                'place_id'=>36,
                'url'=>"jardines/jb-jerico/jb-jerico-1.jpg"
            ]
            ,
            [
                'place_id'=>36,
                'url'=>"jardines/jb-jerico/jb-jerico-2.jpg"
            ]
            ,
            [
                'place_id'=>36,
                'url'=>"jardines/jb-jerico/jb-jerico-3.jpg"
            ]
            ,
            [
                'place_id'=>36,
                'url'=>"jardines/jb-jerico/jb-jerico-4.jpg"
            ]
            ,
            [
                'place_id'=>36,
                'url'=>"jardines/jb-jerico/jb-jerico-5.jpg"
            ],
            [
                'place_id'=>37,
                'url'=>"jardines/jb-macarena/jb-macarena-1.jpg"
            ]
            ,
            [
                'place_id'=>37,
                'url'=>"jardines/jb-macarena/jb-macarena-2.jpg"
            ]
            ,
            [
                'place_id'=>37,
                'url'=>"jardines/jb-macarena/jb-macarena-3.jpg"
            ]
            ,
            [
                'place_id'=>37,
                'url'=>"jardines/jb-macarena/jb-macarena-4.jpg"
            ]
            ,
            [
                'place_id'=>37,
                'url'=>"jardines/jb-macarena/jb-macarena-5.jpg"
            ],
            [
                'place_id'=>38,
                'url'=>"jardines/jb-medellin/jb-medellin-1.jpg"
            ]
            ,
            [
                'place_id'=>38,
                'url'=>"jardines/jb-medellin/jb-medellin-2.jpg"
            ]
            ,
            [
                'place_id'=>38,
                'url'=>"jardines/jb-medellin/jb-medellin-3.jpg"
            ]
            ,
            [
                'place_id'=>38,
                'url'=>"jardines/jb-medellin/jb-medellin-4.jpg"
            ]
            ,
            [
                'place_id'=>38,
                'url'=>"jardines/jb-medellin/jb-medellin-5.jpg"
            ],
            [
                'place_id'=>39,
                'url'=>"jardines/jb-pereira/jb-pereira-1.jpg"
            ]
            ,
            [
                'place_id'=>39,
                'url'=>"jardines/jb-pereira/jb-pereira-2.jpg"
            ]
            ,
            [
                'place_id'=>39,
                'url'=>"jardines/jb-pereira/jb-pereira-3.jpg"
            ]
            ,
            [
                'place_id'=>39,
                'url'=>"jardines/jb-pereira/jb-pereira-4.jpg"
            ]
            ,
            [
                'place_id'=>39,
                'url'=>"jardines/jb-pereira/jb-pereira-5.jpg"
            ],
            [
                'place_id'=>40,
                'url'=>"jardines/jb-quindio/jb-quindio-1.jpg"
            ]
            ,
            [
                'place_id'=>40,
                'url'=>"jardines/jb-quindio/jb-quindio-2.jpg"
            ]
            ,
            [
                'place_id'=>40,
                'url'=>"jardines/jb-quindio/jb-quindio-3.jpg"
            ]
            ,
            [
                'place_id'=>40,
                'url'=>"jardines/jb-quindio/jb-quindio-4.jpg"
            ]
            ,
            [
                'place_id'=>40,
                'url'=>"jardines/jb-quindio/jb-quindio-5.jpg"
            ],
            [
                'place_id'=>41,
                'url'=>"jardines/jb-sanandres/jb-sanandres-1.jpg"
            ]
            ,
            [
                'place_id'=>41,
                'url'=>"jardines/jb-sanandres/jb-sanandres-2.jpg"
            ]
            ,
            [
                'place_id'=>41,
                'url'=>"jardines/jb-sanandres/jb-sanandres-3.jpg"
            ]
            ,
            [
                'place_id'=>41,
                'url'=>"jardines/jb-sanandres/jb-sanandres-4.jpg"
            ]
            ,
            [
                'place_id'=>41,
                'url'=>"jardines/jb-sanandres/jb-sanandres-5.jpg"
            ],
            [
                'place_id'=>42,
                'url'=>"jardines/jb-tolima/jb-tolima-1.jpg"
            ]
            ,
            [
                'place_id'=>42,
                'url'=>"jardines/jb-tolima/jb-tolima-2.jpg"
            ]
            ,
            [
                'place_id'=>42,
                'url'=>"jardines/jb-tolima/jb-tolima-3.jpg"
            ]
            ,
            [
                'place_id'=>42,
                'url'=>"jardines/jb-tolima/jb-tolima-4.jpg"
            ]
            ,
            [
                'place_id'=>42,
                'url'=>"jardines/jb-tolima/jb-tolima-5.jpg"
            ]
        ];
        foreach ($images as $image) {
            GalleryPlaces::create($image);
        }
    }
}

<?php

use App\Models\ActivityPlaces;
use Illuminate\Database\Seeder;

class ActivitiesPlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $activities = [
            [
                'place_id' => 1,
                'description' => "Para un público aventurero, dormir en la selva en un campamento temporal (cambuche) es una experiencia inolvidable. En hamacas con mosquitero, el turista es cobijado por los sonidos de la selva y aprende técnicas tradicionales de supervivencia. ",
            ],
            [
                'place_id' => 1,
                'description' => "El sendero Miquiando de la Fundación Maikuchiga en el Resguardo Indígena de Mocagua, es una oportunidad para aprender sobre los nueve primates que se encuentran en la zona: churucos, maiceros, frailes, aulladores, bebeleches, leoncitos, monos nocturnos, voladores y tocones",
            ],
            [
                'place_id' => 1,
                'description' => "El saber indígena que recoge todo unos sistemas de adaptación a la vida en la selva es enseñado a través de sus talleres de cerámica, canastos, mochilas, collares, manillas, sonajeros, pintura corporal, talla en madera, entre otros.",
            ],
            [
                'place_id' => 2,
                'description' => "Visitar el Pilón y su playa. Se trata de un cerro a la orilla del mar que ofrece una panorámica de 360 grados del mar y todo el desierto. Este lugar es sagrado para los indígenas Wayuu. Se puede subir en 15 minutos y la sensación del viento que aumenta cada vez que se está más alto ofrece una sensación de libertad indescriptible. Luego puedes bajar y darte un merecido baño en su playa cristalina.",
            ],
            [
                'place_id' => 2,
                'description' => "Llegar al Faro: Este es el plan que sí o sí debes hacer al llegar a Cabo de la Vela. No porque el faro tenga algo de especial, no, es un faro normal. Lo que hace este lugar infaltable es la posición donde se encuentra; un mirador frente al mar donde se puede apreciar uno de los atardeceres más lindos de toda Colombia. Y no solo esto, sino que este lugar que da la sensación de estar frente en el fin del mundo, el punto donde termina la tierra y comienza el vasto e infinito mar",
            ],
            [
                'place_id' => 2,
                'description' => "Ya que estas en Cabo de la Vela, deberías darte la oportunidad de conocer un poco las famosas rancherías Wayuu y su cultura, sobre todo conocer todo sobre sus mochilas que son fácilmente reconocidas alrededor del mundo.",
            ],
            [
                'place_id' => 3,
                'description' => "El Parque Nacional Natural la Paya tiene una excepcional riqueza vegetal propia de la amazonia colombiana, presente en los diferentes tipos de bosques que componen sus ecosistemas.",
            ],
            [
                'place_id' => 3,
                'description' => "En el área protegida se tiene presencia de bosques altos y bien desarrollados, así como combinaciones de bosque bajo con sotobosque denso y bosque alto con poca presencia de palmas.",
            ],
            [
                'place_id' => 3,
                'description' => "Las especies vegetales que se consideran más importantes por su grado de amenaza o vulnerabilidad, además de su importancia como oferta de madera, alimento, medicina o materia prima para artesanías usadas por los pueblos indígenas.",
            ],
            [
                'place_id' => 4,
                'description' => "Realizar la caminata por los Senderos: Sendero Lagunas de Siecha, ubicado en el Sector Siecha, ingreso por el municipio de Guasca. • Sendero Lagunas de Buitrago, ubicado en el sector Piedras Gordas. • Sendero Cuchillas de Siecha, ubicado en el sector Piedras Gordas",
            ],
            [
                'place_id' => 4,
                'description' => "La exuberante naturaleza del área protegida y su estado de conservación la convierten en un lugar apto para la realización de investigación científica",
            ],
            [
                'place_id' => 4,
                'description' => "El Parque Nacional Chingaza es un lugar perfecto para quienes se interesan por la fauna y flora, donde se pueden apreciar especies endémicas o propias de la región mencionadas en el Item Fauna y Flora.",
            ],
            [
                'place_id' => 5,
                'description' => "Realizar la caminata por el circuito corto que dura aproximadamente 40 minutos en llegar directamente al bosque de palmas.",
            ],
            [
                'place_id' => 5,
                'description' => "Tomar la ruta larga que tiene una duración de 5 horas en realizar el recorrido completo, atravesando algunas veredas y ríos permitiendo un contacto más cercano con la naturaleza. Al final, se encuentra con el bosque de palmas por la parte alta de la montaña.",
            ],
            [
                'place_id' => 5,
                'description' => "Visitar la reserva de colibries que tiene un costo de $5.000.",
            ],
            [
                'place_id' => 5,
                'description' => "Recorrer el valle a caballo pasando por ríos y disfrutando de la fauna y flora que este lugar ofrece",
            ],
            [
                'place_id' => 6,
                'description' => "Existen zonas naturales donde es posible acampar, pero se requiere el equipo necesario, teniendo en cuenta las condiciones climáticas extremas.",
            ],
            [
                'place_id' => 6,
                'description' => "La zona occidental del parque es más seca debido a las corrientes cálidas venidas del cañón del río Chicamocha. Sus habitantes representan la cultura campesina alto – andina. La mayor parte de sus tierras son altas, superiores a los 3000 metros.",
            ],
            [
                'place_id' => 6,
                'description' => "A los páramos y nevados del parque se puede entrar desde Güicán por el Ritacuba y desde Cocuy por Lagunillas. Las vías no tienen pavimento por lo que se sugiere utilizar un vehículo apropiado.",
            ],
            [
                'place_id' => 7,
                'description' => "La exuberante naturaleza del área protegida y su estado de conservación la convierten en un lugar apto para la realización de investigación científica",
            ],
            [
                'place_id' => 7,
                'description' => "Además, como en todos los parques abiertos al ecoturismo, aquí se llevan a cabo actividades de educación ambiental por instituciones educativas o por los funcionarios que hacen una introducción a los visitantes sobre el Parque, objetivos de conservación, servicios y actividades ecoturísticas.",
            ],
            [
                'place_id' => 7,
                'description' => "Observación de aves: En el Parque se han catalogado más de 60 especies de aves, 31 de las cuales son aves marinas incluyendo cormoranes, gaviotas, fragatas y pelicanos. También existen colonias de garzas y corocoras.",
            ],
            [
                'place_id' => 7,
                'description' => "Observación de fauna y flora: s un lugar perfecto para observar fauna y flora; se han identificado 53 especies de corales constructores de arrecifes que constituyen el 83% de las barreras coralinas en el Caribe colombiano.",
            ],
            [
                'place_id' => 8,
                'description' => "Es necesario solicitar al funcionario una charla de orientación para ingresar a los dos senderos del Santuario. Sendero El Quiche (550 m, dificultad media): Atravesando la isla de norte a sur, recorre el denso bosque en medio de árboles cuyas copas forman un rompecabezas en el dosel. Sendero La Totora (200 m, dificultad baja): Permite observar un ecosistema acuático que es hábitat de aves residentes y migratorias.",
            ],
            [
                'place_id' => 8,
                'description' => "Colombia es el país que tiene mayor número de especies de aves en el mundo, por eso es un destino turístico para los observadores aficionados y profesionales. El Santuario es hábitat de especies de aves como gorriones, cucaracheros y mirlas.",
            ],
            [
                'place_id' => 8,
                'description' => "Es un lugar perfecto para observar fauna y flora. Aquí se encuentran algunas especies de murciélagos y ratones silvestres.",
            ],
            [
                'place_id' => 9,
                'description' => "Realizar el sendero Sendero Pico de Loro.",
            ],
            [
                'place_id' => 9,
                'description' => "Algunos de sus ecosistemas han sido poco estudiados como el Paramo, lugares con altos indices de diversidad y endemismos a los cuales invitamos a participar y desarrollar procesos de investigación que ayuden a carcaterizar y brindar mas conocimiento con respecto al área.",
            ],
            [
                'place_id' => 9,
                'description' => "Conocer el Sendero Peñas Blancas.",
            ],
            [
                'place_id' => 9,
                'description' => "En los Farallones es posible encontrarse con las diversas formas de vida, solo se debe ser paciente y respetuoso para toparse con especies como el Oso de anteojos, las seis especies de felinos, los diferentes grupos de primates, serpientes, anfibios y demas organismos que hacen de esta área un reservorio de la biodiversidad Colombiana.",
            ],
            [
                'place_id' => 10,
                'description' => "Observación de Fauna y Flora Silvestre: Es un lugar perfecto para observar fauna y flora la rana de lluvia del Galeras y el sapito arlequin de Nariño.",
            ],
            [
                'place_id' => 10,
                'description' => "Senderismo: Sendero de Telpis: Muestra la importancia del bosque alto andino y páramo donde podrá observar fauna y flora silvestre. El principal atractivo es la excelente panorámica de las altas montañas, volcanes como Chiles, Cumbal y Cotopaxi, en la República del Ecuador, humedales y la hermosa laguna de Telpis (1,3 km, 2½ horas una sola vía, dificultad media).",
            ],
            [
                'place_id' => 10,
                'description' => "Observación de Aves: Colombia es el país que tiene mayor número de especies de aves en el mundo, por eso es un destino turístico para los observadores aficionados y profesionales. En el Santuario se reportan 13 especies de colibríes, de las cuales nueve son residentes del área, una especie es migratoria y tres son raras o accidentales.",
            ],
            [
                'place_id' => 11,
                'description' => "El altiplano cundi-boyacense debe ser entendido como una gran región donde confluyen diferentes comunidades locales determinadas por un sistema de creencias provenientes de antepasados muiscas. Para la cultura muisca, la laguna sagrada de Iguaque era la cuna de la humanidad puesto que de allí emergió Bachué, la madre de los hombres.",
            ],
            [
                'place_id' => 11,
                'description' => "Sendero Bachué a la Laguna Sagrada de Iguaque: El horario para iniciar el recorrido es de 8am – 10am en el Centro Administrativo Carrizal; se continúa por el Centro de Visitantes Furachiogua, a 700 metros más arriba. El ascenso comienza a 2.800 metros de altitud y finaliza a 3.650 m en la laguna (4,1 km, 6 – 7 horas ida y regreso, dificultad alta).",
            ],
            [
                'place_id' => 11,
                'description' => "Es un lugar perfecto para observar fauna y flora. El Santuario tiene mamíferos como tigrillo, venado de páramo, comadreja y guache; aves como la pava andina, representativa de los bosques andinos, paloma pichona, dormilón, tucan, carpintero y colibri, entre muchas otras.",
            ],
            [
                'place_id' => 12,
                'description' => "Aventura, adrenalina y pasión por los retos y la naturaleza son sinónimos de las actividades que podrá disfrutar en esta maravillosa Área Protegida de alta montaña",
            ],
            [
                'place_id' => 12,
                'description' => "Observación de vida silvestre, senderismo,  montañismo, entre otras actividades, se pueden desarrollar en los 10 senderos autorizados.",
            ],
            [
                'place_id' => 12,
                'description' => "El alojamiento en el Centro de Visitantes El Cisne (capacidad para 30 personas) actualmente se encuentra fuera de servicio por la actividad volcánica.",
            ],
            [
                'place_id' => 13,
                'description' => "El SFF Malpelo es un lugar perfecto para quienes se interesan por la fauna. El Santuario ha sido considerado un verdadero laboratorio viviente, entre las especies más destacadas están el tiburón martillo, la manta diablo, el piquero enmascarado, el lagarto, el cangrejo terrestre y el geko, entre otros.",
            ],
            [
                'place_id' => 13,
                'description' => "La actividad ecoturística por excelencia para practicar en el área protegida es el buceo avanzado, las fuertes corrientes, oleaje y profundidad demandan una alta exigencia en seguridad. Esta actividad se puede realizar en las zonas de La gringa, Escuba, los Reyes, Los gemelos, Sahara, Vagamares, El arrecife, La nevera, Monster face, El mirador, El Freezer, acuarium, Pared del Naufragio, Bajo del ancla y Bajo del Monstruo.",
            ],
            [
                'place_id' => 13,
                'description' => "El viajero Podrá practicar buceo avanzado diurno. Actualmente operan en el área cinco embarcaciones para tal fin con base de operaciones en Buenaventura, Panamá y Punta arenas. Estas empresas transportan un máximo de 20 buzos, y según el reglamento no puede permanecer más de una embarcación a la vez dentro del área.",
            ],
            [
                'place_id' => 14,
                'description' => "El sendero en Crab Cay es de tan solo 100 m de longitud, fácil para caminar y para bañarse en aguas tranquilas. El sendero de Iron Wood Hill es ideal para apreciar el paisaje de bosque seco, los manglares y la fauna terrestre con un grado de dificultad medio y 3.000m de largo.",
            ],
            [
                'place_id' => 14,
                'description' => "También puede tomar un paseo en kayak por la laguna arrecifal a Crab Cay, recorrer los bordes del manglar y entrar a Oyster Creek con una perspectiva distinta del manglar. Esta laguna también tiene una exuberante pradera de pastos marinos con pequeños parches de coral.",
            ],
            [
                'place_id' => 14,
                'description' => "Es un lugar perfecto para quienes se interesan por la fauna y flora. La fauna terrestre consiste en su mayoría de reptiles como Iguanas, penny lizard, jack lizard y el lagarto azul; y de diferentes especies de aves residentes y migratorias. La fauna marina también es muy diversa. Los sitios para esta actividad son preferencialmente Crab Cay, White Shoal, manglar de McBean y Iron Wood Hill.",
            ],
            [
                'place_id' => 15,
                'description' => "Conocer la Laguna de Cunta, perteneciente al municipio de Vetas y parte de las lagunas que son reserva del Páramo.",
            ],
            [
                'place_id' => 15,
                'description' => "Observar los frailejones, los pinos o las rocas, cada paisaje es  hermoso y especial a su manera.",
            ],
            [
                'place_id' => 15,
                'description' => "Conocer el corregimiento de Berlin",
            ],
            [
                'place_id' => 16,
                'description' => "La temporada para el desarrollo de la actividad ecoturística en el municipio de la Macarena se prolonga durante todo el año, incluso para el sector Caño Cristales",
            ],
            [
                'place_id' => 16,
                'description' => "Las personas interesadas en visitar los sitios autorizados, pueden hospedarse y alimentarse en los diferentes establecimientos con que cuenta el municipio de la Macarena.",
            ],
            [
                'place_id' => 16,
                'description' => "Los recorridos por Caño Cristales incluyen visitas a varios sectores del río donde las formaciones geológicas generan atractivos ideales para los amantes del agua.",
            ],
            [
                'place_id' => 16,
                'description' => "Lo que hace a este ecosistema único en el mundo, es que aquí se juntan las regiones andina, amazónica y de Orinoquía, dando lugar a un hábitat donde puede encontrar osos hormigueros, varios tipos de felinos (como tigres y pumas), más de 500 especies de aves y miles de insectos y reptiles",
            ],
            [
                'place_id' => 17,
                'description' => "En el Parque se desarrollan actividades de recuperación, investigación y conservación.",
            ],
            [
                'place_id' => 17,
                'description' => "La principal actividad ecoturística la constituyen las caminatas por los diversos lugares y senderos históricos y culturales.",
            ],
            [
                'place_id' => 17,
                'description' => "En San Lorenzo y Filo Cartagena hay cabañas donde se pueden alojar los visitantes. En Alto de Mira se puede pernoctar en hamacas dentro de las malocas.",
            ],
            [
                'place_id' => 17,
                'description' => "En San Lorenzo y Alto de Mira el tiempo de alojamiento dependerá de la disponibilidad de cupos. En ciudad Perdida, se puede permanecer sólo dos noches, y exclusivamente con el consentimiento del Instituto Colombiano de Antropología e Historia.",
            ],
            [
                'place_id' => 18,
                'description' => "Para llegar hasta el primer camping se puede caminar una larga distancia por la carretera, o tomar un bus por $3.000",
            ],
            [
                'place_id' => 18,
                'description' => "El camino a pie conocido como el Sendero de las 9 Piedras tiene un tiempo estimado de 20 minutos para llegar hasta el mirador.",
            ],
            [
                'place_id' => 18,
                'description' => "Siguiendo el recorrido a 20 minutos del mirador encontramos la playa conocida como La Piscinita.",
            ],
            [
                'place_id' => 18,
                'description' => "Muy cerca encontramos la playa Cañaveral donde se puede disfrutar de una gran vista, pero no se puede nadar en sus aguas.",
            ],
            [
                'place_id' => 18,
                'description' => "A poco más de 20 minutos de esta playa encontramos El Cabo de San Juan de Guía",
            ],
            [
                'place_id' => 18,
                'description' => "Muy cerca a esta playa encontramos el inicio del camino para llegar hasta el Pueblito Chairama a 200 metros sobre el nivel del mar con un tiempo estimado de 20 minutos.",
            ],
            [
                'place_id' => 18,
                'description' => "Siguiendo el recorrido encontramos la Playa Brava, Bahía Gairaca, Bahía Neguanje y muchas otras playas del parque tayrona que se pueden visitar dependiendo del tiempo disponible para recorrerlo.",
            ],
            [
                'place_id' => 19,
                'description' => "El Parque Nacional Natural el Tuparro es un lugar perfecto para quienes se interesan por la fauna y flora, en el área se han registrado 74 especies de mamíferos, entre otras: cinco especies de primates, 112 especies de aves, jaguar, puma, danta, 17 reptiles",
            ],
            [
                'place_id' => 19,
                'description' => "Senderismo: Sendero de Cucurito o Attalea (Maipures): Con una longitud de tres kilómetros, su recorrido se desarrolla por un sendero guiado sobre el afloramiento rocoso. Dificultad moderada. •Sendero anaconda, ideal para la observación de aves y señales indirectas de mamíferos del Centro Administrativo: Con una longitud de 2500 metros, su recorrido se desarrolla por un sendero guiado sobre bosque con afloramiento rocoso.",
            ],
            [
                'place_id' => 20,
                'description' => "Es un lugar perfecto para observar fauna y flora. Entre los mamíferos hay micos, cusumbo, guagua, venado, zorro y perezoso. El pacifico Colombiano es famoso por recibir cada año a los gigantes mamíferos, las ballenas jorobadas. Se observan además especies como palmas, cohíba y comino, entre otros.",
            ],
            [
                'place_id' => 20,
                'description' => "Las bellezas escénicas del PNN Utría son el lugar perfecto para esta actividad, aunque si las fotos o videos tienen fines comerciales o de publicación se debe solicitar un permiso de Parques Nacionales Naturales.",
            ],
            [
                'place_id' => 20,
                'description' => "a exuberante naturaleza del área protegida y su estado de conservación la convierten en un lugar apto para la realización de investigación científica. Además, como en todos los parques abiertos al ecoturismo, aquí se llevan a cabo actividades de educación ambiental por instituciones educativas o por los funcionarios que hacen una introducción a los visitantes sobre el Parque, objetivos de conservación, servicios y actividades ecoturísticas.",
            ],
            [
                'place_id' => 20,
                'description' => "Colombia es el país que tiene mayor número de especies de aves en el mundo, por eso es un destino turístico para los observadores aficionados y profesionales. Entre las especies que se puede observar en el PNN Utría destacan la guala cabecirroja, garza tricolor, guaco manglero, águila pescadora y patico de agua, entre otros.",
            ],
            [
                'place_id' => 21,
                'description' => "En el sendero de selva, contacto con la naturaleza en área de conservación, las caminatas pueden ir desde media hora hasta dos horas"
            ],
            [
                'place_id' => 21,
                'description' => "Con guías especializados y nativos, observa especies de aves endémicas y migratorias en la reserva natural de Mundo Amazonico"
            ],
            [
                'place_id' => 21,
                'description' => "La Red de Amigos de la Fauna Silvestre es una figura jurídica que permite a Corpoamazonia hacer una disposición final a los animales en condiciones dignas para que puedan llevar su vida con adecuada salud y nutrición"
            ],
            [
                'place_id' => 21,
                'description' => "El Acuario de Mundo Amazónico es la primera colección de peces para educación ambiental del Amazonas (Colombia), tiene más de 40 especies nativas",
            ],
            [
                'place_id' => 22,
                'description' => "Podrás encontrar más de 500 animales pertenecientes a 140 especies"
            ],
            [
                'place_id' => 22,
                'description' => "Gran parte de nuestra colección animal pertenece a la fauna colombiana."
            ],
            [
                'place_id' => 22,
                'description' => "Tendrás la oportunidad de conocer el interesante mundo de los reptiles y anfibios en el Herpetario"
            ],
            [
                'place_id' => 22,
                'description' => "Podrás interactuar con animales entrenados en sus conductas naturales en el Museo Vivo"
            ],
            [
                'place_id' => 22,
                'description' => "También puede alimentar pericos australianos y cacatúas en el Pericario."
            ],
            [
                'place_id' => 22,
                'description' => "Disponemos de recorridos guiados, y actividades de recreativas y educativas para enriquecer tu experiencia, como Descubre tu Zoo, los fines de semana.",
            ],
            [
                'place_id' => 23,
                'description' => "Disfrutar de los toboganes extremos, piscina de olas, barco pirata, fuentes mágicas, lagos y compartir tiempo con los animales del zoológico."
            ],
            [
                'place_id' => 23,
                'description' => "Te invitamos a visitar a nuestros 345 animalitos y conocer las 81 especies."
            ],
            [
                'place_id' => 23,
                'description' => "El zoológico Cafam es el único legalmente establecido del Tolima y es la única opción que tienen los animales  que incauta la Corporación Regional del Tolima (Cortolima) y la Policía Ambiental de la región."
            ],
            [
                'place_id' => 23,
                'description' => "Permite a los visitantes aprender de dos grandes objetivos: la investigación y la conservación del zoológico.",
            ],
            [
                'place_id' => 24,
                'description' => "Fiestas infantiles con diferentes escenarios para vivir una experiencia inolvidable de cumpleaños."
            ],
            [
                'place_id' => 24,
                'description' => "En las noches de los sábados de octubre se abren las puertas del bosque para encontrarse frente a frente con los mitos y leyendas de nuestro país."
            ],
            [
                'place_id' => 24,
                'description' => "El Zoológico de Cali es el perfecto escenario para que las empresas puedad hacer sus visitas en contacto con la naturaleza, viviendo una experiencia única y recibiendo mejor servicio."
            ],
            [
                'place_id' => 24,
                'description' => "En los meses de junio y julio los niños entre 4 y 10 años podrán disfrutar de las zoovacaciones, un programa lleno de aventura y mucha diversión."
            ],
            [
                'place_id' => 24,
                'description' => "El recorrido puede durar alrededor de 3 a 4 horas, aunque esto dependerá del tiempo que usted dedique a observar a cada una de las diversas especies que allí se encuentra."
            ],
            [
                'place_id' => 24,
                'description' => "La belleza del Zoológico de Cali es simplemente espectacular y una forma muy atractiva de conocer una gran cantidad de especies que sin duda nos dejaran maravillados con todo su esplendor."
            ],
            [
                'place_id' => 24,
                'description' => "Sus instalaciones, animales, tiendas de recuerdo, áreas de descanso y zona de comidas garantizan una experiencia divertida y cómoda",
            ],
            [
                'place_id' => 25,
                'description' => "Disfrute de nuestras mejores recetas en un ambiente campestre mientras aprecia la mejor vista del valle de Sugamuxi."
            ],
            [
                'place_id' => 25,
                'description' => "Encuentra actividades y atracciones como: buggies, cabalgata, guatikable, guatisky, atracciones infantiles."
            ],
            [
                'place_id' => 25,
                'description' => "Podrás ver varios animales exóticos de diferentes regiones, la mayoría han llegado a nuestras instalaciones provenientes de circos y derivados del tráfico ilegal de fauna."
            ],
            [
                'place_id' => 25,
                'description' => "Podrás ver animales silvestres, son aquellos que pertenecen a la fauna nativa colombiana, son animales que no han tenido un proceso de domesticación de generaciones por lo que no se ha afectado el carácter salvaje de la especie.[
                'place_id'=>25,
                'description'=>"
            ],
            [
                'place_id' => 25,
                'description' => "Podràs ver animales domésticos, son todos aquellos que debido a la selección genética sobre los individuos se han potenciado características de las especies que han resultado provechosas para los seres humanos.",
            ],
            [
                'place_id' => 26,
                'description' => "Este parque contiene atracciones acuáticas: acuasaurus, octopus, rio salvaje, etc."
            ],
            [
                'place_id' => 26,
                'description' => "Pasar por el santuario de fauna para observar avestruces, cebras, cervicapras, cocodrilos, etc."
            ],
            [
                'place_id' => 26,
                'description' => "Tambíen debe visitar el santuario de elefantes y de felinos."
            ],
            [
                'place_id' => 26,
                'description' => "Atracciones como aventura jurásica, kamaria, mariposario, mundo de las aves, museo africano, museo memorial.",
            ],
            [
                'place_id' => 27,
                'description' => "El Zoológico del Parque Jaime Duque con más de 400 animales de 100 especies diferentes."
            ],
            [
                'place_id' => 27,
                'description' => "Hay cantidad de felinos como leones, tigres de bengala, tigrillos, hipopótamo, jaguar mariposa, pumas, zorro gris, osos de anteojos, entre otros."
            ],
            [
                'place_id' => 27,
                'description' => "Hay un serpentario con reptiles como lobo pollero, babillas y boas."
            ],
            [
                'place_id' => 27,
                'description' => "En el parque zoológico se pueden encontrar animales domésticos como patos, flamenco del caribe, gallina de agua, guacamaya, águila gris aves y otros animales, primates y pequeños.",
            ],
            [
                'place_id' => 28,
                'description' => "Visitar animales mamíferos propios de la región orinoquía tales como ocarros, armadillos, venados, dantas, entre otros."
            ],
            [
                'place_id' => 28,
                'description' => "Este bioparque también cuenta con animales aves."
            ],
            [
                'place_id' => 28,
                'description' => "Observar animales reptiles."
            ],
            [
                'place_id' => 28,
                'description' => "Visitar animales peces"
            ],
            [
                'place_id' => 28,
                'description' => "Participar en los servicios educativos sobre la importancia de preservar y preservar los recursos naturales."
            ],
            [
                'place_id' => 28,
                'description' => "Aprovechar la invitaciòn de los eventos tales como charlas, capacitaciones, conferencias para conocer más de la fauna y flora.",
            ],
            [
                'place_id' => 29,
                'description' => "Viaja por el maravilloso mundo ganadero donde conocerás cinco tipos de ganado, desde los más antiguos domesticados por el hombre: Ovino y Caprino; hasta los más recientes: Bovino, Camélido y Bufalino."
            ],
            [
                'place_id' => 29,
                'description' => "En la Estación de Ganadería podrás conocer e interactuar con los diferentes tipos de ganado, aprender sus propósitos, y conocer razas exóticas como la Watusi"
            ],
            [
                'place_id' => 29,
                'description' => "El zoológico Cafam es el único legalmente establecido del Tolima y es la única opción que tienen los animales  que incauta la Corporación Regional del Tolima (Cortolima) y la Policía Ambiental de la región."
            ],
            [
                'place_id' => 29,
                'description' => "Alimentar los animales con tus propias manos."
            ],
            [
                'place_id' => 29,
                'description' => "Ordeñar vacas y cabras para obtener una deliciosa y espumosa leche que podrás disfrutar con un bocadillo."
            ],
            [
                'place_id' => 29,
                'description' => "Consentir los corderitos",
            ],
            [
                'place_id' => 30,
                'description' => "El zoológico pone a disposición de sus visitantes un centro de educación donde se dictan talleres para niños y jóvenes, para que puedan fortalecer y enriquecer sus conocimientos de la vida salvaje."
            ],
            [
                'place_id' => 30,
                'description' => "Taller de interpretación de danta y tigre de bengala"
            ],
            [
                'place_id' => 30,
                'description' => "Área de interpretación de La tierra"
            ],
            [
                'place_id' => 30,
                'description' => "Taller manualidad: Realización de un títere de danta"
            ],
            [
                'place_id' => 30,
                'description' => "Talleres en el orquidiario"
            ],
            [
                'place_id' => 30,
                'description' => "Podrás participar en talleres ambientales zoogranja y zoocaminata",
            ],
            [
                'place_id' => 31,
                'description' => "Participar en las actividades de vacaciones creativas para niños de 5 a 13 años."
            ],
            [
                'place_id' => 31,
                'description' => "Recorrido guiado con el acompañamiento de un interprete ambiental, para aprender y descubrir el fascinante mundo de los animales."
            ],
            [
                'place_id' => 31,
                'description' => "Talleres artísticos para niños realizando figuras de animales."
            ],
            [
                'place_id' => 31,
                'description' => "Participaciòn en juegos recreativos para niños."
            ],
            [
                'place_id' => 31,
                'description' => "Hacer uso del parqueadero para carros y motos de 6:00am a 8:00pm.",
            ],
            [
                'place_id' => 32,
                'description' => "Ofrece programas diferenciados para la realización de eventos y fiestas privadas, vacaciones recreativas, talleres educativos, visitas guiadas y safaris en la noche"
            ],
            [
                'place_id' => 32,
                'description' => "Puede identificar animales de hábitos nocturnos"
            ],
            [
                'place_id' => 32,
                'description' => "Visitar la sabana africana con animales como: avestruz, cebra, sasines, rinoceronte, leones, suricara, entre otros."
            ],
            [
                'place_id' => 32,
                'description' => "En los bosques andinos podrás encontrar loros, guacamaya, boa, monos, carriquí, cococoro y muchos animales más."
            ],
            [
                'place_id' => 32,
                'description' => "En el arca de noé encuentra los siguientes animales: búfalo, chimpancé, caiman americano, jaguar, tatabra, venado, entre otros.",
            ],
            [
                'place_id' => 33,
                'description' => "Observar la flora conservada en este lugar"
            ],
            [
                'place_id' => 33,
                'description' => "Posee un área de video foro, biblioteca y venta de publicaciones."
            ],
            [
                'place_id' => 33,
                'description' => "Además, se encuentran servicios como cafetería, vivero comercial, venta de publicaciones, talleres infantiles, asesoría técnica, expediciones ambientales, temporales de orquídeas, bromelias, bonsái, rosas, y heliconias.",
            ],
            [
                'place_id' => 34,
                'description' => "Podemos encontrar el Bosque Tropical que constituye el hábitatde muchas especies de la fauna por sus condiciones microclimáticas y de diversidad."
            ],
            [
                'place_id' => 34,
                'description' => "En el jardín de las palmas se observa un paisaje con pequeñas colinas que destacan la belleza de las palmas."
            ],
            [
                'place_id' => 34,
                'description' => "También se encuentra eñ jardín del desierto con plantas adaptadas a vivir en regiones que reciben pocas lluvias."
            ],
            [
                'place_id' => 34,
                'description' => "En las Casas de las Mariposas encontramos plantas que sirven como fuentes de alimento para las mariposas por su alto contenido de néctar y como hospedero para poner huevos o posarse.",
            ],
            [
                'place_id' => 35,
                'description' => "La naturaleza y la diversidad de Cali y la región en toda su expresión. Si quiere desconectarse un rato de la ciudad (dentro de la ciudad) es el plan perfecto."
            ],
            [
                'place_id' => 35,
                'description' => "Marcada por la salsa, Cali ofrece a sus visitantes una feria única; también visitas a museos, iglesias coloniales, al zoológico y a sitios de gran importancia para la naturaleza en los alrededores."
            ],
            [
                'place_id' => 35,
                'description' => "Los guías son muy amables, además conocen los nombres de cada árbol y planta del lugar, así como las historias alrededor de ellos. Hasta para qué sirve cada uno.",
            ],
            [
                'place_id' => 36,
                'description' => "Este espacio natural cuenta con senderos ecológicos para recorrer y apreciar la variedad de flora y vegetación de la región."
            ],
            [
                'place_id' => 36,
                'description' => "Tiene puentes de madera, lagos y kioskos para disfrutar."
            ],
            [
                'place_id' => 36,
                'description' => "Tiene un espacio de Teatro al Aire Libre para participar de las actividades culturales."
            ],
            [
                'place_id' => 36,
                'description' => "Cuenta con un espacio donde podemos encontrar bancas de jardín para descanso."
            ],
            [
                'place_id' => 36,
                'description' => "Por medio del teleférico se llegar desde el jardín botánico hasta el parque natural Las Nubes.",
            ],
            [
                'place_id' => 37,
                'description' => "Constante avistamiento de aves que le dan una experiencia única al visitante de sentirse inmerso en la naturaleza."
            ],
            [
                'place_id' => 37,
                'description' => "El parque cuenta con númerosas caminatas ecologicas que se pueden realizar a diario."
            ],
            [
                'place_id' => 37,
                'description' => "Para los turistas más perezosos se encuentra el servicio de cabalgata que disfruta una experiencia única en los llanos orientales."
            ],
            [
                'place_id' => 37,
                'description' => "Principalmente, experimentar un atardecer llanero es de las cosas más atractivas de la región.",
            ],
            [
                'place_id' => 38,
                'description' => "Podemos encontrar el Bosque Tropical que constituye el hábitatde muchas especies de la fauna por sus condiciones microclimáticas y de diversidad."
            ],
            [
                'place_id' => 38,
                'description' => "En el jardín de las palmas se observa un paisaje con pequeñas colinas que destacan la belleza de las palmas."
            ],
            [
                'place_id' => 38,
                'description' => "También se encuentra eñ jardín del desierto con plantas adaptadas a vivir en regiones que reciben pocas lluvias."
            ],
            [
                'place_id' => 38,
                'description' => "En el jardín de orquideorama esta dispuesta la exhibición de diversas colecciones vivas como orquídeas, bromelias, plantas carnivoras, helechos arboreos, entre otras especies."
            ],
            [
                'place_id' => 38,
                'description' => "En el huerto medicinal encontramos plantas a las que se le reconocen los valores curativos y plantas consideradas mágico religiosas."
            ],
            [
                'place_id' => 38,
                'description' => "En el patio de las azaleas se encuentran diferentes especies de azaleas y bifloras, siendo arbustos de la familia Ericaceae."
            ],
            [
                'place_id' => 38,
                'description' => "El jardín vertical del Teatro Suramericana corresponde a un muro vegetal de 8.52 m de altura, en el que crecen diferentes especies de orquideas, arbustos y coberturas."
            ],
            [
                'place_id' => 38,
                'description' => "En las Casas de las Mariposas encontramos plantas que sirven como fuentes de alimento para las mariposas por su alto contenido de néctar y como hospedero para poner huevos o posarse.",
            ],
            [
                'place_id' => 39,
                'description' => "Giras de interpretación ambiental y ecoturismo; Recorridos pedagógicos, Práctica de deportes de aventura (Canopy)"
            ],
            [
                'place_id' => 39,
                'description' => "Realizamos a través de nuestro Vivero Forestal, propagación, producción y comercialización de material vegetal. Además prestamos los servicios de Asistencia técnica y Consultoría en temas relacionados con Educación Ambiental, Biodiversidad, Silvicultura Urbana y Reforestación."
            ],
            [
                'place_id' => 39,
                'description' => " Vacaciones recreativas para niños y Cumpleaños de aventura."
            ],
            [
                'place_id' => 39,
                'description' => "Quienes llegan a Pereira pueden visitar el Parque Nacional Natural Los Nevados y otras reservas naturales; también, sentir la emoción que ofrecen los deportes de aventura.",
            ],
            [
                'place_id' => 40,
                'description' => "Tiene un gigantesco Mariposario reconocido en todo el país y probablemente el más increible de la nación"
            ],
            [
                'place_id' => 40,
                'description' => "Tenemos un formidable equipo de guías que no solo ha sido permanentemente capacitado sino que sus integrantes tienen como característica común que aman con pasión su trabajo y sienten que son parte esencial del bosque."
            ],
            [
                'place_id' => 40,
                'description' => "El sendero tiene una longitud cercana a los 2 kilómetros y recorre la totalidad de sitios de interés en el jardín."
            ],
            [
                'place_id' => 40,
                'description' => "Un valioso remanente de un bosque premontano, localizado precisamente donde está la sede principal de la entidad, en zona urbana de Calarcá, en la vía al Valle del Cauca. Hemos conservado y enriquecido este bosque, que tiene una diversidad florística de más 600 especies de plantas.",
            ],
            [
                'place_id' => 41,
                'description' => "Es una especie de museo vivo que representan los diferentes ecosistemas con que cuentan estas islas colombianas, como los manglares, los arrecifes marinos, los pastos y las algas que crecen alrededor de la isla."
            ],
            [
                'place_id' => 41,
                'description' => "Lo más interesante es que los sanandresanos, a través de los estudiantes de colegios, han podido comprender sus riquezas, de dónde vienen y por qué es necesario conservarlas."
            ],
            [
                'place_id' => 41,
                'description' => "En el interior de este mirador también hay murales temáticos que muestran cómo es San Andrés, su flora y su fauna, desde el fondo del mar hasta las nubes."
            ],
            [
                'place_id' => 41,
                'description' => "Cuenta con el atractivo adicional de un mirador de 12 metros de alto, con 360 grados de vista, desde donde puede apreciarse gran parte del bosque con que cuenta la isla y la margen oriental del mar Caribe.",
            ],
            [
                'place_id' => 42,
                'description' => "Asistir a celebraciones que tienen su eje en la música, visitar sitios donde se aprende sobre la biodiversidad de la región y tener la opción de tocar la nieve están en los planes al llegar a Ibagué."
            ],
            [
                'place_id' => 42,
                'description' => "Este espacio natural cuenta con senderos ecológicos para recorrer y apreciar la variedad de flora y vegetación de la región."
            ],
            [
                'place_id' => 42,
                'description' => "Tiene puentes de madera, lagos y kioskos para disfrutar."
            ],
            [
                'place_id' => 42,
                'description' => "Tiene un espacio de Teatro al Aire Libre para participar de las actividades culturales."
            ],
            [
                'place_id' => 42,
                'description' => "Cuenta con un espacio donde podemos encontrar bancas de jardín para descanso."
            ],
            [
                'place_id' => 42,
                'description' => "Por medio del teleférico se llegar desde el jardín botánico hasta el parque natural Las Nubes.",
            ],
        ];
        foreach ($activities as $activity) {
            ActivityPlaces::create($activity);
        }
    }
}

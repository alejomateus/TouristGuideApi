<?php

use Illuminate\Database\Seeder;
use App\Models\Places;
class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $places=[

            [
                'name'=>"Parque Nacional Natural Amacayacu",
                'latitude'=>-1.4429123,
                'longitude'=>-71.5723952,
                'description'=>"El Parque Nacional Natural Amacayacu (PNN Amacayacu) fue creado con el objeto de reservar áreas sobresalientes y representativas del patrimonio natural nacional, conservar bancos genéticos, investigar los valores de los recursos naturales, perpetuar muestras representativas de comunidades bióticas al igual que especies de fauna silvestre, mantener la diversidad biológica y el equilibrio ecológico mediante la conservación y protección de áreas naturales. Fue creado en 1975 y en 1987 se amplió a la extensión actual de 293.500 hectáreas (ha). Este territorio representa cerca del 40% de la superficie total del Trapecio Amazónico y presenta una forma de embudo en su sector sur. Presenta un ecosistema de selva húmeda tropical cálida y bosques inundables.",
                'route'=>"Llegando a Leticia : Desde el interior de Colombia se debe acceder a la ciudad de Leticia por vía aérea desde Bogotá; el vuelo tiene una duración de 1 hora y 45 minutos y las compañías que prestan el servicio son LAN y Avianca. También es posible acceder a Leticia por vía fluvial desde Iquitos (Perú) a 10 horas en bote rápido; o desde Manaos vía Tabatinga (Brasil) en un recorrido de 6 días en un barco de turismo que remonta el río.",
                'costs'=>"Dado que el centro de visitantes está cerrado, no se cobra valor de ingreso al Parque, sin embargo los servicios ecoturísticos actualmente se prestan en los cabildos de Mocagua y San Martín.",
                'schedule'=>"Lunes a Viernes: 7:00am – 5:30pm",
                'urlMainphoto'=>"bioparques/amacayacu/amacayacu-1.jpg",
                'type'=>"bioparque",
            ],
            [
                'name'=>"Cabo de la Vela",
                'latitude'=>12.17014483,
                'longitude'=>-72.1483756,
                'description'=>"El Cabo de la Vela, es un destino obligado en Colombia. Ubicado en el departamento de la Guajira en el extremo norte de Suramérica, es un terreno desértico lleno de paisajes increíbles y experiencias fantásticas. Llegar a Cabo de la Vela, es sumergirse la cultura Wayuu; una cultura completamente diferente, de costumbres, rituales y colores llenos de vida y magia. Pero también es sentirse un poco en el Oriente Medio debido a la presencia de la mezquita de Omar Ibn Al-Jattab que quedó como legado dela ola de inmigrantes que se asentaron en Maicao por un tiempo.",
                'route'=>"Para llegar al Cabo de la Vela se debe llegar primero a Riohacha. De ahí tomar un transporte hacia el la capital indigena de Colombia: Uribia. Cuando llegues allí, nuevamente deberás ir al lugar donde salen las camionetas 4×4 para llegar a Cabo de la Vela. Como antes, no te subas antes de negociar el precio y prepárate para pagar entre 15.000 COP y 20.000 COP.",
                'costs'=>"El Cabo de la Vela es un corregimiento indigena por lo tanto no hay costo de entrada alguno. Sin embargo, se debe contar con un presupuesto para el hospedaje, alimentación y recorrido en el área.",
                'schedule'=>"Los carros desde Uribia hacia el Cabo están hasta las 2:00 pm, todos los días. Por eso se recomienda llegar en horas de la mañana.",
                'urlMainphoto'=>"bioparques/caboVela/caboVela-1.jpg",
                'type'=>"bioparque",
            ],
            [
                'name'=>"Parque nacional natural Cahuinarí",
                'latitude'=>-1.42231,
                'longitude'=>-71.1159,
                'description'=>"La vegetación corresponde a Bosque Húmedo Tropical y no ha sido alterada en forma significativa por la acción humana. Las formaciones vegetales presentan una gran diversidad, no solamente en cuanto a la estructura del bosque y su composición florística, sino también en cuanto al comportamiento fenológico de las diferentes especies a través del año (FBPR, 1986). Esto se traduce en una oferta diversificada de alimentos, a nivel espacial y temporal, a lo cual se ajusta la fauna existente.",
                'route'=>"Está ubicado en el Departamento del Amazonas, en la parte sur del país.",
                'costs'=>"No se cobra valor de ingreso al Parque.",
                'schedule'=>"Está abierto al público todos los días.",
                'urlMainphoto'=>"bioparques/cahuinari/cahuinari-1.jpg",
                'type'=>"bioparque",
            ],
            [
                'name'=>"Parque Nacional Natural Chingaza",
                'latitude'=>4.5803502,
                'longitude'=>-73.758572,
                'description'=>"El Parque Nacional Natural Chingaza, es un tesoro natural y cultural del centro de Colombia, la magia de sus montañas guarda secretos y pensamientos heredados de  los Muiscas y los Guayupes, pueblos indígenas que resguardaban este territorio, así como de comunidades campesinas que habitaron la región hace menos de 40 años. En la actualidad es refugio de fauna y flora de los Andes que revelan al visitante el secreto de la vida.",
                'route'=>"Saliendo desde el casco urbano del municipio de la Calera se pasa por las ruinas de Cemento Samper y la vereda Buenos Aires, durante 22 kilómetros se llega al puesto de atención del Parque-Piedras Gordas y durante  28 kilómetros más se  llega al Centro Administrativo Monterredondo. El ingreso por este sector es únicamente en vehículo particular y/o contratado, no existen rutas de transporte público. Por la seguridad de los visitantes no se admiten personas caminando por fuera de los senderos ya que las distancias son de más de 10 horas caminando de sendero a sendero y no está permitido.",
                'costs'=>"Para los colombianos o residentes menores de 25 años el precio es de $15.500. Para los mayores de 25 colombianos o residentes el precio es de $18.500. Por último, los extranjeros no residentes pagan un valor de $50.000.",
                'schedule'=>"Lunes – Viernes 8:00a.m. a 12:00m y 2:00p.m.- 5:00p.m. Sábados 8:00 a.m a 12:00 m",
                'urlMainphoto'=>"bioparques/chingaza/chingaza-1.jpg",
                'type'=>"bioparque"
            ],
            [
                'name'=>"Valle de Cocora",
                'latitude'=>4.637712,
                'longitude'=>-75.4912587,
                'description'=>"El valle de Cocora, ubicado en la cordillera central corazón del eje cafetero colombiano, es uno de los sitios turisticos más importantes de nuestro país. En este lugar se pueden apreciar numerosas palmas de ceras que ofrecen paisajes verdaderemente únicos. Es uno de los destinos favoritos por los extranjeros y uno de esos destinos obligatorios que aparecen en las guías de viaje por Colombia.",
                'route'=>"Para lograr explorar este imponente valle, repleto de palmeras gigantes, es necesario llegar primero al pueblo de Salento ubicado aproximadamente a 40 minutos de Armenia. Una vez se llegue al parque principal de Salento hay varios Jeeps, también conocidos como Willys, que por tan solo $3.800 pesos hacen el recorrido a la entrada del Valle. Este recorrido dura 20 minutos y salen cuando el cupo del carro se llene. Asimismo, es posible ir en carro particular ya que hay varias opciones de parqueadero antes de iniciar la caminata.",
                'costs'=>"Visitar el Valle de Cocora es completamente gratuito. No obstante, existe una entrada a una finca privada donde se alojan la mayoria de Palmas que tiene un costo de $3.000.",
                'schedule'=>"Al ser un parque público no cuenta con horario alguno y es posible recorrerlo cualquier día del año. Sin embargo, se recomienda visitar en horas de la mañana para evitar la niebla que caracteriza a este sitio y volver antes de las 5 de la tarde que es cuando sale el último Jeep de vuelta a Salento.",
                'urlMainphoto'=>"bioparques/cocora/cocora-1.jpg",
                'type'=>"bioparque"
            ],
            [
                'name'=>"Parque Nacional Natural El Cocuy",
                'latitude'=>6.5091491,
                'longitude'=>-72.7422264,
                'description'=>"El Cocuy es una perla de la naturaleza en el centro oriente de la cordillera oriental, de 306.000 hectáreas de extensión entre los departamentos de Boyacá y Casanare. Dependiendo de la zona del parque y las condiciones particulares que presenta cada zona, se ha determinado el uso que el hombre le ha dado a los recursos. En la zona oriental del parque, de la que hacen parte las cuencas de los ríos Arauca y Casanare, se encuentran representados los ecosistemas de selva en el monte llanero, bosque andino, páramo y nevado. La no existencia de zonas de acceso por esta región ha permitido que la zona se conserve en aceptable estado de conservación pese a procesos de colonización desarrollados desde antes de la declaratoria del parque.",
                'route'=>"Desde Bogotá, se toma la carretera que pasa por Susacón, Soatá, Tipacoque, Capitanejo, el Espino y Panqueba, para llegar finalmente a él Cocuy y Güicán, después de unas 10 horas de recorrido. Desde Soatá se puede seguir la vía que pasa por Boavita, la Uvita, Guacamayas, San Mateo, Panqueba, el Cocuy y Güicán.",
                'costs'=>"Para residentes en Colombia entre 5 y 25 años el precio es de $20.000. Para personas mayores de 25 años el precio es $34.500. Por último, para extranjeros no residentes el precio es de $71.000.",
                'schedule'=>"Lunes a domingo de 07:00 a.m. a 11:45 a.m. y de 01:00 p.m. a 4:45 p.m.",
                'urlMainphoto'=>"bioparques/cocuy/cocuy-1.jpg",
                'type'=>"bioparque"
            ],
            [
                'name'=>"Parque Nacional Natural Corales del Rosario y de San Bernardo",
                'latitude'=>10.161751,
                'longitude'=>-75.6570517,
                'description'=>"El Área Protegida se encuentra ubicado en la costa Caribe de Colombia, comprende una amplia zona marina frente a las costas de los departamentos de Bolívar y Sucre, ocupando un área aproximada de 120.000 hectáreas en la jurisdicción del Distrito Turístico y Cultural (D.T. y C.) de Cartagena de Indias.  El Parque inicia a 23 Km al sur de la ciudad de Cartagena de Indias en el sector de Punta Gigante en el corregimiento de Barú. Y en la zona sur, se encuentra en el bajo Sotavento en el sector del Archipiélago de San Bernardo a 35 km al noreste de la ciudad de Santiago de Tolú.",
                'route'=>"Vía terrestre se puede acceder al balneario que lleva por nombre “Playa Blanca”, al cual se llega desde la ciudad de Cartagena de Indias, cruzando el puente “Campo Elías Terán Dix”, ubicado en inmediaciones del corregimiento de Pasacaballos, a 20 minutos del complejo de islas del Archipiélago de Nuestra Señora del Rosario.",
                'costs'=>"Para los colombianos o residentes el precio es de $11.000. Los extranjeros no residentes pagan el mismo valor.",
                'schedule'=>"Lunes – Sábado 7:00a.m. a 7:00p.m",
                'urlMainphoto'=>"bioparques/coralesRosario/coralesRosario-1.jpg",
                'type'=>"bioparque"
            ],
            [
                'name'=>"Santuario de Flora Isla de la Corota",
                'latitude'=>1.1293445,
                'longitude'=>-77.149289,
                'description'=>"El Santuario de Flora Isla de la Corota, que de lejos parece el caparazón de una gran tortuga a punto de emerger del agua, está ubicado en el norte del lago Guamués o la Laguna de la Cocha, humedal de importancia internacional declarado por la Convención Ramsar. La isla ovalada está rodeada por una franja de totora y aunque es el área protegida más pequeña del país es parte del importante y complejo sistema ambiental de la laguna de la Cocha. Además, el sitio se constituye en una fuente de energía reconocida por indígenas y médicos tradicionales del Putumayo. Así mismo, tiene una capilla que es sitio de peregrinación importante para católicos especialmente durante las Fiestas de La Virgen de Lourdes.",
                'route'=>"Vía aérea: Se puede tomar un avión hasta la ciudad de Pasto, en el departamento de Nariño, desde las principales ciudades del país. Vía terrestre: También se puede viajar en bus hasta la ciudad de Pasto. El acceso desde Pasto es por la vía al Putumayo hasta el corregimiento del Encano a 22 km, cogiendo un desvió hasta El Puerto o al Hotel Sindamanoy a orillas de la Laguna de La Cocha, para tomar una lancha hasta el Santuario; desde El Puerto la distancia es aproximadamente 1,3 km y desde el Hotel Sindamanoy 0,6 km y tarda alrededor de 10 minutos.",
                'costs'=>"Para residentes en Colombia el precio es de $5.000. Por último, para extranjeros no residentes el precio es de $10.000.",
                'schedule'=>"Lunes a Domingo 8:00 AM – 5:00 PM.",
                'urlMainphoto'=>"bioparques/corota/corota-1.jpg",
                'type'=>"bioparque"
            ],
            [
                'name'=>"Parque Nacional Natural Farallones de Cali",
                'latitude'=>3.290833,
                'longitude'=>-76.7555652,
                'description'=>"Desde Cali, en días despejados, se pueden ver los majestuosos picos azules de los Farallones de Cali, que se levantan sobre la llanura, separando las cuencas del Pacífico y del río Cauca en la imponente Cordillera Occidental. Los Farallones son las formaciones rocosas más jóvenes de la Cordillera Occidental de los Andes. Es el área protegida más grande en el Valle del Cauca donde se conservan más de 540 especies de aves y nacen más de 30 ríos que abastecen el suroccidente Colombiano. Además, es un reservorio de diversidad de especies únicas y en peligro de extinción en Colombia y en el mundo.",
                'route'=>"La zona de El Topacio, puerta de entrada al área protegida, es también muestra anticipada de la riqueza hidrográfica que encierra la región.",
                'costs'=>"Para residentes en Colombia entre 5 y 25 años el precio es de $5.000. Para personas mayores de 25 años el precio es $5.000. Por último, para extranjeros no residentes el precio es de $10.500.",
                'schedule'=>"Lunes a Domingo Salida a las 6 a 8 am retorno a punto de partida 4 pm",
                'urlMainphoto'=>"bioparques/farallones/farallones-1.jpg",
                'type'=>"bioparque"
            ],
            [
                'name'=>"Santuario de Flora y Fauna Galeras",
                'latitude'=>1.2045965,
                'longitude'=>-77.3883419,
                'description'=>"El Santuario de Flora y Fauna Galeras es un símbolo del departamento de Nariño. El volcán Galeras, su principal atractivo, es uno de los más activos del continente. Algunas de sus calderas arrojan gases casi constantemente, otras extintas, son testimonio de su gran actividad en el pasado. Parte del Santuario está ubicado en una Zona de Amenaza Volcánica Alta – ZAVA, al formar parte de un complejo volcánico. Su riqueza está reflejada en la gran variedad de especies de flora y fauna en los ecosistemas de páramo, bosque alto andino y andino del área protegida. También tiene lagunas y diferentes nacimientos de agua que abastecen los acueductos locales.",
                'route'=>"Desde Pasto, existe una vía circundante que conecta los siete municipios que tienen jurisdicción en el área protegida uniendo a Pasto con las poblaciones de Nariño, La Florida, Sandoná, Consacá y Yacuanquer.",
                'costs'=>"Para los colombianos o residentes menores de 25 años el precio es de $5000. Para los mayores de 25 colombianos o residentes el precio es de $5.000. Por último, los extranjeros no residentes pagan un valor de $10000.",
                'schedule'=>"Lunes a Domingo 8:00am – 12:00pm; 1:00pm – 5:30pm",
                'urlMainphoto'=>"bioparques/galeras/galeras-1.jpg",
                'type'=>"bioparque",
            ],
            [
                'name'=>"Santuario de Flora y Fauna Iguaque",
                'latitude'=>5.6726632,
                'longitude'=>-73.4616613,
                'description'=>"En el Santuario de Fauna y Flora Iguaque, el visitante encontrará la laguna sagrada de Iguaque que, según la mitología muisca, es la cuna de la humanidad. De allí emergió Bachué, la madre de los hombres muiscas y, por esta razón, se cree que peregrinar a esta laguna sagrada limpia el alma y purifica el espíritu. Existen en total 7 lagunas de origen glaciar en el Santuario. Con altitudes entre 2.400 y 3.800 msnm, el territorio y su área de influencia en el extremo septentrional constituye una de las áreas de mayor presencia de roble en el país. El Santuario es de importancia vital como proveedor de servicios ecosistémicos, como el abastecimiento de agua para el consumo para la población de los municipios de Villa de Leyva, Arcabuco y Chíquiza.",
                'route'=>"Existen tres rutas terrestres para llegar al Santuario: Ruta 1: Desde Tunja hasta Villa de Leyva (39 km), y desde allí al Santuario (15 km).Ruta 2: Desde Chiquinquirá hasta Villa de Leyva (38 km), y de allí al Santuario (15 km). Ruta 3: Desde Tunja hasta Arcabuco (34 km) y de allí hasta el Santuario (12 km).",
                'costs'=>"Para residentes en Colombia entre 5 y 25 años el precio es de $12.000. Para personas mayores de 25 años el precio es $18.000. Por último, para extranjeros no residentes el precio es de $51.500.",
                'schedule'=>"Lunes a Domingo 9:00 AM – 5:30 PM.",
                'urlMainphoto'=>"bioparques/iguaque/iguaque-1.jpg",
                'type'=>"bioparque"
            ],
            [
                'name'=>"Parque Nacional Natural Los Nevados",
                'latitude'=>4.7896956,
                'longitude'=>-75.3785533,
                'description'=>"El imponente Parque Nacional Natural Los Nevados se localiza en el Eje Cafetero, en el complejo volcánico norte conformado por el Nevado del Ruíz, Nevado de Santa Isabel y Nevado del Tolima, y los paramillos del Cisne, Santa Rosa y Quindío. Fue creado con el fin de contribuir con la conservación de ecosistemas importantes a nivel mundial como tres de los glaciares que quedan para el país, ecosistemas de súper-paramo y paramo, humedales alto andinos y bosques alto andinos y andinos.",
                'route'=>"Se recomienda a los visitantes informarse y prepararse bien antes de ingresar al Área Protegida por cualquier sector, contar siempre con los servicios de un guía especializado en alta montaña, mapas de la zona a recorrer y un buen equipo para alta montaña. Para acceder al Parque se pueden utilizar las siguientes rutas: Acceso por Caldas (Sector norte Brisas: desde Manizales por la vía a Bogotá, se toma el desvío a mano derecha en el parador turístico La Esperanza (kilometro 23), luego a 14km está el cruce hacia Murillo (Tolima) a mano izquierda y a la derecha la carretera destapada de ingreso al centro de inducción Brisas), Acceso por Risaralda (esde Pereira a La Florida – La Suiza – El Cedral por vía carreteable durante 26km hasta que termina la carretera y el paso de vehículos. Allí inicia el camino de herradura a la Laguna del Otún (entre 7 – 9 horas una sola vía) y luego hasta el Nevado de Santa Isabel), Acceso por el Quindío (Desde Armenia a Salento y luego al Valle del Cócora por vía carreteable durante 25km, para iniciar el ascenso a pie (9 a 10 horas) hasta el sector La Primavera y páramo de Romeral.)",
                'costs'=>"$8.500 a los nacionales menores de 25 años. $16.000 a los nacionales o residentes mayores de 25 años. Por último, extranjeros no residentes pagan $45.000.",
                'schedule'=>"Todos los días del año, ingreso de 8:00AM – 2:00PM, salida obligatoria 3:30PM.",
                'urlMainphoto'=>"bioparques/losNevados/losNevados-1.jpg",
                'type'=>"bioparque"
            ],
            [
                'name'=>"Santuario de Flora y Fauna Malpelo",
                'latitude'=>4.0020309,
                'longitude'=>-81.6076469,
                'description'=>"La isla de Malpelo está ubicada en el Océano Pacifico Oriental Tropical aproximadamente a 500 kilómetros al oeste del puerto de Buenaventura. En la división político administrativa, pertenece al municipio Buenaventura, Valle del Cauca. El Santuario de Fauna y Flora Malpelo está bajo la administración del Sistema de Parques Nacionales Naturales de Colombia desde 1995.Cuenta con sede administrativa en la ciudad de Santiago de Cali y sede operativa en el Distrito de Buenaventura.",
                'route'=>"El Santuario de Fauna Flora Malpelo se encuentra ubicado a 500 km al oeste del puerto de Buenaventura en el Pacífico colombiano. La única forma de acceder a la isla es a través de transporte marítimo con un aproximado de 36 horas de navegación en mar abierto, saliendo desde Buenaventura. En el momento tres operadores turísticos privados cuentan con el permiso de ingreso al Santuario y brindan el recorrido únicamente durante fechas estipuladas, por lo que se le sugiere al turista preparar con antelación la visita y consultar calendario de ingreso de las embarcaciones. Desde Buenaventura en barco durante 36 horas hasta el SFF Malpelo y desde puertos en Costa Rica y Panamá, hasta el SFF Malpelo.",
                'costs'=>"Para los adultos colombianos o residentes extranjeros el precio es de $18.000. Para los extranjeros visitantes el precio es de $51.000.",
                'schedule'=>"Lunes a Sábados de 8:00 am a 4:00 pm",
                'urlMainphoto'=>"bioparques/malpelo/malpelo-1.jpg",
                'type'=>"bioparque"
            ],
            [
                'name'=>"Parque Nacional Natural Old Providence McBean Lagoon",
                'latitude'=>13.3531753,
                'longitude'=>-81.3901957,
                'description'=>"El Parque Nacional Natural Old Providence McBean Lagoon es la única área protegida del Sistema de Parques Nacionales Naturales ubicada en el Caribe insular oceánico de Colombia, por lo cual, pese a su superficie relativamente pequeña, es de gran importancia además porque protege parte de la tercera barrera de coral más larga del mundo. El Parque hace parte del Área de Manejo Especial del Archipiélago de San Andrés, Providencia y Santa Catalina desde 1996, de la Reserva de la Biosfera Seaflower desde el 2000 y del Área Marina Protegida Seaflower del Archipiélago desde el 2004.",
                'route'=>"Desde San Andrés, en Katamarán (cuatro horas). A Crab Cay y la zona marina del Parque se debe acceder en embarcaciones turísticas. A la zona del manglar de McBean se puede llegar por el camino que bordea Maracaibo Hill o por el sector de Rocky Point. A Iron Wood Hill se accede por un camino en el sector de Rocky Point.",
                'costs'=>"Para residentes en Colombia entre 5 y 25 años el precio es de $5000. Para personas mayores de 25 años el precio es $10.500. Por último, para extranjeros no residentes el precio es de $17.500.",
                'schedule'=>"Lunes a Domingo 9:00 AM – 4:30 PM.",
                'urlMainphoto'=>"bioparques/mcbean/mcbean-1.jpg",
                'type'=>"bioparque"
            ],
            [
                'name'=>"Páramo de Santurbán",
                'latitude'=>7.2563884,
                'longitude'=>-72.8991763,
                'description'=>"l Páramo de Santurbán es frailejones, agua, vida silvestre, niebla, es vida. Es donde sentimos el agua en cada rama, en cada paso que damos, en el viento, en las lagunas, en las piedras, en la cima de las montañas, en cada arbusto, es un lugar mágico y ancestral. Los páramos son un ecosistema de vital importancia para el mundo y el páramo de Santurbán es uno de los más importantes de Colombia.",
                'route'=>"Desde Bucaramanga llegar al corregimiento de Berlin via a Cúcuta. Una vez se llegue al corregimiento de Berlin, voltear a la izquierda por el CAI que se encuentra sobre la carretera. Seguir en ese camino por 40 minutos en trocha abierta hasta llegar al sitio.",
                'costs'=>"Se debe pagar $3.000 para la conservación del área.",
                'schedule'=>"Abierto todos los días del año. Se recomienda llegar en horas de la mañana porque por la tarde la vista se dificulta debido a la neblina del lugar.",
                'urlMainphoto'=>"bioparques/santurban/santurban-1.jpg",
                'type'=>"bioparque"
            ],
            [
                'name'=>"Parque Nacional Natural Sierra de la Macarena",
                'latitude'=>2.96914,
                'longitude'=>-73.9027787,
                'description'=>"El PNN Sierra de La Macarena tiene sus orígenes en la reserva Biológica de La Macarena (1948), incluye el levantamiento geológico más extenso hacia el occidente del Escudo Guayanès, con una extensión promedio de 130 kilómetros de largo por 30 de ancho denominado “Sierra de La Macarena”. Sus 629.280 entre sus ecosistemas se encuentra selvas húmedas, bosques inundables, matorrales y vegetación herbácea de sábana amazónica.",
                'route'=>"Bogotá – Villavicencio - Granada donde se encuentra el centro administrativo del PNN Sierra de la Macarena , de Granada sigue al Municipio de San Juan de Arama y llegando a la “Ye” toma la desviación al municipio de Mesetas (7 km aprox) encuentra la vereda Curia y desvía por el sendero que lleva al sector Cerrillo (3 Km aprox) antigua sede administrativa, allí encuentra la recebera y el indio acostado sitios de interés ecoturístico. Ruta aérea: Bogotá – Villavicencio (30 min) Villavicencio Municipio de la Macarena (1 hora aprox) para visitar Caño Cristales.",
                'costs'=>"$18.500 a los nacionales menores de 25 años. $33.000 a los nacionales o residentes mayores de 25 años. Por último, extranjeros no residentes pagan $50.000.",
                'schedule'=>"Lunes a Viernes De 7:00 am a 5:00 pm.",
                'urlMainphoto'=>"bioparques/sierraMacarena/sierraMacarena-1.jpg",
                'type'=>"bioparque"
            ],
            [
                'name'=>"Parque Nacional Natural Sierra Nevada de Santa Marta",
                'latitude'=>10.9215459,
                'longitude'=>-73.6521827,
                'description'=>"La Sierra es la cuna de los Tayrona, una civilización indígena monumental que existió en el país. Aún viven allí descendientes de esa cultura con alrededor de 70.000 indígenas de las etnias Kogui, Arhuaco, Kankuamo y Wiwa. Es la formación montañosa litoral más elevada del mundo, con dos picos de 5.775 m de altitud; el pico Cristóbal Colón y el pico Simón Bolívar. Por su variedad de ecosistemas, pisos térmicos junto al mar, su belleza singular y su riqueza histórica y cultural constituye un paraje único para visitar y fue declarado Reserva de la Biosfera por la UNESCO en 1979.",
                'route'=>"La Estación está localizada por fuera del área protegida en el cerro del mismo nombre. Para llegar desde Santa Marta, se toma una carretera de aproximadamente 42 Km por la vía que conduce al corregimiento de Minca, a la vereda El Campano y luego a la vereda Bellavista donde se gira hacia la Estación Experimental San Lorenzo en inmediaciones del área protegida. Los primeros 25 km están pavimentados y el resto requiere de campero con doble tracción. El trayecto dura aproximadamente 3 horas desde Santa Marta hasta San Lorenzo.",
                'costs'=>"Para residentes en Colombia entre 5 y 25 años el precio es de $14.500. Para personas mayores de 25 años el precio es $17.500. Por último, para extranjeros no residentes el precio es de $50.500.",
                'schedule'=>"Lunes a domingo de 8:00 am a 5:00 pm.",
                'urlMainphoto'=>"bioparques/sierraNevada/sierraNevada-1.jpg",
                'type'=>"bioparque"
            ],
            [
                'name'=>"Parque nacional natural Tayrona",
                'latitude'=>11.2992428,
                'longitude'=>-74.1097184,
                'description'=>"El Parque Tayrona se encuentra ubicado a 34 Km de Santa Marta en el departamento del Magdalena y es uno los Parques Naturales más Importantes de Colombia. Es considerado un Santuario de la Naturaleza por lo rico en fauna y flora y hace parte de la Sierra Nevada de Santa Marta.",
                'route'=>"Para llegar al Parque natural Tayrona es posible ir en carro particular, en el caso de la ciudad Bogotá como lugar de inicio del viaje, el tiempo estimado es 14 horas con 44 minutos a una distancia de 966km aproximadamente. Otra forma de llegar sería por avión con un tiempo estimado de 1 hora con 25 minutos desde el aeropuerto internacional El Dorado hasta el aeropuerto internacional Simón Bolivar, estando en este aeropuerto de Santa Marta la distancia en carro hasta el Parque Tayrona sería de 26,5 km con un tiempo estimado de 39 minutos.",
                'costs'=>"Los precios y tarifas del 2019 depende de las temporadas altas y bajas. Las temporadas altas corresponden a las fechas: 15 junio – 15 julio, 15 diciembre – 30 enero, Semana Santa de viernes a domingo (10 días), fines de semana con puentes festivos. Las demás fechas corresponden a las temporadas bajas. Los precios de temporada alta son: Personas 5-25 años $20.000, personas colombianas 26-64 años $28.500, extranjeros $63.500, colombianos menores de 5 y mayores de 65 años discapacitados no pagan. Los precios de temporada baja: Personas 5-25 años $18.000, personas colombianas 26-64 años $24.000, extranjeros $53.500, colombianos menores de 5 y mayores de 65 años discapacitados no pagan.",
                'schedule'=>"En el parque Tayrona el horario de entrada es: 8:00 a.m. a 5:00 p.m, excepto las personas alojadas en el sector de Arrecifes que deben ingresar máximo a las 4:00 p.m. ya que deben realizar la ruta de sendero Kogui (caminata ecológica) en un tiempo promedio de 40 minutos y/o adquiriendo un servicio de traslado a caballo directamente en el parque según disponibilidad de la Cooperativa de Arrieros",
                'urlMainphoto'=>"bioparques/tayrona/tayrona-1.jpg",
                'type'=>"bioparque"
            ],
            [
                'name'=>"Parque Nacional Natural El Tuparro",
                'latitude'=>5.268743,
                'longitude'=>-68.609619,
                'description'=>"El Parque Tuparro podría describirse paisajísticamente como una extensa sabana verde surcada por grandes ríos con potentes raudales y playas doradas, pequeños caños de aguas cristalinas, bosques de galería, morichales y saladillales, además de enormes rocas cristalinas en forma de cerros redondeados. Aquí se calcula la presencia de más de 320 especies de aves, muchas de ellas acuáticas.",
                'route'=>"Desde Puerto Carreño – Cazuarito – Garcitas. (Tiempo de recorrido aproximado 8 horas) (En este punto los vehículos deben quedarse).  De allí vía fluvial al parque por el río Orinoco (tiempo de recorrido aproximado 1 hora).",
                'costs'=>"Para los colombianos o residentes menores de 25 años el precio es de $9.500. Para los mayores de 25 colombianos o residentes el precio es de $15.000. Por último, los extranjeros no residentes pagan un valor de $43.500.",
                'schedule'=>"Lunes – Viernes 8:00a.m. a 5:00p.m. Sábados 8:00 a.m a 3:00 pm",
                'urlMainphoto'=>"bioparques/tuparro/tuparro-1.jpg",
                'type'=>"bioparque"
            ],
            [
                'name'=>"Parque Nacional Natural Utría",
                'latitude'=>6.0208234,
                'longitude'=>-77.234003,
                'description'=>"Pocos lugares reúnen tanto misterio y belleza a la vez, como la Ensenada de Utría ubicada en la costa norte del Pacífico colombiano, en el departamento del Chocó. Hacia el sur, el visitante observará una serie de estribaciones montañosas cubiertas de exuberante selva tropical que cortan el mar semiocultas entre la bruma. Sus calmadas y cálidas aguas son un lugar propicio para la llegada de especies migratorias como tortugas marinas, aves y ballenas y el sitio ideal para el desove de peces como la aguja ensenadeña (Tylosurus acus pacificus). La Ensenada es un paisaje cambiante que crece y decrece según la marea, mientras que los sinuosos esteros entre el manglar alcanzan mutaciones aún más dramáticas con sus cambios; durante marea baja se mueven algunas criaturas terrestres entre las raíces de los mangles, pero cuando la marea sube, éstas se desplazan para dar lugar a la fauna subacuática que llega con el agua del mar.",
                'route'=>"Se puede llegar a Bahía Solano o Nuquí en avion desde Bogotá o Cali (con tránsito en Medellín).",
                'costs'=>"Para los adultos colombianos o residentes extranjeros el precio es de $18.000. Para los extranjeros visitantes el precio es de $51.000.",
                'schedule'=>"Lunes a Sábados de 8:00 am a 4:00 pm",
                'urlMainphoto'=>"bioparques/ultria/ultria-1.jpg",
                'type'=>"bioparque"
            ],
            [
                'name'=>"Zoológico Amazonia Park",
                'latitude'=>-4.146691,
                'longitude'=>-69.934612,
                'description'=>"El colegio INEM de la ciudad de Leticia en su departamento de ciencias naturales y educación ambiental, realizó un proyecto muy profesional con material (papel) reciclado.  Todo un zoológico amazónico construido por estudiantes de los últimos años de secundaria",
                'route'=>"Un atractivo turístico para la conservación y contemplación amazónica. kilometro 7,7 • leticia • amazonas • colombia",
                'costs'=>"Para los adultos colombianos o residentes extranjeros el precio es de $18.000. Para los extranjeros visitantes el precio es de $51.000.",
                'schedule'=>"Tarifas: Adultos $25.000, Niños $18.000",
                'urlMainphoto'=>"zoologicos/zoo-amazonia/zoo-amazonia-1.jpg",
                'type'=>"zoologico"
            ],
            [
                'name'=>"Zoológico de Barranquilla",
                'latitude'=>11.0109641,
                'longitude'=>-74.797997,
                'description'=>"Es un parque que mantiene diversas especies animales para la contemplación del público en Barranquilla, Colombia. Operado por la La Fundación Botánica y Zoológica de Barranquilla, tiene una área de 10 000 m² y unas 109 especies nativas y foráneas. Cuenta con el tigre blanco, especie en vía de extinción y presidente del zoológico elegido por los niños.",
                'route'=>"Si estás en la Terminal de Transportes, sal por la entrada principal y gira hacia la derecha, allí encontrarás un paradero de Transmetro antes de la esquina. En el Portal de Soledad aborda el bus Ruta R-1. Cuando llegues a la estación Joe Arroyo, haz trasbordo en la Ruta A8-2.",
                'costs'=>"Valor de la bolera: Adultos $16.000 Niños $16.000 (niños hasta 80 cms de estatura entran gratis) Estudiantes: $16.000. Especiales: Personas en condición de discapacidad: $12.000 Adultos Mayores: $12.000",
                'schedule'=>"Todos los días del año en jornada continua (menos 24 y 31 de diciembre, y sábado y domingo de carnaval), incluyendo domingos y festivos, de 9:00 AM a 5:00 PM.",
                'urlMainphoto'=>"zoologicos/zoo-barranquilla/zoo-barranquilla-1.jpg",
                'type'=>"zoologico"
            ],
            [
                'name'=>"Zoológico Cafam Melgar",
                'latitude'=>4.194609,
                'longitude'=>-74.629901,
                'description'=>"El Zoologico CAFAM ubicado en un complejo vacacional donde puedes interactuar con la naturaleza, aprender y divertirte; conservando los recursos naturales.",
                'route'=>"Desde Bogotá por Granada-Soacha en la dirección Cl 8 Cr 15 #12b-15, Melgar, Tolima",
                'costs'=>"TARIFA NIÑOS MENORES DE 0 a 4 AÑOS y 364 días: Únicamente pagan el seguro de pasadía ($750). TARIFA NIÑO 5 A 11 AÑOS y 364 días: Temporada baja lunes a viernes: Categoría A: $7.500; Categoría B: $8.400; Categoría C: $16.400; Particulares: $21.200. TARIFA NIÑO 5 A 11 AÑOS y 364 días: Temporada baja FDS y temporada Alta: Categoría A: $13.000; Categoría B: $14.500; Categoría C: $25.100; Particulares: $39.200. TARIFA ADULTO 12 años o más: Temporada baja lunes a viernes Categoría A: $9.350; Categoría B: $10.450; Categoría C: $20.500; Particulares: $26.550. TARIFA ADULTO 12 años o más: Temporada baja FDS y temporada Alta Categoría A: $16.250; Categoría B: $18.150; Categoría C: $31.350; Particulares: $48.950​.",
                'schedule'=>"Lunes a jueves 8:00am a 6:00pm, Viernes Sabado y Domingo abiero las 24 horas.",
                'urlMainphoto'=>"zoologicos/zoo-cafammelgar/zoo-cafammelgar-1.jpg",
                'type'=>"zoologico"
            ],
            [
                'name'=>"Zoológico de Cali",
                'latitude'=>3.448548,
                'longitude'=>-76.5591623,
                'description'=>"Es una organización ambiental que ofrece una experiencia única de contacto con la riqueza natural y cultural de Colombia, que promueve y ejecuta programas de educación, comunicación, recreación e investigación para la conservación de la biodiversidad colombiana.",
                'route'=>"Cra. 2 oeste Calle 14 – Santa Teresita. Cali – Colombia",
                'costs'=>"Tarifas: Adultos $22.000 Niños: $15.000",
                'schedule'=>"Abierto todos los días, incluyendo domingos y festivos. Horarios 9:00 am a 4:30 pm",
                'urlMainphoto'=>"zoologicos/zoo-cali/zoo-cali-1.jpg",
                'type'=>"zoologico"
            ],
            [
                'name'=> "Zoológico Guátika Tibasosa",
                'type'=> "zoologico",
                'latitude'=> 5.742243,
                'longitude'=> -73.006181,
                'description'=> "Guátika nace como el sueño de un boyacense de crear un lugar donde albergar de la mejor manera posible animales que por diversas razones ya no pueden estar en su hábitat natural, aquí se mantienen más de 500 animales diversas especies de fauna doméstica, exótica y silvestre. Crecemos y cambiamos año tras año, buscando ser el mejor zoológico de Colombia a través de hermosos espacios abiertos y naturalizados.",
                'route'=> "Estamos ubicados en el hermoso municipio de Tibasosa, en la bella Boyacá, a 3h de Bogotá y 10 min de Duitama y Sogamoso. Dirección=> Km 1, Vía las Antenas, Tibasosa, Boyacá",
                'costs'=> "Entrada general=> $25.000 con ingreso al Zoo. Brazalete plus=> $62.000 ingreso al Zoo y 4 atracciones. Brazalete platino=> $82.000 ingreso al zoo y 5 atracciones",
                'schedule'=> "Todos los días 9:00 AM a 4:00 PM.",
                'urlMainphoto'=>"zoologicos/zoo-guatika/zoo-guatika-1.jpg"
            ],
            [
                'name'=> "Zoológico Parque Tematico Hacienda Napoles",
                'type'=> "zoologico",
                'latitude'=> 5.9162989,
                'longitude'=> -74.7245129,
                'description'=> "Es un parque temático zon zoológico ubicado en la localidad colombiana de Doradal, Antioquia. Se encuentra en el valle del río Magdalena, y es reconocida como símbolo del Cartel de Medellín y, específicamente, de su propietario Pablo Escobar, uno de los fundadores de este.",
                'route'=> "Estamos ubicados en el municipio de Puerto Triunfo –Antioquia, en  Doradal kilómetro 165 de la autopista Medellín – Bogotá",
                'costs'=> "Tarifas: Salvaje $45.000, Aventura $62.000, Safari $90.000 y Safari Plus $133.500",
                'schedule'=> "Todos los días 9:00 AM a 5:00 PM.",
                'urlMainphoto'=>"zoologicos/zoo-haciendanapoles/zoo-haciendanapoles-1.jpg" 
            ],
            [
                'name'=> "Zoológico Parque Jaime Duque",
                'type'=> "zoologico",
                'latitude'=> 4.943927,
                'longitude'=> -73.958051,
                'description'=> "El Zoológico Jaime Duque nació hace 12 años y sus objetivos se han centrado en la conservación de la Fauna Colombiana, fundamentalmente mediante la investigación. Pretende crear conciencia conservacionista en los visitantes. ",
                'route'=> "Km 34 Autopista Central del Norte, Tocancipá, Cundinamarca - Colombia",
                'costs'=> "Tarifas: Brazalete General $34.000, Brazalete especial $45.000",
                'schedule'=> "Miércoles a Viernes 9:00 am - 5:00 pm Sábado, Domingo y Festivos 10:00 am - 6:00 pm",
                'urlMainphoto'=>"zoologicos/zoo-jaimeduque/zoo-jaimeduque-1.jpg"
            ],
            [
                'name'=> "Zoológico Bioparque Los Ocarros",
                'type'=> "zoologico",
                'latitude'=> 4.1850149,
                'longitude'=> -73.6090852,
                'description'=> "El cuidado de bosques, ríos, sabanas y faunas, en general de los recursos naturales no es una labor reservada a las minorías, teniendo en cuenta que la relación que pueda existir entre el hombre con el medio en que se desenvuelve debe buscar satisfacciones de las necesidades en las generaciones presentes.",
                'route'=> "km 3 Via Restrepo Villavicencio. 65, Villavicencio, Meta",
                'costs'=> "Niños de 2 a 12 años $12.000. De 12 años en adelante $15.000. Servicio (Opcional) de guía para máx. 25 personas $ 20.000",
                'schedule'=> "Lunes a Viernes 9:00am a 4:00pm. Fines de semana, días festivos y de temporada 9:00am a 4:30pm",
                'urlMainphoto'=>"zoologicos/zoo-losocarros/zoo-losocarros-1.jpg"
            ],
            [
                'name'=> "Parque Panaca",
                'type'=> "zoologico",
                'latitude'=> 4.6070814,
                'longitude'=> -75.8187622,
                'description'=> "El Parque Nacional de la Cultura Agropecuaria es un parque temático agropecuario ubicado en Quimbaya, Colombia, a unos 300 km al oeste de Bogotá, capital del país. La principal filosofía de PANACA es propiciar la interacitividad del hombre con la naturaleza y la zoología doméstica.",
                'route'=> "El Parque Panaca está ubicado en el corazón del eje cafetero de Colombia, exactamente en la vereda Kerman en el municipio de Quimbaya, departamento del Quindío, a tan sólo 40 minutos de la ciudad de Armenia y 50 minutos de Pereira.",
                'costs'=> "Tarifas: Pasaporte TERRA $35.000, Pasaporte Evento Especial $54.000, Pase Anual $165.000",
                'schedule'=> "Martes a Domingo 9:00am a 6:00pm.",
                'urlMainphoto'=>"zoologicos/zoo-panaca/zoo-panaca-1.jpg"
            ],
            [
                'name'=> "Zoológico Santacruz",
                'type'=> "zoologico",
                'latitude'=> 5,
                'longitude'=> -74.16667,
                'description'=> "Este parque natural protege la vida de 136 mamíferos, tales como jaguar, búfalo de agua, llama, puma y tigre de Bengala, 144 aves como avestruz, ganso, lechuza y halcón garrapatero, y 35 reptiles, entre los que se pueden destacar boa y tortuga Morrocoy.",
                'route'=> "Si deseas utilizar el sistema de transporte público, los buses parten de la terminal de transportes de Bogotá; en el módulo amarillo cada 15 minutos y los fines de semana cada 10 minutos. También podrás preguntar por el plan “Ecoturismo Tequendama” que presta el servicio de transporte escolar, empresarial y de turismo, pregunta por este servicio al teléfono 4 07515. Si deseas utilizar tu automóvil: Debes salir de Bogotá por la autopista sur y tomar la ruta hacia Mesitas del Colegio, durante el trayecto encontraras señalización informándote de la llegada al Zoológico",
                'costs'=> "Tarifas: Adultos $20.000 Niños $14.000. Tarifas únicas de parqueadero: Carros $5.000 Motos $3.000",
                'schedule'=> "Horarios: Todos los días de 8:00 a 17:00",
                'urlMainphoto'=>"zoologicos/zoo-santacruz/zoo-santacruz-1.jpg"
            ],
            [
                'name'=> "Zoológico Santa Fe",
                'type'=> "zoologico",
                'latitude'=> 6.223018,
                'longitude'=> -75.579925,
                'description'=> "Tiene una población de 1.300 especies procedentes del continente americano en su mayoría. El Parque posee también más de quinientos árboles y arbustos de diferentes especies.",
                'route'=> " Los usuarios pueden tomar el Tren Metropolitano, descender en la Estación Industriales y luego caminar hasta el Zoológico a través de la Avenida Guayabal en sentido norte - sur.",
                'costs'=> "Tarifas: Niños menores de 2 años entran gratis, Niños entre 2 y 12 años $8.000, Adultos $15.000",
                'schedule'=> "Todos los días 9:00 AM a 5:00 PM.",
                'urlMainphoto'=>"zoologicos/zoo-santafe/zoo-santafe-1.jpg"   
            ],
            [
                'name'=> "Zoológico Bioparque Ukumarí",
                'type'=> "zoologico",
                'latitude'=> 4.800941,
                'longitude'=> -75.794571,
                'description'=> "Visitar el zoológico del Bioparque Ukumarí de Pereira es una experiencia lúdica, educativa y recreativa, que divierte a grandes y chicos mientras recorren las instalaciones y observan 870 ejemplares de la fauna africana, asiática, americana y endémica colombiana.",
                'route'=> "El Bioparque Ukumarí está ubicado en el Km 14, margen sur, de la vía que de Pereira - Risaralda (Colombia) conduce al corregimiento de Cerritos. A la altura de la Estación Santa Bárbara, a tan sólo 8 Km del Aeropuerto Internacional Matecaña, usted encontrará debidamente señalizada la vía principal de acceso que lo llevará (en un recorrido de 1 Km) hasta el ingreso a Ukumarí y los parqueaderos del Bioparque.",
                'costs'=> "Tarifas: Pasaporte Ceiba Adultos $27.000, Pasaporte Suricato Niños $19.000",
                'schedule'=> "Todos los dìas de 9:00am a 5:00pm.",
                'urlMainphoto'=>"zoologicos/zoo-ukumari/zoo-ukumari-1.jpg" 
            ],
            [
                'name'=> "Jardín Botánico de Bogotá José Celestino Mutis",
                'type'=> "jardin",
                'latitude'=> 4.6682441,
                'longitude'=> -74.0999524,
                'description'=> "El Jardín Botánico de Bogotá lleva el nombre del astrónomo y botánico don José Celestino Mutis. Él fue el primero en consagrarse de lleno al estudio de las ciencias naturales en el territorio de la Nueva Granada. Su tarea fue el comienzo de una honda y larga tradición alrededor de la flora y la fauna de nuestro país. El sabio Mutis nació en Cádiz, España, el 6 de abril de 1732. En 1760 se trasladó a este territorio como médico del virrey Pedro Messia de la Cerda. Con el apoyo del virrey Antonio Caballero y Góngora y la aprobación de Carlos III, inició en 1783 la Real Expedición Botánica del Nuevo Reino de Granada, una de las más importantes expediciones científicas del siglo XVIII, que duró treinta y tres años, en cuya monumental labor se catalogaron 20 mil especies vegetales y 7 mil animales.",
                'route'=> "Se encuentra dentro de la capital de la república. Su dirección es Avenida Calle 63 No. 68-95 y es fácilmente accesible por las vías principales de la ciudad y por transporte público.",
                'costs'=> "Adultos: $ 3.500. Niños de 4 a 12 años: $ 1.800",
                'schedule'=> "Lunes a viernes de 8:00 a.m. a 5:00 p.m. Sábados, domingos y festivos de 9:00 a.m. a 5:00 p.m.",
                'urlMainphoto'=>"jardines/jb-bogota/jb-bogota-1.jpg"
            ],
            [
                'name'=> "Jardín Botánico de Caldas",
                'type'=> "jardin",
                'latitude'=> 5.0567609,
                'longitude'=> -75.4927316,
                'description'=> "El Jardín Botánico dependiente de la Universidad de Caldas es un jardín botánico y arboreto con varias colecciones entre las que se incluyen especies forestales nativas de la zona andina colombiana, plantas medicinales, plantas ornamentales, plantas de cultivos para cosechas y de interés económico, y una colección de hierbas. El jardín botánico dirige un programa de educación ambiental. El Jardín Botánico viene consolidando la propuesta de trabajo en las áreas de investigación y conservación, con base en experiencias anteriores y en la necesidad de profundizar el conocimiento existente, sobre el estado y el uso del recurso vegetal promisorio y silvestre en el Departamento de Caldas. En tal sentido, se han definido tres ejes de acción para ser desarrollados a mediano y largo plazo, en conjunto con otras instituciones de carácter local, regional y nacional.",
                'route'=> "Se encuentra dentro de la ciudad de Manizales en el departamento de Caldas. La dirección a la universidad es: Cl. 65 #26-10, Manizales, Caldas.",
                'costs'=> "Para los estudiantes de la institución es completamente gratis. Las personas visitantes al sitio pueden hacer un aporte voluntario.",
                'schedule'=> "Todos los días de 9:30 am a 3:30 pm.",
                'urlMainphoto'=>"jardines/jb-caldas/jb-caldas-1.jpg"
            ],
            [
                'name'=> "Jardín Botánico de Cali",
                'type'=> "jardin",
                'latitude'=> 3.4496016,
                'longitude'=> -76.5695679,
                'description'=> "La Fundación Jardín Botánico de Cali es una entidad sin ánimo de lucro. El Jardín Botánico de Cali, que se encuentra ubicado a tan solo un kilómetro del jblógico, cuenta con una vegetación nativa del bosque seco tropical, dos senderos temáticos que abordan trabajos sobre la botánica económica y la adaptación de las plantas a los diferentes ecosistemas, con los cuales realizan educación ambiental con colegios, universidades, grupos empresariales y de adultos mayores. Son catorce hectáreas de bosque tropical seco donde crecen guácimos, guayacanes, chiminangos, caracolíes, samanes, carboneros, acacias, orquídeas. Entre los árboles majestuosos, 100 especies de mariposas revolotean y 120 clases distintas de aves y pájaros anidan. Con cuidado, es posible avistar loros, colibríes, barranqueros, pavas de monte, guacharacas, carpinteros.",
                'route'=> "El Jardín Botánico de Cali, que se encuentra ubicado a tan solo un kilómetro del jblógico y de fácil acceso en carro particular y en transporte público. Avenida 3 No. 22B-140, Cali 760045, Colombia.",
                'costs'=> "La entrada es gratuita.",
                'schedule'=> "Lunes a sábados de 8:00 am a 3:00 pm.",
                'urlMainphoto'=>"jardines/jb-cali/jb-cali-1.jpg"  
            ],
            [
                'name'=> "Jardín Botánico Los Balsos (Jericó)",
                'type'=> "jardin",
                'latitude'=> 5.4738,
                'longitude'=> -75.4706,
                'description'=> "En este jardín botánico de Jericó se puede encontrar el espacio adecuado para compartir y disfrutar con familia y amigos. Este lugar puede ser perfecto para relajarte y encontrar paz interior, además experimentar y acercarse un poco más a la naturaleza.",
                'route'=> "Desde Bogotá hasta jericó la distancia es de 464km con un tiempo estimado de 11 horas y 11 minutos pasando por La Vega, Villeta, Guaduas, Honda, Mariquita, Fresno, Padua, Letras, Manizales, La Felisa, La Pintada, Bolombolo, Peña Lisa, Vía a Tarso Jericó",
                'costs'=> "La entrada al jardín botánico de jericó es completamente gratuita.",
                'schedule'=> "El jardín botánico abre sus puertas de 9:00 a.m. a 5:00 p.m. en jornada continua, incluyendo fines de semana y días festivos.",
                'urlMainphoto'=>"jardines/jb-jerico/jb-jerico-1.jpg"   
            ],
            [
                'name'=> "Jardin Botanico de la Macarena",
                'type'=> "jardin",
                'latitude'=> 2.1829465,
                'longitude'=> -73.7881031,
                'description'=> "En un espacio de ocho hectáreas en el centro de la isla, en el que reina el aire fresco y puro, está el Jardín Botánico en el que se puede observar la flora que ha sobrevivido desde la era de los dinosaurios, hasta las plantas más evolucionadas que tienen asiento en este pedazo de las Antillas. Este jardín, que pertenece a la Universidad Nacional de Colombia, cuenta con el atractivo adicional de un mirador de 12 metros de alto, con 360 grados de vista, desde donde puede apreciarse gran parte del bosque con que cuenta la isla y la margen oriental del mar Caribe.",
                'route'=> "Se encuentra ubicado a 18 kilometros del casco urbano de la Macarena, en la vereda La Esperanza, el camino rodeado por hermosos paisajes de sabanas y bosques, cruzando ríos. ",
                'costs'=> "La entrada oscila entre $3000 y $5000 en temporada baja y alta respectivamente.",
                'schedule'=> "Abierto al público todos los días de 9:00 am a 4:30 pm.",
                'urlMainphoto'=>"jardines/jb-macarena/jb-macarena-1.jpg"
            ],
            [
                'name'=> "Jardín Botánico de Medellín Joaquín Antonio Uribe",
                'type'=> "jardin",
                'latitude'=> 6.1355,
                'longitude'=> -75.3405,
                'description'=> "Es un gran museo vivo ubicado en pleno corazón de la ciudad y su principal objetivo es crear experiencias de encuentro y convivencia para la ciudad, integradas a estrategias de investigación, conservación y cultura asociadas a la biodiversidad y a la relación del ser humano con el entorno natural. Cuenta con colecciones vivas de plantas agrupadas en aulas vivas de aprendizaje. El Jardín es un espacio natural donde los visitantes pueden disfrutar, aprender y deleitarse con la variada biodiversidad de flora y fauna, que ha sido protegida por más de 45 años.",
                'route'=> "En el Jardín Botánico de Medellín el ingreso y la salida para peatones es únicamente por el Edificio de Acceso del Jardín, ubicado a pocos pasos de la estación Universidad del Metro. Para quienes visiten en vehículo y necesiten parqueadero deberán pasar sobre la carrera 52 (Carabobo) donde se cuenta con un pequeño parqueadero público, con capacidad para 120 vehículos. Varias rutas de transporte público masivo pasan cerca del Jardín Botánico. El taxi puede detenerse cerca de la entrada peatonal de la carrera 52 con calle 73.",
                'costs'=> "La entrada al jardín botánico es completamente gratis.",
                'schedule'=> "Excepto en eventos especiales, el Jardín abre sus puertas de 9:00 a.m. a 4:30 p.m. en jornada continua, incluyendo fines de semana y días festivos.",
                'urlMainphoto'=>"jardines/jb-medellin/jb-medellin-1.jpg"
            ],
            [
                'name'=> "Jardín Botánico de la Universidad Tecnológica de Pereira",
                'type'=> "jardin",
                'latitude'=> 4.7902164,
                'longitude'=> -75.6890738,
                'description'=> "Un excelente sitio para observar aves es el Jardín Botánico de la Universidad Tecnológica de Pereira, donde se han registrado 168 especies de pájaros, de los cuales 15 son migratorios. Allí, además, han sido identificadas 290 variedades de vegetales, siete de mamíferos y tres de anfibios. El jardín cuenta con un vivero de 0,3 ha donde se venden plantas y se presta asistencia técnica.",
                'route'=> "Se encuentra en la Universidad Tecnológica de Pereira que es la principal universidad de la ciudad.",
                'costs'=> "No tiene costo alguno.",
                'schedule'=> "Abierto de Lunes a Viernes de 9:00 am a 4:00 pm.",
                'urlMainphoto'=>"jardines/jb-pereira/jb-pereira-1.jpg"
            ],
            [
                'name'=> "Jardín botánico del Quindío",
                'type'=> "jardin",
                'latitude'=> 4.5117549,
                'longitude'=> -75.650894,
                'description'=> "El Jardín Botánico del Quindío es una organización no gubernamental, creada en 1979 como fundación sin ánimo de lucro, bajo el liderazgo de Alberto Gómez Mejía, con la participación de miembros de la Organización Oikos, la Universidad del Quindío y el Club de Jardinería de Armenia. Está estructurado con tres grandes objetivos: la conservación ecológica, la investigación científica y la educación ambiental. Está estructurado con tres grandes objetivos: la conservación ecológica, la investigación científica y la educación ambiental. Es además un reconocido centro de turismo de naturaleza, en el que nos esmeramos en preservar la belleza de los diferentes paisajes.",
                'route'=> "Se encuentra ubicado en el municipio de Calarca, Av Centenario no 15-190 Km. 3 Vía al Valle",
                'costs'=> "Niños entre los 3 y 12 años pagan: $16.000 . Adultos pagan: $32.000",
                'schedule'=> "Abierto todos los días de 9:00 am a 4:00 pm.",
                'urlMainphoto'=>"jardines/jb-quindio/jb-quindio-1.jpg"
            ],
            [
                'name'=> "Jardín Botánico de San Andrés",
                'type'=> "jardin",
                'latitude'=> 12.5374175,
                'longitude'=> -81.7111135,
                'description'=> "En un espacio de ocho hectáreas en el centro de la isla, en el que reina el aire fresco y puro, está el Jardín Botánico en el que se puede observar la flora que ha sobrevivido desde la era de los dinosaurios, hasta las plantas más evolucionadas que tienen asiento en este pedazo de las Antillas. Este jardín, que pertenece a la Universidad Nacional de Colombia, cuenta con el atractivo adicional de un mirador de 12 metros de alto, con 360 grados de vista, desde donde puede apreciarse gran parte del bosque con que cuenta la isla y la margen oriental del mar Caribe.",
                'route'=> "Ubicado en el bello sector de Harmony Hall Hill, en la llamada Loma del Mexicano, San Andrés.",
                'costs'=> "Estudiante con carné, gratis; adultos mayores, $3 mil; turistas nacionales, $7 mil, y turistas internacionales, $10 mil.",
                'schedule'=> "Martes a sábados: De 9:00 a.m. a 12:00 m., y de 2:00 a 4:30 p.m. Domingos y festivos: De 10:00 a.m. a 12:00 m., y de 2:00 a 4:30 p.m.",
                'urlMainphoto'=>"jardines/jb-sanandres/jb-sanandres-1.jpg"
            ],
            [
                'name'=> "Jardín Botánico Alexander von Humboldt",
                'type'=> "jardin",
                'latitude'=> 4.4255855,
                'longitude'=> -75.2118116,
                'description'=> "El Jardín Botánico Alejandro von Humboldt de la Universidad del Tolima fue creado en 1969. Con 10 ha, está ubicado entre los 1.070 y los 1.170 msnm y es hogar de 516 especies vegetales correspondientes a 110 familias, entre plantas ornamentales, medicinales, frutales y maderables. La mayoría de ellas son representativas de la flora regional y del bosque subandino.",
                'route'=> "El Jardín se encuentra dentro de las instalaciones de la Universidad del Tolima. La dirección es: Cl. 42 ##1b-1, Ibagué, Tolima",
                'costs'=> "Está abierto al público en general.",
                'schedule'=> "Abierto de Lunes a Viernes de 9:00 am a 4:00 pm. Siempre y cuando se encuentre abierta la Universidad del Tolima.",
                'urlMainphoto'=>"jardines/jb-tolima/jb-tolima-1.jpg"
            ]
        ];
        foreach ($places as $place) {
            Places::create($place);
        }
    }
}

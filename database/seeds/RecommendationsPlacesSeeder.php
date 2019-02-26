<?php

use App\Models\RecommendationPlaces;
use Illuminate\Database\Seeder;

class RecommendationsPlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recommendations = [
            [
                'place_id' => 1,
                'description' => "El centro de visitantes del Parque se encuentra cerrado al público y no se tiene una fecha determinada para reanudar la actividad ecoturística. Las comunidades de San Martín de Amacayacu y Mocagua, en este momento ofertan servicios ecoturísticos comunitarios y familiares a los cuales puede acceder cualquier visitante nacional o extranjero",
            ],
            [
                'place_id' => 1,
                'description' => "Las comunidades de Mocagua y San Martín prestan servicios básicos de alojamiento en hamaca, alimentación, transporte, guianza e interpretación ambiental",
            ],
            [
                'place_id' => 1,
                'description' => "En consideración a que las actividades ecoturísticas en el PNN Amacayacu se desarrollan en zonas de traslape con los territorios de los resguardos indígenas, tanto las autoridades indígenas como la autoridad ambiental (Parques Nacionales Naturales) son quienes ejercen el control y la regulación de estas actividades de desarrollo alternativo como el ecoturismo.",
            ],
            [
                'place_id' => 2,
                'description' => "El servicio de agua en Cabo de la Vela es bastante limitado así que es mejor que compres la suficiente en Uribia, así como otros productos de alimentación o snacks. Hay más variedad y los precios son igualmente más baratos.",
            ],
            [
                'place_id' => 2,
                'description' => "No se puede quedar el kit básico de viaje; protector solar, cámara y vestido de baño.",
            ],
            [
                'place_id' => 2,
                'description' => "Para regresar a Riohacha lo mejor es que lo hagas muy temprano; en horas de la mañana, así como para llegar a Cabo de la Vela. Después de 3 de la tarde el transporte escasea y se complica un poco.",
            ],
            [
                'place_id' => 2,
                'description' => "Los sitios turísticos en Cabo de la Vela están bastante alejados por eso lo mejor es contratar un tipo de transporte que se puede conseguir a buen precio si se sabe negociar o contratar un tour a Cabo de la Vela y Punta Gallinas",
            ],
            [
                'place_id' => 3,
                'description' => "No se puede perder la observación de la principal especie del Parque Nacional Natural Cahuinarí es sin duda la tortuga charapa"],
            [
                'place_id' => 3,
                'description' => "Los servicios ambientales son todos aquellos beneficios que obtenemos de los ecosistemas para nuestro bienestar y desarrollo, los cuales influyen directamente en el mantenimiento de la vida. Los procesos ecológicos de los ecosistemas naturales suministran a la humanidad una gran e importante gama de servicios gratuitos de los que dependemos, por tal motivo su conservación es una prioridad para Parques Nacionales."],
            [
                'place_id' => 3,
                'description' => "Cabe resaltar también, el papel de los ecosistemas del área protegida en la regulación del clima y del ciclo del agua, los cuales ayudan a mantener los procesos y funciones naturales de los ecosistemas, así como los servicios culturales representados en el valor estético, educativo, investigativo, espiritual y cultural de los ecosistemas presentes en el área protegida.",
            ],
            [
                'place_id' => 4,
                'description' => "Llevar una chaqueta ya que puede alcanzar temperaturas realmente frias.",
            ],
            [
                'place_id' => 4,
                'description' => "Usar calzado cómodo.",
            ],
            [
                'place_id' => 4,
                'description' => "Llevar suficiente agua y algo para picar y disfrutar durante el camino.",
            ],
            [
                'place_id' => 4,
                'description' => "Se cuenta con los servicios de alimentación necesaria para las actividades a realizar en el Parque. Administrados por la Corporación de ecoturismo comunitario, Corpochingaz",
            ],
            [
                'place_id' => 4,
                'description' => "El servicio de Camping se encuentra ubicado en el sector de Monterredondo con facilidades que incluyen parqueadero, energía eléctrica y servicios sanitarios con agua potable y agua caliente. Administrados por la Corporación de ecoturismo comunitario, Corpochingaza.",
            ],
            [
                'place_id' => 5,
                'description' => "Llevar una chaqueta ya que puede alcanzar temperaturas realmente frias.",
            ],
            [
                'place_id' => 5,
                'description' => "Usar calzado cómodo.",
            ],
            [
                'place_id' => 5,
                'description' => "Llevar suficiente agua y algo para picar y disfrutar durante el camino.",
            ],
            [
                'place_id' => 5,
                'description' => "Esta prohibido acampar en el Valle de Cocora, aunque hay fincas que por un poco precio ofrecen el espacio.",
            ],
            [
                'place_id' => 5,
                'description' => "Usar protector solar",
            ],
            [
                'place_id' => 5,
                'description' => "Conservar la basura y no arrojarla en el lugar.",
            ],
            [
                'place_id' => 6,
                'description' => "Llevar una chaqueta de material impermeable que permita la transpiración y de aislante térmico.",
            ],
            [
                'place_id' => 6,
                'description' => "Usar calzado cómodo.",
            ],
            [
                'place_id' => 6,
                'description' => "Llevar asamontañas, guantes, pantalones impermeables, polainas, botas para alta montaña con crampones de acero, arnés, piolet, martillo piolet, cuerda, mosquetones, cintas, tornillos para hielo, etc.",
            ],
            [
                'place_id' => 6,
                'description' => "Transite solamente por los senderos demarcados o con mojones y acompañado por un guía especializado en alta montaña",
            ],
            [
                'place_id' => 7,
                'description' => "Ropa adecuada de playa",
            ],
            [
                'place_id' => 7,
                'description' => "Usar calzado cómodo.",
            ],
            [
                'place_id' => 7,
                'description' => "Elementos para Actividades de sol y playa.",
            ],
            [
                'place_id' => 7,
                'description' => "Llevar suficiente agua y algo para picar y disfrutar durante el camino.",
            ],
            [
                'place_id' => 7,
                'description' => "Llevar elementos para actividades de buceo con equipo autónomo (SCUBA) y con equipo básico (careteo o snorkeling).",
            ],
            [
                'place_id' => 8,
                'description' => "Para la visita al santuario se recomienda llevar ropa abrigada, guantes y bufanda, zapatos cómodos preferiblemente cerrados, tipo tenis o bota y sin tacón alto para realizar el recorrido al sendero El Quiche.",
            ],
            [
                'place_id' => 8,
                'description' => "Evitar consumir alimentos o bebidas de cualquier tipo durante el recorrido en el Sendero.",
            ],
            [
                'place_id' => 8,
                'description' => "Se prohíbe el uso de aparatos electrónicos que produzcan ruido y perturben la tranquilidad del lugar.",
            ],
            [
                'place_id' => 8,
                'description' => "Como el sendero La Totora sirve también como muelle para desembarque de visitantes, es muy importante tener cuidado con los niños durante el recorrido ya que solo hay pasamanos por el lado interno del sendero.",
            ],
            [
                'place_id' => 8,
                'description' => "Tener cuidado con los objetos personales (bolsos, ropa, celulares, cámaras etc.); la administración no se hace responsable por objetos olvidados en el área protegida.",
            ],
            [
                'place_id' => 8,
                'description' => "Favor transitar únicamente por los senderos delimitados, al internarse en el bosque está ocasionando impactos que van en contra del propósito de conservación.",
            ],
            [
                'place_id' => 9,
                'description' => "Llevar ropa y calzado adecuado para alta montaña, hidratación y alimentación rica en carbohidratos además de ser personas que desarrollen actividad física constante.",
            ],
            [
                'place_id' => 9,
                'description' => "Portar documentos de identidad y carné de salud.",
            ],
            [
                'place_id' => 9,
                'description' => "Lleve bolsas plásticas para recolectar la basura que genere y deposítela en los sitios previstos al salir del área protegida.",
            ],
            [
                'place_id' => 10,
                'description' => "El Santuario no cuenta con alojamiento, zonas de camping o restaurante. Asi que llevar suficiente comida para el día",
            ],
            [
                'place_id' => 10,
                'description' => "Hacia el sector de Telpis es posible alojarse en alguna de las acogedoras casas campesinas de las Reservas Naturales de la Sociedad civil, que prestan servicio de alojamiento o con particulares en las veredas aledañas, previa concertación con las familias."],
            [
                'place_id' => 10,
                'description' => "ara el recorrido al sector de Telpis es importante llevar las provisiones necesarias; agua y alimentos ricos en calorías, los cuales se pueden adquirir en Pasto o en las poblaciones que se encuentran en la vía al Santuario. Las Reservas Naturales de la Sociedad Civil aledañas al Santuario prestan servicio de alimentación a los visitantes con previa reserva.",
            ],
            [
                'place_id' => 11,
                'description' => "El Santuario tiene una zona de camping para 12 carpas de 4 personas. Actualmente no se presta el servicio de camping.",
            ],
            [
                'place_id' => 11,
                'description' => "En épocas de invierno (abril-mayo, octubre-noviembre) el terreno es resbaloso y difícil de transitar por lo que debe tener cuidado especial en el recorrido.",
            ],
            [
                'place_id' => 11,
                'description' => "Portar documentos de identidad y carné de salud.",
            ],
            [
                'place_id' => 11,
                'description' => "Lleve bolsas plásticas para recolectar la basura que genere y deposítela en los sitios previstos al salir del área protegida.",
            ],
            [
                'place_id' => 11,
                'description' => "Está prohibido el ingreso de mascotas.",
            ],
            [
                'place_id' => 12,
                'description' => "Usar calzado cómodo.",
            ],
            [
                'place_id' => 12,
                'description' => "Ropa para caminar (pantalón largo, camisa de manga larga, tennis o botas para caminar)",
            ],
            [
                'place_id' => 12,
                'description' => "Llevar Gafas de sol, pequeño morral para las caminatas y elemenots de aseo personal.",
            ],
            [
                'place_id' => 13,
                'description' => "Para bucear en Malpelo se debe contar con un guía por un grupo de no más de seis buzos, debidamente certificado y con experiencia en la zona. Los turistas deberán contar con un nivel de certificación de buzo avanzado o dos estrellas, y con un mínimo de 35 buceos en bitácora, información que será corroborada por el funcionario de Parques Nacionales Naturales en el área protegida.",
            ],
            [
                'place_id' => 13,
                'description' => "La profundidad máxima de buceo permitida es hasta de 140 pies. Cada buzo deberá contar con un equipo mínimo para las actividades submarinas: (traje, chaleco, computador,  regulador y equipo básico),  y el equipo de seguridad: pito o cualquier otro sistema de alerta, cuchillo, boya de localización personal, linterna y luz de posición o estroboscópica y GPS acuático o nautilus.",
            ],
            [
                'place_id' => 13,
                'description' => "Cuando se trate de menores de edad que realicen actividades subacuáticas, deberán tener permiso escrito de los padres, así estos los acompañen.",
            ],
            [
                'place_id' => 13,
                'description' => "Es importante garantizar el control de flotabilidad como medida para evitar daños a los ecosistemas, y abstenerse de alimentar, perseguir o tocar la fauna marina. Por tanto se hace una inmersión de comprobación de flotabilidad donde se verifique la habilidad del buzo.",
            ],
            [
                'place_id' => 14,
                'description' => "Velar por la fragilidad de los ecosistemas y atender a los fines de su conservación.",
            ],
            [
                'place_id' => 14,
                'description' => "Si va a caretear o bucear, manténgase lejos de los corales y absténgase de tocar, extraer o romperlos ya que son especies muy frágiles que tardan muchos años para crecer.",
            ],
            [
                'place_id' => 14,
                'description' => "Evite comprar artesanías con partes de productos naturales como conchas, corales, material animal, vegetal o mineral.",
            ],
            [
                'place_id' => 14,
                'description' => "En la Isla existen guías locales, que puedes contactar a través de la oficina administrativa del Parque, y que ofrecen guianza especializada en los diferentes atractivos y alquiler de los equipos necesarios.",
            ],
            [
                'place_id' => 14,
                'description' => "Evite arrojar basura dentro del área protegida.",
            ],
            [
                'place_id' => 15,
                'description' => "No contamines el páramo, es la reserva de agua de los acueductos de Cúcuta y toda esa área metropolitana, es el agua que se bebe en Bucaramanga.",
            ],
            [
                'place_id' => 15,
                'description' => "Climatiza tu cuerpo llegando un día antes y pasando la noche en el municipio de Vetas. Esto te permitirá visitar cualquier laguna desde muy temprano.",
            ],
            [
                'place_id' => 15,
                'description' => "No olvides por ningún motivo usar protector solar (cero aerosoles).",
            ],
            [
                'place_id' => 15,
                'description' => "Usa ropa cómoda y que corte el frío (recomiendo usar licra debajo de la sudadera).",
            ],
            [
                'place_id' => 15,
                'description' => "En caso de camping, recomiendo que lo hagan en una finca cercana para que los ascensos los hagan con poco peso y cuidado con las fogatas.",
            ],
            [
                'place_id' => 16,
                'description' => "Usar calzado cómodo.",
            ],
            [
                'place_id' => 16,
                'description' => "Ropa para caminar (pantalón largo, camisa de manga larga, tennis o botas para caminar)",
            ],
            [
                'place_id' => 16,
                'description' => "Llevar Gafas de sol, pequeño morral para las caminatas y elementos de aseo personal.",
            ],
            [
                'place_id' => 16,
                'description' => "Se recomienda estar vacunado contra la fiebre amarilla. Aunque para el ingreso al Parque no se le exigirá estar vacunado.",
            ],
            [
                'place_id' => 17,
                'description' => "Tener buenas condiciones físicas para acceder al sitio.",
            ],
            [
                'place_id' => 17,
                'description' => "Usar calzado cómodo.",
            ],
            [
                'place_id' => 17,
                'description' => "Por favor acate las observaciones y sugerencias de los funcionarios del Parque y del personal encargado de la operación de los servicios ecoturísticos..",
            ],
            [
                'place_id' => 17,
                'description' => "Para visitar ciudad perdida, es necesario ponerse en contacto con el instituto Colombiano de Antropología e Historia (ICANH)",
            ],
            [
                'place_id' => 17,
                'description' => "Se recomienda estar vacunado contra la fiebre amarilla. Aunque para el ingreso al Parque no se le exigirá estar vacunado.",
            ],
            [
                'place_id' => 18,
                'description' => "Llevar documento de identidad para evidenciar si es colombiano.",
            ],
            [
                'place_id' => 18,
                'description' => "Usar ropa cómoda.",
            ],
            [
                'place_id' => 18,
                'description' => "Llevar suficiente agua.",
            ],
            [
                'place_id' => 18,
                'description' => "Buscar espacios disponibles para acampar si lo desea.",
            ],
            [
                'place_id' => 18,
                'description' => "Usar protector solar.",
            ],
            [
                'place_id' => 18,
                'description' => "Conservar la basura y no arrojarla en el lugar.",
            ],
            [
                'place_id' => 18,
                'description' => "Evitar el cambio de playa después de ocultarse el sol.",
            ],
            [
                'place_id' => 18,
                'description' => "El ingreso de bolsas plásticas y objetos de icopor está restringido.",
            ],
            [
                'place_id' => 18,
                'description' => "El ingreso de mascotas está restringido.",
            ],
            [
                'place_id' => 18,
                'description' => "Se recomienda estar vacunado contra la fiebre amarilla.",
            ],
            [
                'place_id' => 18,
                'description' => "Está prohibido: hacer fogatas, arrojar colillas de cigarrillos, quemar basura, realizar talas y capturar animales silvestres.",
            ],
            [
                'place_id' => 19,
                'description' => "A la fecha no hay servicio disponible de alojamiento y el ingreso al área protegida se realiza por pasadia. El alojamiento es brindado en la zona de amortiguación dependiendo del operador turístico de su preferencia. .",
            ],
            [
                'place_id' => 19,
                'description' => "El Área Protegida no cuenta con servicio de restaurante, este es ofrecido por el operador turístico. PNN de Colombia.",
            ],
            [
                'place_id' => 19,
                'description' => "Llevar suficiente agua y algo para picar y disfrutar durante el camino.",
            ],
            [
                'place_id' => 20,
                'description' => "Por seguridad, es importante que funcionarios, intérpretes ambientales y guías estén autorizados para realizar dichas actividades; puede solicitar el carné que los identifique.",
            ],
            [
                'place_id' => 20,
                'description' => "No está permitido el ingreso de mascotas o animales domésticos a las áreas protegidas.",
            ],
            [
                'place_id' => 20,
                'description' => "Está prohibido producir ruidos o utilizar instrumentos o equipos sonoros que perturben el ambiente natural o incomoden a los visitantes",
            ],
            [
                'place_id' => 20,
                'description' => "Se prohíbe el uso de aerosoles y productos que se consideren contaminantes como champú y jabones no biodegradables.",
            ],
            [
                'place_id' => 20,
                'description' => "Por favor tenga en cuenta las observaciones y sugerencias de los funcionarios y del personal encargado de los servicios ecoturísticos. Igualmente, debe respetar y cumplir la señalización establecida.",
            ],
            [
                'place_id' => 20,
                'description' => "Está prohibida la actividad de pesca para los turistas dentro del área protegida.",
            ],
            [
                'place_id' => 21,
                'description' => "LLevar documento de identidad"
            ],
            [
                'place_id' => 21,
                'description' => "Traer ropa y zapatos cómodos para caminar."
            ],
            [
                'place_id' => 21,
                'description' => "Usar bloqueador solar y/o cachucha para protegerse de los rayos solares."
            ],
            [
                'place_id' => 21,
                'description' => "Traer cámara fotográfica. Comparte fotos y videos en redes sociales."
            ],
            [
                'place_id' => 21,
                'description' => "No se permite el ingreso de mascotas."
            ],
            [
                'place_id' => 21,
                'description' => "LLegar temprano para disfrutar del zoológico y todo el parque amazónico.",
            ],
            [
                'place_id' => 22,
                'description' => "Llevar documento de identidad."
            ],
            [
                'place_id' => 22,
                'description' => "Usar ropa cómoda."
            ],
            [
                'place_id' => 22,
                'description' => "Llevar suficiente agua."
            ],
            [
                'place_id' => 22,
                'description' => "Usar protector solar."
            ],
            [
                'place_id' => 22,
                'description' => "Conservar la basura y no arrojarla en el lugar."
            ],
            [
                'place_id' => 22,
                'description' => "El ingreso de mascotas está restringido."
            ],
            [
                'place_id' => 22,
                'description' => "Dar alimentos a animales permitidos."
            ],
            [
                'place_id' => 22,
                'description' => "Conocer mapa del zoológico.",
            ],
            [
                'place_id' => 23,
                'description' => "LLevar documento de identidad"
            ],
            [
                'place_id' => 23,
                'description' => "Se prohíbe el ingreso de bebidas alcohólicas."
            ],
            [
                'place_id' => 23,
                'description' => "No tocar con sus manos ni con otra clase de instrumentos los animales."
            ],
            [
                'place_id' => 23,
                'description' => "No gritar a los animales."
            ],
            [
                'place_id' => 23,
                'description' => "Deposite las basuras en las canecas de aseo, así todos los visitantes encontrarán el Parque limpio y agradable."
            ],
            [
                'place_id' => 23,
                'description' => "No alimente los animales, cada animal tiene una dieta especial, elaborada por un profesional."
            ],
            [
                'place_id' => 23,
                'description' => "Cuide las plantas y jardines, son parte del entorno de los animales y hacen parte del paisaje del Zoológico.",
            ],
            [
                'place_id' => 24,
                'description' => "Llevar documento de identidad."
            ],
            [
                'place_id' => 24,
                'description' => "Usar ropa cómoda."
            ],
            [
                'place_id' => 24,
                'description' => "Llevar suficiente agua."
            ],
            [
                'place_id' => 24,
                'description' => "Usar protector solar."
            ],
            [
                'place_id' => 24,
                'description' => "Conservar la basura y no arrojarla en el lugar."
            ],
            [
                'place_id' => 24,
                'description' => "El ingreso de mascotas está restringido."
            ],
            [
                'place_id' => 24,
                'description' => "Cuenta con estacionamiento para automóviles y es fácilmente accesible a través del Mío",
            ],
            [
                'place_id' => 25,
                'description' => "Consulte siempre el parte meteorológico para el día en que programe su visita."
            ],
            [
                'place_id' => 25,
                'description' => "Siempre use ropa y calzado cómodos, recuerde que es una caminata larga de más de 2 km para ver todo el parque."
            ],
            [
                'place_id' => 25,
                'description' => "Si va a hacer uso de las atracciones recuerde traer ropa que no le importe ensuciar."
            ],
            [
                'place_id' => 25,
                'description' => "La seguridad siempre es lo primero, es importante no descuidar a lo niños durante el recorrido al parque"
            ],
            [
                'place_id' => 25,
                'description' => "Recuerde que no se permite el ingreso a mascotas por cuestiones de seguridad y salud, disponemos de servicio de guardería con cupos limitados en caso de ser necesario."
            ],
            [
                'place_id' => 25,
                'description' => "Use protección solar, la radiación suele ser alta y puede causar quemaduras de piel.",
            ],
            [
                'place_id' => 26,
                'description' => "Se prohíbe el ingreso y consumo de alimentos y bebidas adquiridas por fuera de los puntos de venta."
            ],
            [
                'place_id' => 26,
                'description' => "No tocar con sus manos ni con otra clase de instrumentos los animales."
            ],
            [
                'place_id' => 26,
                'description' => "No gritar a los animales. Ellos también sufren de estrés y su salud depende de que no se les moleste."
            ],
            [
                'place_id' => 26,
                'description' => "Deposite las basuras en las canecas de aseo, así todos los visitantes encontrarán el Parque limpio y agradable."
            ],
            [
                'place_id' => 26,
                'description' => "No alimente los animales, cada animal tiene una dieta especial, elaborada por un profesional."
            ],
            [
                'place_id' => 26,
                'description' => "Cuide las plantas y jardines, son parte del entorno de los animales y hacen parte del paisaje del Zoológico.",
            ],
            [
                'place_id' => 27,
                'description' => "LLevar documento de identidad"
            ],
            [
                'place_id' => 27,
                'description' => "Traer ropa y zapatos cómodos para caminar."
            ],
            [
                'place_id' => 27,
                'description' => "Usar bloqueador solar y/o cachucha para protegerse de los rayos solares."
            ],
            [
                'place_id' => 27,
                'description' => "Traer cámara fotográfica. Comparte fotos y videos en redes sociales."
            ],
            [
                'place_id' => 27,
                'description' => "Por seguridad de los visitantes y tranquilidad de los animales no se permite el ingreso de ningún tipo de mascotas."
            ],
            [
                'place_id' => 27,
                'description' => "No se permite el ingreso de elementos deportivos, ni comida."
            ],
            [
                'place_id' => 27,
                'description' => "Es importante acatar las normas de seguridad para el uso de las diferentes atracciones.",
            ],
            [
                'place_id' => 28,
                'description' => "Llevar documento de identidad"
            ],
            [
                'place_id' => 28,
                'description' => "No ingerir bebidas alcohólicas antes y durante el recorrido."
            ],
            [
                'place_id' => 28,
                'description' => "No ingresar mascotas"
            ],
            [
                'place_id' => 28,
                'description' => "No arrojar basura en lugares no indicados."
            ],
            [
                'place_id' => 28,
                'description' => "No maltratar ni extraer ningún componente vegetal o animal"
            ],
            [
                'place_id' => 28,
                'description' => "LLegar a tiempo para poder visitar todo el parque."
            ],
            [
                'place_id' => 28,
                'description' => "Aprovechar el servicio de parqueadero.",
            ],
            [
                'place_id' => 29,
                'description' => "LLevar documento de identidad"
            ],
            [
                'place_id' => 29,
                'description' => "A nuestros animales les encanta que les des comida, hazlo bajo tu propia responsabilidad, con precaución y solo con los productos que venden en las estaciones"
            ],
            [
                'place_id' => 29,
                'description' => "Te recomendamos usar ropa y zapatos cómodos, sombrero o gorro y protección solar."
            ],
            [
                'place_id' => 29,
                'description' => "Se debe transitar con precaución y sin correr"
            ],
            [
                'place_id' => 29,
                'description' => "En la entrada principal encontrarás sillas de ruedas, sombrillas y coches para bebés"
            ],
            [
                'place_id' => 29,
                'description' => "Deposite las basuras en las canecas de aseo, así todos los visitantes encontrarán el Parque limpio y agradable."
            ],
            [
                'place_id' => 29,
                'description' => "Para facilitarle la visita a las personas con discapacidades ofrecemos el servicio de transporte entre las estaciones en nuestra tradicional chiva."
            ],
            [
                'place_id' => 29,
                'description' => "En las estaciones hay variedad de restaurantes; baños, venta de mascotas y tiendas de recuerdos con productos increíbles para ti, tus amigos y familiares.",
            ],
            [
                'place_id' => 30,
                'description' => "Llevar documento de identidad."
            ],
            [
                'place_id' => 30,
                'description' => "Usar ropa cómoda."
            ],
            [
                'place_id' => 30,
                'description' => "Llevar suficiente agua."
            ],
            [
                'place_id' => 30,
                'description' => "Usar protector solar."
            ],
            [
                'place_id' => 30,
                'description' => "Conservar la basura y no arrojarla en el lugar."
            ],
            [
                'place_id' => 30,
                'description' => "El ingreso de mascotas está restringido."
            ],
            [
                'place_id' => 30,
                'description' => "Los talleres tendrpán costo adicional"
            ],
            [
                'place_id' => 30,
                'description' => "Aprovechar de las promociones y descuentos del zoológico",
            ],
            [
                'place_id' => 31,
                'description' => "Use ropa y zapatos cómodos para hacer el recorrido"
            ],
            [
                'place_id' => 31,
                'description' => "Evite correr y gritar."
            ],
            [
                'place_id' => 31,
                'description' => "No intente llamar la atención de los animales golpeando las mallas o vidrios, esto los asusta o estresa"
            ],
            [
                'place_id' => 31,
                'description' => "Deposite las basuras en las canecas de aseo, así todos los visitantes encontrarán el Parque limpio y agradable."
            ],
            [
                'place_id' => 31,
                'description' => "No alimente los animales, cada animal tiene una dieta especial, elaborada por un profesional."
            ],
            [
                'place_id' => 31,
                'description' => "Cuide las plantas y jardines, son parte del entorno de los animales y hacen parte del paisaje del Zoológico.",
            ],
            [
                'place_id' => 32,
                'description' => "No ingerir bebidas alcohólicas antes y durante el recorrido."
            ],
            [
                'place_id' => 32,
                'description' => "No ingresar mascotas"
            ],
            [
                'place_id' => 32,
                'description' => "Quienes utilicen algún medicamento, deben llevarlo consigo e informar de ello."
            ],
            [
                'place_id' => 32,
                'description' => "Desde tu ingreso harás parte de un ecosistema que debes cuidar."
            ],
            [
                'place_id' => 32,
                'description' => "No maltratar ni extraer ningún componente vegetal o animal"
            ],
            [
                'place_id' => 32,
                'description' => "Residuos de alimentos, envases, etc. deben ser depositados en sitios destinados para tal fin.",
            ],
            [
                'place_id' => 33,
                'description' => "Llevar documento de identidad."
            ],
            [
                'place_id' => 33,
                'description' => "Hacer uso de las papeleras para desechar los residuos."
            ],
            [
                'place_id' => 33,
                'description' => "No fumar dentro de las instalaciones del jardín."
            ],
            [
                'place_id' => 33,
                'description' => "Llevar bebida para hidratación"
            ],
            [
                'place_id' => 33,
                'description' => "Cuidar objetos personales."
            ],
            [
                'place_id' => 33,
                'description' => "No dañar ninguna colección perteneciente al jardín.",
            ],
            [
                'place_id' => 34,
                'description' => "No fumar dentro de las instalaciones del jardín."
            ],
            [
                'place_id' => 34,
                'description' => "Llevar bebida para hidratación"
            ],
            [
                'place_id' => 34,
                'description' => "Cuidar objetos personales."
            ],
            [
                'place_id' => 34,
                'description' => "No dañar ninguna colección perteneciente al jardín.",
            ],
            [
                'place_id' => 35,
                'description' => "Llevar documento de identidad."
            ],
            [
                'place_id' => 35,
                'description' => "Los encargados están trabajando mucho para organizarlo mejor. Pero desde ya es un lugar que hay que visitar, asi que tener cuidado con los senderos."
            ],
            [
                'place_id' => 35,
                'description' => "Es un lugar donde hay gran variedad de flora, especies de plantas propias de la region, así que cuidarlas."
            ],
            [
                'place_id' => 35,
                'description' => "este lugar es preciso para tener un pequeño contacto con la naturaleza y poder disfrutar de una caminata rítmica acompañada del canto de los pájaros por eso llevar calzado cómodo."
            ],
            [
                'place_id' => 35,
                'description' => "No dañar ninguna colección perteneciente al jardín.",
            ],
            [
                'place_id' => 36,
                'description' => "Iniciar el recorrido por la entrada principal del jardín para finalmente llegar al Cristo Redentor donde se podrá observar toda la ciudad."
            ],
            [
                'place_id' => 36,
                'description' => "Hacer uso de las papeleras para desechar los residuos."
            ],
            [
                'place_id' => 36,
                'description' => "No fumar dentro de las instalaciones del jardín."
            ],
            [
                'place_id' => 36,
                'description' => "Llevar bebida para hidratación"
            ],
            [
                'place_id' => 36,
                'description' => "No arrojar ningún elemento a los lagos."
            ],
            [
                'place_id' => 36,
                'description' => "No dañar ninguna parte del jardín.",
            ],
            [
                'place_id' => 37,
                'description' => "Es un lugar donde hay gran variedad de flora, especies de plantas propias de la region que se deben cuidar."
            ],
            [
                'place_id' => 37,
                'description' => "Ropa para clima tropical, que lo proteja del sol (camisa de manga larga, pantalones largos, botas cómodas para caminar, sombrero/ gorra)."
            ],
            [
                'place_id' => 37,
                'description' => "Repelente, bloqueador solar, impermeable para la lluvia, linterna, cámara fotográfica, termo para hidratación, bolsa plástica para regresar con sus residuos inorgánicos al municipio.",
            ],
            [
                'place_id' => 38,
                'description' => "Llevar documento de identidad."
            ],
            [
                'place_id' => 38,
                'description' => "Evitar llevar globos o bombas de colores porque las especies animales los confunden con frutos o pétalos de flores."
            ],
            [
                'place_id' => 38,
                'description' => "Hacer uso de las papeleras para desechar los residuos."
            ],
            [
                'place_id' => 38,
                'description' => "No fumar dentro de las instalaciones del jardín."
            ],
            [
                'place_id' => 38,
                'description' => "Llevar bebida para hidratación"
            ],
            [
                'place_id' => 38,
                'description' => "Cuidar objetos personales."
            ],
            [
                'place_id' => 38,
                'description' => "No dañar ninguna colección perteneciente al jardín.",
            ],
            [
                'place_id' => 39,
                'description' => "Hacer el recorrido,por la ruta ecológica de la Universidad es muy interesante, para apreciar las aves las plantas, asi como diferentes que se pueden visualizar así que llevar ropa cómoda y calzado adecuado"
            ],
            [
                'place_id' => 39,
                'description' => "Usar bastante bloqueador porque la ciudad en general suele ser bastante calurosa"
            ],
            [
                'place_id' => 39,
                'description' => "Las especies vegetales nativas del bosque andino, tienen un área destinada para su conservación, protección e investigación en la capital risaraldense: el Jardín Botánico de la Universidad Tecnológica de Pereira. Es por eso que no se debe dañar o arrancar ninguna planta perteneciente al lugar.",
            ],
            [
                'place_id' => 40,
                'description' => "El sendero es cómodo para caminar y apreciar todo. La guía sabia mucho de todos los temas del jardín, así que llevar el calzado y ropa adecuada."
            ],
            [
                'place_id' => 40,
                'description' => " El recorrido a pie y con guía, dura aproximadamente 2.5 horas. Así que llevar liquido necesario."
            ],
            [
                'place_id' => 40,
                'description' => "El percurso está bien organizado creando una inmersión en el medioambiente local. Mirar a los aves en silencio, oirlos cantar y caminar entre las mariposas ¡Son experiencias únicas!",
            ],
            [
                'place_id' => 41,
                'description' => "Es un lugar donde hay gran variedad de flora, especies de plantas propias de la region que se deben cuidar."
            ],
            [
                'place_id' => 41,
                'description' => "No dañar ninguna colección perteneciente al jardín."
            ],
            [
                'place_id' => 41,
                'description' => "También una rica colección de mariposas, de insectos, de fósiles y de corales. Por eso, es un espacio si se desea para la investigación"
            ],
            [
                'place_id' => 41,
                'description' => "La conservación, la recreación y la educación ambiental. Es una gran riqueza de nuestro patrimonio natural, cultural y ambiental en el Caribe.",
            ],
            [
                'place_id' => 42,
                'description' => "Iniciar el recorrido por la entrada principal del jardín para finalmente llegar al Cristo Redentor donde se podrá observar toda la ciudad."
            ],
            [
                'place_id' => 42,
                'description' => "Hacer uso de las papeleras para desechar los residuos."
            ],
            [
                'place_id' => 42,
                'description' => "No fumar dentro de las instalaciones del jardín."
            ],
            [
                'place_id' => 42,
                'description' => "Llevar bebida para hidratación"
            ],
            [
                'place_id' => 42,
                'description' => "No arrojar ningún elemento a los lagos."
            ],
            [
                'place_id' => 42,
                'description' => "No dañar ninguna parte del jardín.",
            ],
        ];
        foreach ($recommendations as $recommendation) {
            RecommendationPlaces::create($recommendation);
        }
    }
}

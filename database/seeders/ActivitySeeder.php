<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Activity;


class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    Activity::create([
        'stage_id' => 1,
        'name' => 'Museo de Antioquia y Plaza Botero',
        'total_activity' => 200000,
        'start_date' => '2024-07-01',
        'end_date' => '2024-07-01',
        'description' => 'Tour con guía por el museo y las esculturas de Botero.',
    ]);

    Activity::create([
        'stage_id' => 1,
        'name' => 'Tour gastronómico por el centro',
        'total_activity' => 250000,
        'start_date' => '2024-07-02',
        'end_date' => '2024-07-02',
        'description' => 'Degustación de platos paisas y postres tradicionales.',
    ]);

    Activity::create([
        'stage_id' => 1,
        'name' => 'Caminata por el Jardín Botánico',
        'total_activity' => 150000,
        'start_date' => '2024-07-02',
        'end_date' => '2024-07-02',
        'description' => 'Paseo por el mariposario y zonas verdes del jardín botánico.',
    ]);
    Activity::create([
        'stage_id' => 2,
        'name' => 'Graffiti tour en Comuna 13',
        'total_activity' => 300000,
        'start_date' => '2024-07-03',
        'end_date' => '2024-07-03',
        'description' => 'Tour con guía local por murales, historia y cultura urbana.',
    ]);

    Activity::create([
        'stage_id' => 2,
        'name' => 'Escaleras eléctricas y shows callejeros',
        'total_activity' => 150000,
        'start_date' => '2024-07-04',
        'end_date' => '2024-07-04',
        'description' => 'Exhibiciones artísticas y vistas panorámicas desde la Comuna.',
    ]);

    Activity::create([
        'stage_id' => 2,
        'name' => 'Cena temática en restaurante local',
        'total_activity' => 150000,
        'start_date' => '2024-07-04',
        'end_date' => '2024-07-04',
        'description' => 'Comida típica con show de música urbana en vivo.',
    ]);

    Activity::create([
        'stage_id' => 3,
        'name' => 'Tour histórico por la ciudad amurallada',
        'total_activity' => 1600000,
        'start_date' => '2024-08-10',
        'end_date' => '2024-08-10',
        'description' => 'Guía turística explicando historia, arquitectura y cultura.',
    ]);

    Activity::create([
        'stage_id' => 3,
        'name' => 'Puesta de sol en el Café del Mar',
        'total_activity' => 1000000,
        'start_date' => '2024-08-11',
        'end_date' => '2024-08-11',
        'description' => 'Cena con vista al mar y ambiente relajado sobre las murallas.',
    ]);

    Activity::create([
        'stage_id' => 3,
        'name' => 'Noche de rumba en Getsemaní',
        'total_activity' => 1000000,
        'start_date' => '2024-08-12',
        'end_date' => '2024-08-12',
        'description' => 'Música en vivo y baile en calles coloridas y bohemias.',
    ]);

    Activity::create([
        'stage_id' => 4,
        'name' => 'Paseo en lancha hacia las islas',
        'total_activity' => 1500000,
        'start_date' => '2024-08-13',
        'end_date' => '2024-08-13',
        'description' => 'Traslado marítimo hacia el archipiélago con vistas al Caribe.',
    ]);

    Activity::create([
        'stage_id' => 4,
        'name' => 'Snorkel y observación de corales',
        'total_activity' => 1200000,
        'start_date' => '2024-08-14',
        'end_date' => '2024-08-14',
        'description' => 'Actividad acuática con guía en arrecifes y aguas cristalinas.',
    ]);

    Activity::create([
        'stage_id' => 4,
        'name' => 'Almuerzo típico y descanso en la playa',
        'total_activity' => 900000,
        'start_date' => '2024-08-15',
        'end_date' => '2024-08-15',
        'description' => 'Comida caribeña, bebidas y tarde de relax en cabañas.',
    ]);

    Activity::create([
        'stage_id' => 5,
        'name' => 'Caminata por el pueblo',
        'total_activity' => 500000,
        'start_date' => '2024-09-05',
        'end_date' => '2024-09-05',
        'description' => 'Recorrido libre por la plaza, cafés y artesanías.',
    ]);

    Activity::create([
        'stage_id' => 5,
        'name' => 'Visita al mirador de Salento',
        'total_activity' => 600000,
        'start_date' => '2024-09-06',
        'end_date' => '2024-09-06',
        'description' => 'Vista panorámica del valle cafetero al amanecer.',
    ]);

    Activity::create([
        'stage_id' => 5,
        'name' => 'Café tour en finca local',
        'total_activity' => 700000,
        'start_date' => '2024-09-06',
        'end_date' => '2024-09-06',
        'description' => 'Degustación y recorrido por cultivos de café.',
    ]);

    Activity::create([
        'stage_id' => 6,
        'name' => 'Trekking por el valle',
        'total_activity' => 800000,
        'start_date' => '2024-09-07',
        'end_date' => '2024-09-07',
        'description' => 'Caminata entre palmas de cera y montañas verdes.',
    ]);

    Activity::create([
        'stage_id' => 6,
        'name' => 'Almuerzo típico campesino',
        'total_activity' => 500000,
        'start_date' => '2024-09-08',
        'end_date' => '2024-09-08',
        'description' => 'Trucha al ajillo con arroz y patacón en fonda local.',
    ]);

    Activity::create([
        'stage_id' => 6,
        'name' => 'Cabalgata ecológica',
        'total_activity' => 502000,
        'start_date' => '2024-09-08',
        'end_date' => '2024-09-08',
        'description' => 'Paseo guiado a caballo por senderos rurales.',
    ]);

    Activity::create([
        'stage_id' => 7,
        'name' => 'Inicio del sendero desde El Cedral',
        'total_activity' => 1500000,
        'start_date' => '2024-06-20',
        'end_date' => '2024-06-21',
        'description' => 'Inicio de caminata con observación de flora y fauna.',
    ]);

    Activity::create([
        'stage_id' => 7,
        'name' => 'Campamento junto a la laguna',
        'total_activity' => 1400000,
        'start_date' => '2024-06-22',
        'end_date' => '2024-06-23',
        'description' => 'Instalación de carpas y noche bajo las estrellas.',
    ]);

    Activity::create([
        'stage_id' => 7,
        'name' => 'Avistamiento de aves andinas',
        'total_activity' => 1500000,
        'start_date' => '2024-06-24',
        'end_date' => '2024-06-25',
        'description' => 'Jornada de observación con binoculares y guía experto.',
    ]);

    Activity::create([
        'stage_id' => 8,
        'name' => 'Aclimatación en el refugio',
        'total_activity' => 1200000,
        'start_date' => '2024-06-26',
        'end_date' => '2024-06-27',
        'description' => 'Estancia en campamento base para adaptación a la altitud.',
    ]);

    Activity::create([
        'stage_id' => 8,
        'name' => 'Ascenso guiado al glaciar',
        'total_activity' => 1800000,
        'start_date' => '2024-06-28',
        'end_date' => '2024-06-28',
        'description' => 'Ruta con crampones y equipo técnico hasta el hielo.',
    ]);

    Activity::create([
        'stage_id' => 8,
        'name' => 'Regreso y cierre de expedición',
        'total_activity' => 1400000,
        'start_date' => '2024-06-29',
        'end_date' => '2024-06-30',
        'description' => 'Descenso, almuerzo final y transporte de regreso.',
    ]);

    Activity::create([
        'stage_id' => 9,
        'name' => 'Senderismo hasta Cabo San Juan',
        'total_activity' => 1000000,
        'start_date' => '2024-07-18',
        'end_date' => '2024-07-18',
        'description' => 'Caminata entre selva y playas cristalinas.',
    ]);

    Activity::create([
        'stage_id' => 9,
        'name' => 'Noche en hamacas frente al mar',
        'total_activity' => 1000000,
        'start_date' => '2024-07-19',
        'end_date' => '2024-07-19',
        'description' => 'Hospedaje en zona ecológica dentro del parque.',
    ]);

    Activity::create([
        'stage_id' => 9,
        'name' => 'Baño en la playa La Piscina',
        'total_activity' => 1000000,
        'start_date' => '2024-07-20',
        'end_date' => '2024-07-20',
        'description' => 'Playa segura para nadar, rodeada de rocas y naturaleza.',
    ]);

    Activity::create([
        'stage_id' => 10,
        'name' => 'Snorkel en Playa Grande',
        'total_activity' => 1200000,
        'start_date' => '2024-07-21',
        'end_date' => '2024-07-21',
        'description' => 'Exploración submarina con guía local.',
    ]);

    Activity::create([
        'stage_id' => 10,
        'name' => 'Puesta de sol desde mirador',
        'total_activity' => 800000,
        'start_date' => '2024-07-21',
        'end_date' => '2024-07-21',
        'description' => 'Vista panorámica del mar Caribe al atardecer.',
    ]);

    Activity::create([
        'stage_id' => 10,
        'name' => 'Cena en restaurante frente al mar',
        'total_activity' => 1000000,
        'start_date' => '2024-07-22',
        'end_date' => '2024-07-22',
        'description' => 'Comida típica costeña con música en vivo.',
    ]);

    Activity::create([
        'stage_id' => 11,
        'name' => 'Visita a la Catedral de la Inmaculada',
        'total_activity' => 600000,
        'start_date' => '2024-05-10',
        'end_date' => '2024-05-10',
        'description' => 'Exploración de la iglesia principal del municipio.',
    ]);

    Activity::create([
        'stage_id' => 11,
        'name' => 'Tour de arquitectura colonial',
        'total_activity' => 700000,
        'start_date' => '2024-05-11',
        'end_date' => '2024-05-11',
        'description' => 'Guía turística por las casas antiguas y callejones.',
    ]);

    Activity::create([
        'stage_id' => 11,
        'name' => 'Atardecer desde el mirador',
        'total_activity' => 600000,
        'start_date' => '2024-05-11',
        'end_date' => '2024-05-11',
        'description' => 'Vista panorámica del cañón del río Suárez.',
    ]);

    Activity::create([
        'stage_id' => 12,
        'name' => 'Inicio del sendero ecológico',
        'total_activity' => 700000,
        'start_date' => '2024-05-12',
        'end_date' => '2024-05-12',
        'description' => 'Caminata desde Barichara entre paisajes rurales.',
    ]);

    Activity::create([
        'stage_id' => 12,
        'name' => 'Visita al pueblo de Guane',
        'total_activity' => 600000,
        'start_date' => '2024-05-13',
        'end_date' => '2024-05-13',
        'description' => 'Museo arqueológico y tradiciones locales.',
    ]);

    Activity::create([
        'stage_id' => 12,
        'name' => 'Almuerzo tradicional santandereano',
        'total_activity' => 600000,
        'start_date' => '2024-05-13',
        'end_date' => '2024-05-13',
        'description' => 'Gastronomía típica de la región en restaurante local.',
    ]);

    Activity::create([
        'stage_id' => 13,
        'name' => 'Recorrido por el Parque Santander',
        'total_activity' => 2000000,
        'start_date' => '2024-11-01',
        'end_date' => '2024-11-01',
        'description' => 'Observación de loros al atardecer y caminata urbana.',
    ]);

    Activity::create([
        'stage_id' => 13,
        'name' => 'Visita al Museo Etnográfico del Amazonas',
        'total_activity' => 2000000,
        'start_date' => '2024-11-02',
        'end_date' => '2024-11-02',
        'description' => 'Exploración cultural sobre comunidades indígenas.',
    ]);

    Activity::create([
        'stage_id' => 13,
        'name' => 'Tour por la Reserva Natural Tanimboca',
        'total_activity' => 2000000,
        'start_date' => '2024-11-03',
        'end_date' => '2024-11-05',
        'description' => 'Caminatas en la selva, canopy y hospedaje en cabañas sobre los árboles.',
    ]);

    Activity::create([
        'stage_id' => 14,
        'name' => 'Navegación por el río Amazonas',
        'total_activity' => 3000000,
        'start_date' => '2024-11-06',
        'end_date' => '2024-11-07',
        'description' => 'Recorrido en bote por los afluentes del Amazonas.',
    ]);

    Activity::create([
        'stage_id' => 14,
        'name' => 'Avistamiento de delfines rosados',
        'total_activity' => 1500000,
        'start_date' => '2024-11-08',
        'end_date' => '2024-11-08',
        'description' => 'Actividad guiada para ver fauna silvestre en su hábitat.',
    ]);

    Activity::create([
        'stage_id' => 14,
        'name' => 'Visita a comunidad Ticuna',
        'total_activity' => 1500000,
        'start_date' => '2024-11-09',
        'end_date' => '2024-11-10',
        'description' => 'Intercambio cultural y muestra de artesanías locales.',
    ]);

    Activity::create([
        'stage_id' => 15,
        'name' => 'Visita al Museo del Oro',
        'total_activity' => 700000,
        'start_date' => '2024-10-05',
        'end_date' => '2024-10-05',
        'description' => 'Colección precolombina más importante de América Latina.',
    ]);

    Activity::create([
        'stage_id' => 15,
        'name' => 'Caminata por La Candelaria',
        'total_activity' => 800000,
        'start_date' => '2024-10-06',
        'end_date' => '2024-10-06',
        'description' => 'Recorrido a pie por calles empedradas, grafitis y casas coloniales.',
    ]);

    Activity::create([
        'stage_id' => 15,
        'name' => 'Almuerzo en restaurante típico',
        'total_activity' => 700000,
        'start_date' => '2024-10-07',
        'end_date' => '2024-10-07',
        'description' => 'Comida bogotana: ajiaco, tamales y chocolate con queso.',
    ]);

    Activity::create([
        'stage_id' => 16,
        'name' => 'Ascenso a Monserrate',
        'total_activity' => 1000000,
        'start_date' => '2024-10-08',
        'end_date' => '2024-10-08',
        'description' => 'Subida en teleférico con vista panorámica de Bogotá.',
    ]);

    Activity::create([
        'stage_id' => 16,
        'name' => 'Tour en el Jardín Botánico',
        'total_activity' => 600000,
        'start_date' => '2024-10-09',
        'end_date' => '2024-10-09',
        'description' => 'Exploración de flora nativa en un entorno educativo y ecológico.',
    ]);

    Activity::create([
        'stage_id' => 16,
        'name' => 'Café y arte en Usaquén',
        'total_activity' => 600000,
        'start_date' => '2024-10-09',
        'end_date' => '2024-10-09',
        'description' => 'Paseo por zona bohemia con tiendas, cafés y música en vivo.',
    ]);

    Activity::create([
        'stage_id' => 17,
        'name' => 'Salida desde Tunja',
        'total_activity' => 500000,
        'start_date' => '2024-09-20',
        'end_date' => '2024-09-20',
        'description' => 'Inicio del recorrido con revisión técnica de bicicletas.',
    ]);

    Activity::create([
        'stage_id' => 17,
        'name' => 'Subida al Alto de El Crucero',
        'total_activity' => 600000,
        'start_date' => '2024-09-21',
        'end_date' => '2024-09-21',
        'description' => 'Desafío de montaña con hidratación y asistencia en ruta.',
    ]);

    Activity::create([
        'stage_id' => 17,
        'name' => 'Descanso y recuperación en Paipa',
        'total_activity' => 400000,
        'start_date' => '2024-09-22',
        'end_date' => '2024-09-22',
        'description' => 'Baños termales y masajes deportivos.',
    ]);

    Activity::create([
        'stage_id' => 18,
        'name' => 'Recorrido bordeando el lago',
        'total_activity' => 700000,
        'start_date' => '2024-09-23',
        'end_date' => '2024-09-23',
        'description' => 'Ruta escénica junto al Lago de Tota en carretera secundaria.',
    ]);

    Activity::create([
        'stage_id' => 18,
        'name' => 'Almuerzo en Playa Blanca',
        'total_activity' => 400000,
        'start_date' => '2024-09-23',
        'end_date' => '2024-09-23',
        'description' => 'Comida típica boyacense frente al lago.',
    ]);

    Activity::create([
        'stage_id' => 18,
        'name' => 'Taller de mantenimiento de bicicletas',
        'total_activity' => 400000,
        'start_date' => '2024-09-24',
        'end_date' => '2024-09-24',
        'description' => 'Sesión de mecánica básica para cicloviajeros.',
    ]);

    Activity::create([
        'stage_id' => 19,
        'name' => 'Recorrido por el laberinto del Cuzco',
        'total_activity' => 700000,
        'start_date' => '2024-08-01',
        'end_date' => '2024-08-01',
        'description' => 'Caminata guiada entre formaciones rojizas del desierto.',
    ]);

    Activity::create([
        'stage_id' => 19,
        'name' => 'Visita al Museo Paleontológico',
        'total_activity' => 600000,
        'start_date' => '2024-08-02',
        'end_date' => '2024-08-02',
        'description' => 'Exposición de fósiles y restos prehistóricos.',
    ]);

    Activity::create([
        'stage_id' => 19,
        'name' => 'Baño en el pozo La Piscina',
        'total_activity' => 660000,
        'start_date' => '2024-08-02',
        'end_date' => '2024-08-02',
        'description' => 'Relajación en piscina natural en medio del desierto.',
    ]);

    Activity::create([
        'stage_id' => 20,
        'name' => 'Observación astronómica guiada',
        'total_activity' => 900000,
        'start_date' => '2024-08-03',
        'end_date' => '2024-08-03',
        'description' => 'Uso de telescopios con guía profesional al aire libre.',
    ]);

    Activity::create([
        'stage_id' => 20,
        'name' => 'Fotografía nocturna del desierto',
        'total_activity' => 600000,
        'start_date' => '2024-08-03',
        'end_date' => '2024-08-03',
        'description' => 'Captura de estrellas, Vía Láctea y siluetas del paisaje árido.',
    ]);

    Activity::create([
        'stage_id' => 20,
        'name' => 'Sendero al amanecer por la zona gris',
        'total_activity' => 460000,
        'start_date' => '2024-08-04',
        'end_date' => '2024-08-04',
        'description' => 'Caminata matutina por formaciones de arcilla gris con luz suave.',
    ]);

    Activity::create([
        'stage_id' => 21,
        'name' => 'Rafting en el río Fonce',
        'total_activity' => 1500000,
        'start_date' => '2024-07-11',
        'end_date' => '2024-07-11',
        'description' => 'Descenso por rápidos clase III con guía profesional.',
    ]);

    Activity::create([
        'stage_id' => 21,
        'name' => 'Curso básico de kayak',
        'total_activity' => 700000,
        'start_date' => '2024-07-12',
        'end_date' => '2024-07-12',
        'description' => 'Aprende técnicas básicas de navegación individual.',
    ]);

    Activity::create([
        'stage_id' => 21,
        'name' => 'Tarde libre en el malecón',
        'total_activity' => 500000,
        'start_date' => '2024-07-12',
        'end_date' => '2024-07-12',
        'description' => 'Paseo por la zona turística y gastronomía local.',
    ]);

    Activity::create([
        'stage_id' => 22,
        'name' => 'Descenso en rappel',
        'total_activity' => 1100000,
        'start_date' => '2024-07-13',
        'end_date' => '2024-07-13',
        'description' => 'Aventura vertical desde acantilados seguros.',
    ]);

    Activity::create([
        'stage_id' => 22,
        'name' => 'Exploración de la Cueva del Indio',
        'total_activity' => 800000,
        'start_date' => '2024-07-13',
        'end_date' => '2024-07-13',
        'description' => 'Ruta subterránea con estalactitas y ríos internos.',
    ]);

    Activity::create([
        'stage_id' => 22,
        'name' => 'Caminata ecológica',
        'total_activity' => 800000,
        'start_date' => '2024-07-13',
        'end_date' => '2024-07-13',
        'description' => 'Sendero interpretativo con vistas a la montaña.',
    ]);

    Activity::create([
        'stage_id' => 23,
        'name' => 'Recorrido por la Plaza Mayor',
        'total_activity' => 600000,
        'start_date' => '2024-06-08',
        'end_date' => '2024-06-08',
        'description' => 'La plaza colonial más grande de Colombia, arquitectura y cafés.',
    ]);

    Activity::create([
        'stage_id' => 23,
        'name' => 'Museo Paleontológico',
        'total_activity' => 500000,
        'start_date' => '2024-06-09',
        'end_date' => '2024-06-09',
        'description' => 'Fósiles y hallazgos prehistóricos de la región andina.',
    ]);

    Activity::create([
        'stage_id' => 23,
        'name' => 'Casa Museo Antonio Nariño',
        'total_activity' => 500000,
        'start_date' => '2024-06-09',
        'end_date' => '2024-06-09',
        'description' => 'Historia del prócer y su impacto en la independencia.',
    ]);

    Activity::create([
        'stage_id' => 24,
        'name' => 'Feria de artesanías',
        'total_activity' => 700000,
        'start_date' => '2024-06-10',
        'end_date' => '2024-06-10',
        'description' => 'Productos hechos a mano, cerámica y tejidos locales.',
    ]);

    Activity::create([
        'stage_id' => 24,
        'name' => 'Visita al Pozos Azules',
        'total_activity' => 600000,
        'start_date' => '2024-06-10',
        'end_date' => '2024-06-10',
        'description' => 'Caminata y fotografía en lagunas de aguas color turquesa.',
    ]);

    Activity::create([
        'stage_id' => 24,
        'name' => 'Degustación de postres típicos',
        'total_activity' => 300000,
        'start_date' => '2024-06-10',
        'end_date' => '2024-06-10',
        'description' => 'Merengón, bocadillo con queso y dulce de leche artesanal.',
    ]);

    Activity::create([
        'stage_id' => 25,
        'name' => 'City tour por el Bulevar del Río',
        'total_activity' => 800000,
        'start_date' => '2024-12-02',
        'end_date' => '2024-12-02',
        'description' => 'Paseo peatonal con visita a la Iglesia La Ermita y el Gato del Río.',
    ]);

    Activity::create([
        'stage_id' => 25,
        'name' => 'Almuerzo típico en barrio San Antonio',
        'total_activity' => 700000,
        'start_date' => '2024-12-03',
        'end_date' => '2024-12-03',
        'description' => 'Delicias como sancocho, lulada y empanadas vallunas.',
    ]);

    Activity::create([
        'stage_id' => 25,
        'name' => 'Museo de la Salsa',
        'total_activity' => 900000,
        'start_date' => '2024-12-04',
        'end_date' => '2024-12-04',
        'description' => 'Exposición musical, colección de vinilos y cultura salsera.',
    ]);

    Activity::create([
        'stage_id' => 26,
        'name' => 'Clases de salsa en vivo',
        'total_activity' => 1000000,
        'start_date' => '2024-12-05',
        'end_date' => '2024-12-05',
        'description' => 'Taller con bailarines profesionales en una escuela local.',
    ]);

    Activity::create([
        'stage_id' => 26,
        'name' => 'Excursión a las cascadas de Pance',
        'total_activity' => 800000,
        'start_date' => '2024-12-06',
        'end_date' => '2024-12-06',
        'description' => 'Trekking suave, baño natural y picnic en la zona rural.',
    ]);

    Activity::create([
        'stage_id' => 26,
        'name' => 'Cena con show salsero',
        'total_activity' => 600000,
        'start_date' => '2024-12-06',
        'end_date' => '2024-12-06',
        'description' => 'Restaurante con espectáculo musical en vivo.',
    ]);
    
    Activity::create([
        'stage_id' => 27,
        'name' => 'Visita al Pilón de Azúcar',
        'total_activity' => 1300000,
        'start_date' => '2024-07-25',
        'end_date' => '2024-07-25',
        'description' => 'Caminata y vista panorámica desde la colina sagrada Wayuu.',
    ]);

    Activity::create([
        'stage_id' => 27,
        'name' => 'Atardecer en el Faro',
        'total_activity' => 1300000,
        'start_date' => '2024-07-25',
        'end_date' => '2024-07-25',
        'description' => 'Momento fotográfico con vista al mar Caribe.',
    ]);

    Activity::create([
        'stage_id' => 27,
        'name' => 'Playas del Ojo de Agua',
        'total_activity' => 1266667,
        'start_date' => '2024-07-26',
        'end_date' => '2024-07-26',
        'description' => 'Relajación en playas vírgenes y paseo por la costa.',
    ]);

    Activity::create([
        'stage_id' => 28,
        'name' => 'Visita a las Dunas de Taroa',
        'total_activity' => 1400000,
        'start_date' => '2024-07-27',
        'end_date' => '2024-07-27',
        'description' => 'Ascenso por dunas y vista directa al mar.',
    ]);

    Activity::create([
        'stage_id' => 28,
        'name' => 'Noche en ranchería tradicional',
        'total_activity' => 1300000,
        'start_date' => '2024-07-27',
        'end_date' => '2024-07-27',
        'description' => 'Dormir en chinchorros con cena tradicional Wayuu.',
    ]);

    Activity::create([
        'stage_id' => 28,
        'name' => 'Navegación en Bahía Hondita',
        'total_activity' => 1166667,
        'start_date' => '2024-07-28',
        'end_date' => '2024-07-28',
        'description' => 'Tour en lancha para observar manglares y flamencos.',
    ]);

    Activity::create([
        'stage_id' => 29,
        'name' => 'Taller de tejidos Wayuu',
        'total_activity' => 1300000,
        'start_date' => '2024-07-29',
        'end_date' => '2024-07-29',
        'description' => 'Aprende sobre el simbolismo de los diseños y crea tu mochila.',
    ]);

    Activity::create([
        'stage_id' => 29,
        'name' => 'Almuerzo tradicional con chivo',
        'total_activity' => 1300000,
        'start_date' => '2024-07-29',
        'end_date' => '2024-07-29',
        'description' => 'Plato típico preparado por mujeres Wayuu.',
    ]);

    Activity::create([
        'stage_id' => 29,
        'name' => 'Ruta por los salares de Manaure',
        'total_activity' => 1266666,
        'start_date' => '2024-07-30',
        'end_date' => '2024-07-30',
        'description' => 'Recorrido por la producción artesanal de sal.',
    ]);

    Activity::create([
        'stage_id' => 30,
        'name' => 'Tubbing en el río',
        'total_activity' => 1000000,
        'start_date' => '2024-06-14',
        'end_date' => '2024-06-14',
        'description' => 'Descenso flotando sobre neumáticos en aguas cristalinas.',
    ]);

    Activity::create([
        'stage_id' => 30,
        'name' => 'Sendero ecológico El Refugio',
        'total_activity' => 600000,
        'start_date' => '2024-06-15',
        'end_date' => '2024-06-15',
        'description' => 'Caminata entre flora y fauna del bosque húmedo tropical.',
    ]);

    Activity::create([
        'stage_id' => 30,
        'name' => 'Nado libre en la playa natural',
        'total_activity' => 500000,
        'start_date' => '2024-06-15',
        'end_date' => '2024-06-15',
        'description' => 'Relajación en las aguas tranquilas del cañón.',
    ]);

    Activity::create([
        'stage_id' => 31,
        'name' => 'Ingreso a la Caverna de los Guácharos',
        'total_activity' => 900000,
        'start_date' => '2024-06-16',
        'end_date' => '2024-06-16',
        'description' => 'Exploración con linterna por cuevas con ríos subterráneos.',
    ]);

    Activity::create([
        'stage_id' => 31,
        'name' => 'Avistamiento de guácharos',
        'total_activity' => 700000,
        'start_date' => '2024-06-16',
        'end_date' => '2024-06-16',
        'description' => 'Observación de aves nocturnas en su hábitat natural.',
    ]);

    Activity::create([
        'stage_id' => 31,
        'name' => 'Caminata al mirador del cañón',
        'total_activity' => 500000,
        'start_date' => '2024-06-16',
        'end_date' => '2024-06-16',
        'description' => 'Vista panorámica del valle y formaciones kársticas.',
    ]);

    Activity::create([
        'stage_id' => 32,
        'name' => 'Recorrido por el centro histórico',
        'total_activity' => 900000,
        'start_date' => '2024-05-22',
        'end_date' => '2024-05-22',
        'description' => 'Visita a la Basílica, parque principal y casas coloridas.',
    ]);

    Activity::create([
        'stage_id' => 32,
        'name' => 'Café y charla en fonda tradicional',
        'total_activity' => 700000,
        'start_date' => '2024-05-23',
        'end_date' => '2024-05-23',
        'description' => 'Café antioqueño en fonda con música y tradición paisa.',
    ]);

    Activity::create([
        'stage_id' => 32,
        'name' => 'Mirador Cristo Rey',
        'total_activity' => 700000,
        'start_date' => '2024-05-23',
        'end_date' => '2024-05-23',
        'description' => 'Vista panorámica del pueblo desde el cerro.',
    ]);

    Activity::create([
        'stage_id' => 33,
        'name' => 'Caminata al Charco Corazón',
        'total_activity' => 1000000,
        'start_date' => '2024-05-24',
        'end_date' => '2024-05-24',
        'description' => 'Sendero ecológico hasta el charco en forma de corazón.',
    ]);

    Activity::create([
        'stage_id' => 33,
        'name' => 'Almuerzo típico en finca',
        'total_activity' => 800000,
        'start_date' => '2024-05-24',
        'end_date' => '2024-05-24',
        'description' => 'Bandeja paisa casera y jugo de guanábana.',
    ]);

    Activity::create([
        'stage_id' => 33,
        'name' => 'Tour por cafetales',
        'total_activity' => 500000,
        'start_date' => '2024-05-24',
        'end_date' => '2024-05-24',
        'description' => 'Recorrido por cultivo de café, recolección y degustación.',
    ]);

    Activity::create([
        'stage_id' => 34,
        'name' => 'Llegada a El Cocuy',
        'total_activity' => 1500000,
        'start_date' => '2024-10-15',
        'end_date' => '2024-10-15',
        'description' => 'Traslado desde Tunja o Bogotá y acomodación en posada rural.',
    ]);

    Activity::create([
        'stage_id' => 34,
        'name' => 'Paseo por el pueblo',
        'total_activity' => 1200000,
        'start_date' => '2024-10-16',
        'end_date' => '2024-10-16',
        'description' => 'Recorrido por arquitectura colonial y charla sobre el parque.',
    ]);

    Activity::create([
        'stage_id' => 34,
        'name' => 'Taller de preparación física',
        'total_activity' => 1300000,
        'start_date' => '2024-10-16',
        'end_date' => '2024-10-16',
        'description' => 'Charla con guía local y recomendaciones para el ascenso.',
    ]);

    Activity::create([
        'stage_id' => 35,
        'name' => 'Inicio del sendero al Ritacuba',
        'total_activity' => 1400000,
        'start_date' => '2024-10-17',
        'end_date' => '2024-10-17',
        'description' => 'Caminata desde la base del parque hasta el campamento base.',
    ]);

    Activity::create([
        'stage_id' => 35,
        'name' => 'Ascenso al borde del glaciar',
        'total_activity' => 1600000,
        'start_date' => '2024-10-18',
        'end_date' => '2024-10-18',
        'description' => 'Ascenso técnico con guía certificado hasta los 4.800 msnm.',
    ]);

    Activity::create([
        'stage_id' => 35,
        'name' => 'Descenso y descanso',
        'total_activity' => 1200000,
        'start_date' => '2024-10-19',
        'end_date' => '2024-10-19',
        'description' => 'Regreso con observación de flora andina y descanso rural.',
    ]);

    Activity::create([
        'stage_id' => 36,
        'name' => 'Trekking a Laguna Grande',
        'total_activity' => 1500000,
        'start_date' => '2024-10-20',
        'end_date' => '2024-10-20',
        'description' => 'Caminata entre frailejones hasta la laguna andina.',
    ]);

    Activity::create([
        'stage_id' => 36,
        'name' => 'Observación de fauna y fotografía',
        'total_activity' => 1200000,
        'start_date' => '2024-10-20',
        'end_date' => '2024-10-20',
        'description' => 'Avistamiento de cóndores y toma de panorámicas.',
    ]);

    Activity::create([
        'stage_id' => 36,
        'name' => 'Regreso al pueblo y cierre del viaje',
        'total_activity' => 1500000,
        'start_date' => '2024-10-21',
        'end_date' => '2024-10-21',
        'description' => 'Última noche de descanso con fogata y cena típica boyacense.',
    ]);

    Activity::create([
        'stage_id' => 37,
        'name' => 'Parapente en el cerro Pionono',
        'total_activity' => 1000000,
        'start_date' => '2024-06-01',
        'end_date' => '2024-06-01',
        'description' => 'Vuelo en parapente con vista al valle y a la sabana de Bogotá.',
    ]);

    Activity::create([
        'stage_id' => 37,
        'name' => 'Visita a Alpina y degustación',
        'total_activity' => 800000,
        'start_date' => '2024-06-02',
        'end_date' => '2024-06-02',
        'description' => 'Recorrido por la tienda de Alpina, degustación de postres y productos lácteos.',
    ]);

    Activity::create([
        'stage_id' => 37,
        'name' => 'Caminata ecológica en el sendero El Refugio',
        'total_activity' => 800000,
        'start_date' => '2024-06-02',
        'end_date' => '2024-06-02',
        'description' => 'Sendero natural con miradores y avistamiento de aves.',
    ]);

    Activity::create([
        'stage_id' => 38,
        'name' => 'City tour colonial',
        'total_activity' => 1000000,
        'start_date' => '2024-09-10',
        'end_date' => '2024-09-10',
        'description' => 'Recorrido por la Catedral, Puente del Humilladero y capillas antiguas.',
    ]);

    Activity::create([
        'stage_id' => 38,
        'name' => 'Museo Nacional Guillermo Valencia',
        'total_activity' => 800000,
        'start_date' => '2024-09-11',
        'end_date' => '2024-09-11',
        'description' => 'Visita al museo con historia política y literaria del Cauca.',
    ]);

    Activity::create([
        'stage_id' => 38,
        'name' => 'Taller artesanal en barro',
        'total_activity' => 700000,
        'start_date' => '2024-09-11',
        'end_date' => '2024-09-11',
        'description' => 'Actividad práctica con artesanos locales del barrio Bolívar.',
    ]);

    Activity::create([
        'stage_id' => 39,
        'name' => 'Desayuno típico: empanadas de pipián y tamales de pipián',
        'total_activity' => 900000,
        'start_date' => '2024-09-12',
        'end_date' => '2024-09-12',
        'description' => 'Degustación en una plaza de mercado tradicional.',
    ]);

    Activity::create([
        'stage_id' => 39,
        'name' => 'Clase de cocina caucana',
        'total_activity' => 1000000,
        'start_date' => '2024-09-12',
        'end_date' => '2024-09-12',
        'description' => 'Preparación de platos típicos con chef local.',
    ]);

    Activity::create([
        'stage_id' => 39,
        'name' => 'Dulces y postres tradicionales',
        'total_activity' => 600000,
        'start_date' => '2024-09-12',
        'end_date' => '2024-09-12',
        'description' => 'Degustación de aplanchados, panelitas de leche y más.',
    ]);

    Activity::create([
        'stage_id' => 40,
        'name' => 'Caminata por el bosque húmedo',
        'total_activity' => 900000,
        'start_date' => '2024-07-05',
        'end_date' => '2024-07-05',
        'description' => 'Sendero guiado con explicación de flora y fauna local.',
    ]);

    Activity::create([
        'stage_id' => 40,
        'name' => 'Alimentación consciente en ecohostal',
        'total_activity' => 800000,
        'start_date' => '2024-07-06',
        'end_date' => '2024-07-06',
        'description' => 'Comida vegana con ingredientes locales y talleres de cocina saludable.',
    ]);

    Activity::create([
        'stage_id' => 40,
        'name' => 'Yoga al amanecer',
        'total_activity' => 800000,
        'start_date' => '2024-07-06',
        'end_date' => '2024-07-06',
        'description' => 'Sesión de yoga en deck de madera frente a la selva.',
    ]);

    Activity::create([
        'stage_id' => 41,
        'name' => 'Meditación guiada y silencio digital',
        'total_activity' => 1000000,
        'start_date' => '2024-07-07',
        'end_date' => '2024-07-07',
        'description' => 'Práctica silenciosa con instructor, sin uso de dispositivos.',
    ]);

    Activity::create([
        'stage_id' => 41,
        'name' => 'Masaje con aceites esenciales',
        'total_activity' => 1100000,
        'start_date' => '2024-07-08',
        'end_date' => '2024-07-08',
        'description' => 'Sesión de relajación profunda con técnicas holísticas.',
    ]);

    Activity::create([
        'stage_id' => 41,
        'name' => 'Lectura en hamacas y journaling',
        'total_activity' => 900000,
        'start_date' => '2024-07-08',
        'end_date' => '2024-07-08',
        'description' => 'Tiempo libre para introspección con vistas naturales.',
    ]);

    Activity::create([
        'stage_id' => 42,
        'name' => 'Excursión a Pozo Azul',
        'total_activity' => 1000000,
        'start_date' => '2024-07-09',
        'end_date' => '2024-07-09',
        'description' => 'Baño en pozo natural con agua cristalina.',
    ]);

    Activity::create([
        'stage_id' => 42,
        'name' => 'Trekking al mirador de Los Pinos',
        'total_activity' => 900000,
        'start_date' => '2024-07-10',
        'end_date' => '2024-07-10',
        'description' => 'Subida al mirador con panorámica de la Sierra Nevada.',
    ]);

    Activity::create([
        'stage_id' => 42,
        'name' => 'Círculo de cierre del retiro',
        'total_activity' => 600000,
        'start_date' => '2024-07-10',
        'end_date' => '2024-07-10',
        'description' => 'Dinámica de despedida y gratitud con el grupo.',
    ]);
    }
}

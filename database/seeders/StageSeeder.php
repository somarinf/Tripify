<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Stage;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    Stage::create([
        'trip_id' => 1,
        'name' => 'Centro Histórico y Cultura Paisa',
        'destination' => 'Medellín Centro',
        'total_stage' => 600000,
        'start_date' => '2024-07-01',
        'end_date' => '2024-07-02',
        'description' => 'Recorrido cultural por el centro histórico, museos y comida típica.',
    ]);

    Stage::create([
        'trip_id' => 1,
        'name' => 'Comuna 13 y experiencias urbanas',
        'destination' => 'Comuna 13, Medellín',
        'total_stage' => 600000,
        'start_date' => '2024-07-03',
        'end_date' => '2024-07-04',
        'description' => 'Recorrido por arte urbano, historia social y experiencias callejeras.',
    ]);
    Stage::create([
        'trip_id' => 2,
        'name' => 'Ciudad Amurallada',
        'destination' => 'Cartagena',
        'total_stage' => 3600000,
        'start_date' => '2024-08-10',
        'end_date' => '2024-08-12',
        'description' => 'Recorrido a pie y fotos del atardecer entre murallas y balcones coloniales.',
    ]);

    Stage::create([
        'trip_id' => 2,
        'name' => 'Islas del Rosario',
        'destination' => 'Archipiélago Islas del Rosario',
        'total_stage' => 3600000,
        'start_date' => '2024-08-13',
        'end_date' => '2024-08-15',
        'description' => 'Excursión en lancha, snorkel, y playas cristalinas.',
    ]);

    Stage::create([
        'trip_id' => 3,
        'name' => 'Descubriendo Salento',
        'destination' => 'Salento, Quindío',
        'total_stage' => 1800000,
        'start_date' => '2024-09-05',
        'end_date' => '2024-09-06',
        'description' => 'Pueblo típico cafetero con coloridas fachadas y cultura local.',
    ]);

    Stage::create([
        'trip_id' => 3,
        'name' => 'Senderismo en el Valle del Cocora',
        'destination' => 'Valle del Cocora',
        'total_stage' => 1802000,
        'start_date' => '2024-09-07',
        'end_date' => '2024-09-08',
        'description' => 'Paisajes montañosos, palmas de cera y naturaleza pura.',
    ]);

    Stage::create([
        'trip_id' => 4,
        'name' => 'Explorando la Laguna de Otún',
        'destination' => 'Parque Nacional Natural Los Nevados',
        'total_stage' => 4400000,
        'start_date' => '2024-06-20',
        'end_date' => '2024-06-25',
        'description' => 'Trekking por senderos de páramo hasta la laguna.',
    ]);

    Stage::create([
        'trip_id' => 4,
        'name' => 'Ascenso al Nevado del Ruíz',
        'destination' => 'Nevado del Ruíz',
        'total_stage' => 4400000,
        'start_date' => '2024-06-26',
        'end_date' => '2024-06-30',
        'description' => 'Ruta de alta montaña con guía especializado y equipo.',
    ]);

    Stage::create([
        'trip_id' => 5,
        'name' => 'Aventura en el Parque Tayrona',
        'destination' => 'Parque Tayrona',
        'total_stage' => 3000000,
        'start_date' => '2024-07-18',
        'end_date' => '2024-07-20',
        'description' => 'Exploración de senderos, playas y naturaleza tropical.',
    ]);

    Stage::create([
        'trip_id' => 5,
        'name' => 'Descanso en Taganga',
        'destination' => 'Taganga',
        'total_stage' => 3000000,
        'start_date' => '2024-07-21',
        'end_date' => '2024-07-22',
        'description' => 'Relajación en la playa, snorkel y ambiente local.',
    ]);

    Stage::create([
        'trip_id' => 6,
        'name' => 'Descubriendo Barichara',
        'destination' => 'Barichara',
        'total_stage' => 1900000,
        'start_date' => '2024-05-10',
        'end_date' => '2024-05-11',
        'description' => 'Recorrido histórico por las calles empedradas y miradores.',
    ]);

    Stage::create([
        'trip_id' => 6,
        'name' => 'Sendero hasta Guane',
        'destination' => 'Camino Real Barichara - Guane',
        'total_stage' => 1900000,
        'start_date' => '2024-05-12',
        'end_date' => '2024-05-13',
        'description' => 'Caminata ecológica entre montañas y pueblos tradicionales.',
    ]);

    Stage::create([
        'trip_id' => 7,
        'name' => 'Aventura en Leticia',
        'destination' => 'Leticia',
        'total_stage' => 6000000,
        'start_date' => '2024-11-01',
        'end_date' => '2024-11-05',
        'description' => 'Primer contacto con la selva y recorridos guiados en la capital del Amazonas.',
    ]);

    Stage::create([
        'trip_id' => 7,
        'name' => 'Expedición al río Amazonas',
        'destination' => 'Río Amazonas',
        'total_stage' => 6000000,
        'start_date' => '2024-11-06',
        'end_date' => '2024-11-10',
        'description' => 'Navegación, avistamiento de fauna y visita a comunidades indígenas.',
    ]);

    Stage::create([
        'trip_id' => 8,
        'name' => 'Centro histórico y museos',
        'destination' => 'La Candelaria, Bogotá',
        'total_stage' => 2200000,
        'start_date' => '2024-10-05',
        'end_date' => '2024-10-07',
        'description' => 'Recorrido por museos, arquitectura colonial y plazas emblemáticas.',
    ]);

    Stage::create([
        'trip_id' => 8,
        'name' => 'Naturaleza y miradores',
        'destination' => 'Monserrate y alrededores',
        'total_stage' => 2200000,
        'start_date' => '2024-10-08',
        'end_date' => '2024-10-09',
        'description' => 'Exploración de espacios verdes y vistas panorámicas de la ciudad.',
    ]);

    Stage::create([
        'trip_id' => 9,
        'name' => 'Ascenso a El Crucero',
        'destination' => 'Tunja - Paipa',
        'total_stage' => 1500000,
        'start_date' => '2024-09-20',
        'end_date' => '2024-09-22',
        'description' => 'Ruta exigente entre montañas con vistas panorámicas.',
    ]);

    Stage::create([
        'trip_id' => 9,
        'name' => 'Ruta cicloturística Lago de Tota',
        'destination' => 'Aquitania - Lago de Tota',
        'total_stage' => 1500000,
        'start_date' => '2024-09-23',
        'end_date' => '2024-09-24',
        'description' => 'Recorrido junto al lago más grande de Colombia.',
    ]);

    Stage::create([
        'trip_id' => 10,
        'name' => 'Exploración del Cuzco',
        'destination' => 'Tatacoa - Zona Roja',
        'total_stage' => 1960000,
        'start_date' => '2024-08-01',
        'end_date' => '2024-08-02',
        'description' => 'Caminatas por el desierto rojizo y observación de fósiles.',
    ]);

    Stage::create([
        'trip_id' => 10,
        'name' => 'Cielo estrellado en la Tatacoa',
        'destination' => 'Tatacoa - Zona Gris',
        'total_stage' => 1960000,
        'start_date' => '2024-08-03',
        'end_date' => '2024-08-04',
        'description' => 'Astroturismo y paisajes áridos para fotografía nocturna.',
    ]);

    Stage::create([
        'trip_id' => 11,
        'name' => 'Aventura acuática',
        'destination' => 'Río Fonce, San Gil',
        'total_stage' => 2700000,
        'start_date' => '2024-07-11',
        'end_date' => '2024-07-12',
        'description' => 'Emoción en el agua y actividades guiadas con seguridad.',
    ]);

    Stage::create([
        'trip_id' => 11,
        'name' => 'Turismo extremo en tierra',
        'destination' => 'Cueva del Indio y alrededores',
        'total_stage' => 2700000,
        'start_date' => '2024-07-13',
        'end_date' => '2024-07-13',
        'description' => 'Exploración de cavernas y adrenalina en tierra firme.',
    ]);

    Stage::create([
        'trip_id' => 12,
        'name' => 'Centro histórico y museos',
        'destination' => 'Villa de Leyva',
        'total_stage' => 1600000,
        'start_date' => '2024-06-08',
        'end_date' => '2024-06-09',
        'description' => 'Caminatas culturales por las calles coloniales y museos locales.',
    ]);

    Stage::create([
        'trip_id' => 12,
        'name' => 'Feria y naturaleza',
        'destination' => 'Villa de Leyva - alrededores',
        'total_stage' => 1600000,
        'start_date' => '2024-06-10',
        'end_date' => '2024-06-10',
        'description' => 'Artesanías, naturaleza y experiencia local.',
    ]);

    Stage::create([
        'trip_id' => 13,
        'name' => 'Sabor y cultura caleña',
        'destination' => 'Cali centro',
        'total_stage' => 2400000,
        'start_date' => '2024-12-02',
        'end_date' => '2024-12-04',
        'description' => 'Gastronomía local, historia y la vibra urbana de Cali.',
    ]);

    Stage::create([
        'trip_id' => 13,
        'name' => 'Ritmo y naturaleza',
        'destination' => 'Cali y alrededores',
        'total_stage' => 2400000,
        'start_date' => '2024-12-05',
        'end_date' => '2024-12-06',
        'description' => 'Baile, cascadas cercanas y paisajes tropicales.',
    ]);

    Stage::create([
        'trip_id' => 14,
        'name' => 'Cabo de la Vela',
        'destination' => 'Cabo de la Vela',
        'total_stage' => 3866667,
        'start_date' => '2024-07-25',
        'end_date' => '2024-07-26',
        'description' => 'Paisajes desérticos junto al mar Caribe y atardeceres mágicos.',
    ]);

    Stage::create([
        'trip_id' => 14,
        'name' => 'Punta Gallinas',
        'destination' => 'Punta Gallinas',
        'total_stage' => 3866667,
        'start_date' => '2024-07-27',
        'end_date' => '2024-07-28',
        'description' => 'El punto más norte de Sudamérica y dunas majestuosas.',
    ]);

    Stage::create([
        'trip_id' => 14,
        'name' => 'Cultura y comunidad Wayuu',
        'destination' => 'Uribia y rancherías',
        'total_stage' => 3866666,
        'start_date' => '2024-07-29',
        'end_date' => '2024-07-30',
        'description' => 'Intercambio cultural, artesanía y gastronomía ancestral.',
    ]);

    Stage::create([
        'trip_id' => 15,
        'name' => 'Cañón del Río Claro',
        'destination' => 'Reserva Natural Río Claro',
        'total_stage' => 2100000,
        'start_date' => '2024-06-14',
        'end_date' => '2024-06-15',
        'description' => 'Naturaleza exuberante, actividades acuáticas y senderismo en el bosque.',
    ]);

    Stage::create([
        'trip_id' => 15,
        'name' => 'Aventura subterránea',
        'destination' => 'Caverna de los Guácharos',
        'total_stage' => 2100000,
        'start_date' => '2024-06-16',
        'end_date' => '2024-06-16',
        'description' => 'Exploración guiada por cavernas con historia natural y ríos internos.',
    ]);

    Stage::create([
        'trip_id' => 16,
        'name' => 'Exploración del pueblo',
        'destination' => 'Jardín, Antioquia',
        'total_stage' => 2300000,
        'start_date' => '2024-05-22',
        'end_date' => '2024-05-23',
        'description' => 'Caminatas, arquitectura colonial y vida local.',
    ]);

    Stage::create([
        'trip_id' => 16,
        'name' => 'Naturaleza y gastronomía',
        'destination' => 'Jardín y alrededores',
        'total_stage' => 2300000,
        'start_date' => '2024-05-24',
        'end_date' => '2024-05-24',
        'description' => 'Actividades al aire libre y comida típica paisa.',
    ]);

    Stage::create([
        'trip_id' => 17,
        'name' => 'Aclimatación y llegada',
        'destination' => 'Güicán y El Cocuy',
        'total_stage' => 4000000,
        'start_date' => '2024-10-15',
        'end_date' => '2024-10-16',
        'description' => 'Días iniciales para aclimatarse al clima y conocer el pueblo.',
    ]);

    Stage::create([
        'trip_id' => 17,
        'name' => 'Ruta Ritacuba Blanco',
        'destination' => 'Nevado Ritacuba Blanco',
        'total_stage' => 4200000,
        'start_date' => '2024-10-17',
        'end_date' => '2024-10-19',
        'description' => 'Ascenso hacia el glaciar y caminatas de alta montaña con guía.',
    ]);

    Stage::create([
        'trip_id' => 17,
        'name' => 'Ruta Lagunillas y regreso',
        'destination' => 'Lagunillas y alrededores',
        'total_stage' => 4200000,
        'start_date' => '2024-10-20',
        'end_date' => '2024-10-21',
        'description' => 'Trekking más ligero, observación de lagunas y retorno.',
    ]);

    Stage::create([
        'trip_id' => 18,
        'name' => 'Tour exprés por Sopó',
        'destination' => 'Sopó, Cundinamarca',
        'total_stage' => 2600000,
        'start_date' => '2024-06-01',
        'end_date' => '2024-06-02',
        'description' => 'Recorrido por paisajes rurales, gastronomía y actividades al aire libre.',
    ]);

    Stage::create([
        'trip_id' => 19,
        'name' => 'Centro histórico y cultura',
        'destination' => 'Popayán',
        'total_stage' => 2500000,
        'start_date' => '2024-09-10',
        'end_date' => '2024-09-11',
        'description' => 'Recorrido por monumentos, iglesias y arquitectura colonial.',
    ]);

    Stage::create([
        'trip_id' => 19,
        'name' => 'Ruta gastronómica',
        'destination' => 'Popayán',
        'total_stage' => 2500000,
        'start_date' => '2024-09-12',
        'end_date' => '2024-09-12',
        'description' => 'Experiencias culinarias y tradiciones del Cauca.',
    ]);

    Stage::create([
        'trip_id' => 20,
        'name' => 'Bienvenida y conexión con la naturaleza',
        'destination' => 'Minca, Sierra Nevada',
        'total_stage' => 2500000,
        'start_date' => '2024-07-05',
        'end_date' => '2024-07-06',
        'description' => 'Adaptación al ambiente selvático, caminatas suaves y alimentación consciente.',
    ]);

    Stage::create([
        'trip_id' => 20,
        'name' => 'Terapias y relajación',
        'destination' => 'Eco-lodge en la montaña',
        'total_stage' => 3000000,
        'start_date' => '2024-07-07',
        'end_date' => '2024-07-08',
        'description' => 'Sesiones de meditación, masajes y silencio digital.',
    ]);

    Stage::create([
        'trip_id' => 20,
        'name' => 'Exploración y despedida',
        'destination' => 'Cascadas y miradores',
        'total_stage' => 2500000,
        'start_date' => '2024-07-09',
        'end_date' => '2024-07-10',
        'description' => 'Rutas de montaña, baños en cascadas y cierre grupal del retiro.',
    ]);

    }
}

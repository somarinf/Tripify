<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Trip;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trip::create([
            'name' => 'Aventura en Medellín',
            'total' => 1200000,
            'start_date' => '2024-07-01',
            'end_date' => '2024-07-05',
            'description' => 'Exploración urbana, gastronomía y cultura paisa.',
        ]);

        Trip::create([
            'name' => 'Viaje a Cartagena',
            'total' => 7200000,
            'start_date' => '2024-08-10',
            'end_date' => '2024-08-15',
            'description' => 'Playas, murallas coloniales y fiesta.',
        ]);

        Trip::create([
            'name' => 'Eje cafetero express',
            'total' => 3602000,
            'start_date' => '2024-09-05',
            'end_date' => '2024-09-08',
            'description' => null,
        ]);

        Trip::create([
            'name' => 'Trekking en los Andes',
            'total' => 8800000,
            'start_date' => '2024-06-20',
            'end_date' => '2024-06-30',
            'description' => 'Senderismo de altura y conexión con la naturaleza.',
        ]);

        Trip::create([
            'name' => 'Playas de Santa Marta',
            'total' => 6000000,
            'start_date' => '2024-07-18',
            'end_date' => '2024-07-22',
            'description' => 'Relax en la costa Caribe con amigos.',
        ]);

        Trip::create([
            'name' => 'Caminata por Barichara',
            'total' => 3800000,
            'start_date' => '2024-05-10',
            'end_date' => '2024-05-13',
            'description' => 'Arquitectura colonial y senderos ecológicos.',
        ]);

        Trip::create([
            'name' => 'Vacaciones en el Amazonas',
            'total' => 12000000,
            'start_date' => '2024-11-01',
            'end_date' => '2024-11-10',
            'description' => null,
        ]);

        Trip::create([
            'name' => 'Tour por Bogotá',
            'total' => 4400000,
            'start_date' => '2024-10-05',
            'end_date' => '2024-10-09',
            'description' => 'Museos, historia y gastronomía capitalina.',
        ]);

        Trip::create([
            'name' => 'Reto ciclístico Boyacá',
            'total' => 3000000,
            'start_date' => '2024-09-20',
            'end_date' => '2024-09-24',
            'description' => 'Ciclismo en la montaña con amigos.',
        ]);

        Trip::create([
            'name' => 'Desierto de la Tatacoa',
            'total' => 3920000,
            'start_date' => '2024-08-01',
            'end_date' => '2024-08-04',
            'description' => 'Cielo estrellado y fotografía nocturna.',
        ]);

        Trip::create([
            'name' => 'Rafting en San Gil',
            'total' => 5400000,
            'start_date' => '2024-07-11',
            'end_date' => '2024-07-13',
            'description' => null,
        ]);

        Trip::create([
            'name' => 'Paseo por Villa de Leyva',
            'total' => 3200000,
            'start_date' => '2024-06-08',
            'end_date' => '2024-06-10',
            'description' => 'Centro histórico y feria artesanal.',
        ]);

        Trip::create([
            'name' => 'Escape a Cali',
            'total' => 4800000,
            'start_date' => '2024-12-02',
            'end_date' => '2024-12-06',
            'description' => 'Salsa, clima cálido y comida valluna.',
        ]);

        Trip::create([
            'name' => 'Excursión a La Guajira',
            'total' => 11600000,
            'start_date' => '2024-07-25',
            'end_date' => '2024-07-30',
            'description' => 'Cultura Wayuu y paisajes desérticos.',
        ]);

        Trip::create([
            'name' => 'Río Claro y sus cavernas',
            'total' => 4200000,
            'start_date' => '2024-06-14',
            'end_date' => '2024-06-16',
            'description' => null,
        ]);

        Trip::create([
            'name' => 'Jardín Antioqueño',
            'total' => 4600000,
            'start_date' => '2024-05-22',
            'end_date' => '2024-05-24',
            'description' => 'Pueblos con encanto y gastronomía paisa.',
        ]);

        Trip::create([
            'name' => 'Parque Nacional El Cocuy',
            'total' => 12400000,
            'start_date' => '2024-10-15',
            'end_date' => '2024-10-21',
            'description' => 'Alta montaña, nieve y aventura.',
        ]);

        Trip::create([
            'name' => 'Sopó y alrededores',
            'total' => 2600000,
            'start_date' => '2024-06-01',
            'end_date' => '2024-06-02',
            'description' => null,
        ]);

        Trip::create([
            'name' => 'Gastronomía en Popayán',
            'total' => 5000000,
            'start_date' => '2024-09-10',
            'end_date' => '2024-09-12',
            'description' => 'Sabores tradicionales y arquitectura blanca.',
        ]);

        Trip::create([
            'name' => 'Retiro ecológico en Minca',
            'total' => 8000000,
            'start_date' => '2024-07-05',
            'end_date' => '2024-07-10',
            'description' => null,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TripComment;

class TripCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Relacionar comentarios con viajes de manera lógica
        // Los primeros comentarios van a los primeros viajes y así sucesivamente
        $tripComments = [
            // Aventura en Medellín (trip_id: 1)
            ['comment_id' => 1, 'trip_id' => 1],  // ¡Este viaje fue increíble!
            ['comment_id' => 8, 'trip_id' => 1],  // Las actividades estuvieron geniales.
            
            // Viaje a Cartagena (trip_id: 2)
            ['comment_id' => 2, 'trip_id' => 2],  // Muy buena organización, gracias.
            ['comment_id' => 5, 'trip_id' => 2],  // Los paisajes fueron inolvidables.
            ['comment_id' => 19, 'trip_id' => 2], // Todo salió mejor de lo que esperaba.
            
            // Eje cafetero express (trip_id: 3)
            ['comment_id' => 14, 'trip_id' => 3], // Una gran forma de conocer Colombia.
            ['comment_id' => 10, 'trip_id' => 3], // Amo este tipo de planes.
            
            // Trekking en los Andes (trip_id: 4)
            ['comment_id' => 3, 'trip_id' => 4],  // Me encantó la etapa de montaña.
            ['comment_id' => 9, 'trip_id' => 4],  // Fue una experiencia muy completa.
            ['comment_id' => 20, 'trip_id' => 4], // Inolvidable de principio a fin.
            
            // Playas de Santa Marta (trip_id: 5)
            ['comment_id' => 4, 'trip_id' => 5],  // Recomiendo visitar con amigos.
            ['comment_id' => 6, 'trip_id' => 5],  // Perfecto para desconectarse.
            
            // Caminata por Barichara (trip_id: 6)
            ['comment_id' => 13, 'trip_id' => 6], // El itinerario estuvo muy bien armado.
            ['comment_id' => 16, 'trip_id' => 6], // Los comentarios de otros viajeros ayudaron mucho.
            
            // Vacaciones en el Amazonas (trip_id: 7)
            ['comment_id' => 7, 'trip_id' => 7],  // Volvería sin pensarlo dos veces.
            ['comment_id' => 15, 'trip_id' => 7], // ¡Volveré a usar esta app para mi próximo viaje!
            
            // Tour por Bogotá (trip_id: 8)
            ['comment_id' => 11, 'trip_id' => 8], // Un viaje corto pero muy valioso.
            ['comment_id' => 17, 'trip_id' => 8], // Muy satisfecho con todo el proceso.
            
            // Reto ciclístico Boyacá (trip_id: 9)
            ['comment_id' => 12, 'trip_id' => 9], // Gracias por las sugerencias personalizadas.
            
            // Desierto de la Tatacoa (trip_id: 10)
            ['comment_id' => 18, 'trip_id' => 10], // Me hubiera gustado más tiempo en el destino.
        ];

        foreach ($tripComments as $tripComment) {
            TripComment::create($tripComment);
        }
    }
}

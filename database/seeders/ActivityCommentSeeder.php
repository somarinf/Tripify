<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ActivityComment;

class ActivityCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Relacionar comentarios con actividades de manera lógica
        $activityComments = [
            // Actividades de Centro Histórico y Cultura Paisa (activities 1-3)
            ['comment_id' => 1, 'activity_id' => 1],  // ¡Este viaje fue increíble!
            ['comment_id' => 14, 'activity_id' => 2], // Una gran forma de conocer Colombia.
            ['comment_id' => 11, 'activity_id' => 3], // Un viaje corto pero muy valioso.
            
            // Actividades de Comuna 13 (activities 4-6)
            ['comment_id' => 8, 'activity_id' => 4],  // Las actividades estuvieron geniales.
            ['comment_id' => 10, 'activity_id' => 5], // Amo este tipo de planes.
            ['comment_id' => 17, 'activity_id' => 6], // Muy satisfecho con todo el proceso.
            
            // Actividades de Cartagena (activities 7-9)
            ['comment_id' => 2, 'activity_id' => 7],  // Muy buena organización, gracias.
            ['comment_id' => 5, 'activity_id' => 8],  // Los paisajes fueron inolvidables.
            ['comment_id' => 19, 'activity_id' => 9], // Todo salió mejor de lo que esperaba.
            
            // Actividades de Islas del Rosario (activities 10-12)
            ['comment_id' => 6, 'activity_id' => 10], // Perfecto para desconectarse.
            ['comment_id' => 4, 'activity_id' => 11], // Recomiendo visitar con amigos.
            ['comment_id' => 7, 'activity_id' => 12], // Volvería sin pensarlo dos veces.
            
            // Actividades del Eje Cafetero (activities 13-18)
            ['comment_id' => 9, 'activity_id' => 13], // Fue una experiencia muy completa.
            ['comment_id' => 13, 'activity_id' => 14], // El itinerario estuvo muy bien armado.
            ['comment_id' => 16, 'activity_id' => 15], // Los comentarios de otros viajeros ayudaron mucho.
            ['comment_id' => 12, 'activity_id' => 16], // Gracias por las sugerencias personalizadas.
            ['comment_id' => 15, 'activity_id' => 17], // ¡Volveré a usar esta app para mi próximo viaje!
            ['comment_id' => 18, 'activity_id' => 18], // Me hubiera gustado más tiempo en el destino.
            
            // Actividades de Trekking en los Andes (activities 19-24)
            ['comment_id' => 3, 'activity_id' => 19], // Me encantó la etapa de montaña.
            ['comment_id' => 20, 'activity_id' => 20], // Inolvidable de principio a fin.
        ];

        foreach ($activityComments as $activityComment) {
            ActivityComment::create($activityComment);
        }
    }
}

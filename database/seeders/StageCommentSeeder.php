<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StageComment;

class StageCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Relacionar comentarios con etapas (stages) de manera lógica
        $stageComments = [
            // Etapas de Aventura en Medellín (stages 1-2)
            ['comment_id' => 1, 'stage_id' => 1],  // ¡Este viaje fue increíble!
            ['comment_id' => 8, 'stage_id' => 2],  // Las actividades estuvieron geniales.
            
            // Etapas de Viaje a Cartagena (stages 3-4)
            ['comment_id' => 2, 'stage_id' => 3],  // Muy buena organización, gracias.
            ['comment_id' => 5, 'stage_id' => 4],  // Los paisajes fueron inolvidables.
            
            // Etapas de Eje cafetero express (stages 5-6)
            ['comment_id' => 14, 'stage_id' => 5], // Una gran forma de conocer Colombia.
            ['comment_id' => 10, 'stage_id' => 6], // Amo este tipo de planes.
            
            // Etapas de Trekking en los Andes (stages 7-10)
            ['comment_id' => 3, 'stage_id' => 7],  // Me encantó la etapa de montaña.
            ['comment_id' => 9, 'stage_id' => 8],  // Fue una experiencia muy completa.
            ['comment_id' => 20, 'stage_id' => 9], // Inolvidable de principio a fin.
            ['comment_id' => 15, 'stage_id' => 10], // ¡Volveré a usar esta app para mi próximo viaje!
            
            // Etapas de Playas de Santa Marta (stages 11-12)
            ['comment_id' => 4, 'stage_id' => 11], // Recomiendo visitar con amigos.
            ['comment_id' => 6, 'stage_id' => 12], // Perfecto para desconectarse.
            
            // Etapas de Caminata por Barichara (stages 13-14)
            ['comment_id' => 13, 'stage_id' => 13], // El itinerario estuvo muy bien armado.
            ['comment_id' => 16, 'stage_id' => 14], // Los comentarios de otros viajeros ayudaron mucho.
            
            // Etapas de Vacaciones en el Amazonas (stages 15-19)
            ['comment_id' => 7, 'stage_id' => 15],  // Volvería sin pensarlo dos veces.
            ['comment_id' => 11, 'stage_id' => 16], // Un viaje corto pero muy valioso.
            ['comment_id' => 17, 'stage_id' => 17], // Muy satisfecho con todo el proceso.
            
            // Etapas adicionales con comentarios restantes
            ['comment_id' => 12, 'stage_id' => 18], // Gracias por las sugerencias personalizadas.
            ['comment_id' => 18, 'stage_id' => 19], // Me hubiera gustado más tiempo en el destino.
            ['comment_id' => 19, 'stage_id' => 20], // Todo salió mejor de lo que esperaba.
        ];

        foreach ($stageComments as $stageComment) {
            StageComment::create($stageComment);
        }
    }
}

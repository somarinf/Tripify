<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use Illuminate\Support\Carbon;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        $comments = [
            '¡Este viaje fue increíble!',
            'Muy buena organización, gracias.',
            'Me encantó la etapa de montaña.',
            'Recomiendo visitar con amigos.',
            'Los paisajes fueron inolvidables.',
            'Perfecto para desconectarse.',
            'Volvería sin pensarlo dos veces.',
            'Las actividades estuvieron geniales.',
            'Fue una experiencia muy completa.',
            'Amo este tipo de planes.',
            'Un viaje corto pero muy valioso.',
            'Gracias por las sugerencias personalizadas.',
            'El itinerario estuvo muy bien armado.',
            'Una gran forma de conocer Colombia.',
            '¡Volveré a usar esta app para mi próximo viaje!',
            'Los comentarios de otros viajeros ayudaron mucho.',
            'Muy satisfecho con todo el proceso.',
            'Me hubiera gustado más tiempo en el destino.',
            'Todo salió mejor de lo que esperaba.',
            'Inolvidable de principio a fin.',
        ];

        foreach (range(1, 20) as $i) {
            $comment = new Comment();
            $comment->user_id = $i;
            $comment->content = $comments[$i - 1];
            $comment->commented_at = Carbon::now()->subDays(21 - $i);
            $comment->save();
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notification;

class NotificationSeeder extends Seeder
{
    public function run(): void
    {
        $notifications = [
            'Bienvenido a tu nueva aventura',
            'Tu viaje ha sido confirmado',
            'Nueva recomendación de etapa',
            'Recuerda completar tu perfil',
            'Revisa los comentarios en tu viaje',
            'Tu etapa fue actualizada con éxito',
            '¡Nuevas actividades añadidas!',
            'Tu viaje está por comenzar',
            'Recibe sugerencias personalizadas',
            'Alguien comentó en tu actividad',
            'Revisa tu itinerario actualizado',
            'Nuevo mensaje de planificación',
            'Ideas para tu próximo destino',
            'Tu viaje fue compartido con éxito',
            'Un amigo se unió a tu viaje',
            'Etapa marcada como completada',
            'Nuevo recordatorio de planificación',
            'Actividad cancelada, revisa detalles',
            'Nuevo contenido en tu feed de viajes',
            'Gracias por confiar en nosotros',
        ];

        foreach (range(1, 20) as $i) {
            Notification::create([
                'user_id' => $i,
                'name' => $notifications[$i - 1],
                'description' => 'Notificación automática generada para mantenerte al tanto de tu planificación de viajes.',
                'is_read' => false,
            ]);
        }
    }
}


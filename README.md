# Tripify

Aplicación web para la **planificación colaborativa de viajes**, desarrollada con el framework **Laravel** (PHP) como proyecto semestral de Ingeniería de Software I.

Tripify permite a los usuarios crear viajes, organizarlos en etapas y actividades, llevar el control de costos, invitar participantes con distintos roles, comentar y recibir notificaciones automáticas de los cambios.

## Características principales

- **Autenticación y sesión:** registro, verificación de email, inicio y cierre de sesión.
- **Gestión de perfil:** actualización de datos y eliminación de cuenta.
- **Administración:** gestión de usuarios y roles (rol *Usuario* asignado por defecto).
- **Viajes:** crear, editar, eliminar (en cascada), listar y exportar a PDF.
- **Participantes:** invitar y eliminar participantes; permisos según rol (organizador / participante).
- **Etapas y actividades:** organización jerárquica del itinerario, con tipos de actividad.
- **Costos:** registro de costos con recálculo automático de totales (actividad → etapa → viaje).
- **Comentarios y notificaciones:** comunicación entre participantes y avisos automáticos de cambios.

## Stack tecnológico

- **Backend / Frontend:** Laravel (Blade), PHP 8.x
- **Base de datos:** MySQL
- **Exportación PDF:** barryvdh/laravel-dompdf

## Requisitos

- PHP >= 8.0
- Composer
- MySQL

## Instalación

```bash
composer install
cp .env.example .env        # configurar credenciales de BD
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

La aplicación quedará disponible en `http://127.0.0.1:8000`.

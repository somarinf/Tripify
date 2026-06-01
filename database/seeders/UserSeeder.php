<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => 2,
            'name' => 'Valentina Pérez',
            'email' => 'valentina1@gmail.com',
            'username' => 'valepz1',
            'email_verified_at' => now(),
            'password' => bcrypt('password123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Mateo Rodríguez',
            'email' => 'mateo2@hotmail.com',
            'username' => 'mateo_r2',
            'email_verified_at' => now(),
            'password' => bcrypt('password123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Isabella Gómez',
            'email' => 'isabella3@gmail.com',
            'username' => 'isagz3',
            'email_verified_at' => null,
            'password' => bcrypt('password123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Santiago Torres',
            'email' => 'santiago4@hotmail.com',
            'username' => 'santi_t4',
            'email_verified_at' => now(),
            'password' => bcrypt('password123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Camila López',
            'email' => 'camila5@gmail.com',
            'username' => 'camilal5',
            'email_verified_at' => null,
            'password' => bcrypt('password123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Emilio Castro',
            'email' => 'emilio6@hotmail.com',
            'username' => 'emilioc6',
            'email_verified_at' => now(),
            'password' => bcrypt('password123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Natalia Ríos',
            'email' => 'natalia7@gmail.com',
            'username' => 'natalia_r7',
            'email_verified_at' => now(),
            'password' => bcrypt('password123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Tomás Mejía',
            'email' => 'tomas8@hotmail.com',
            'username' => 'tomasmj8',
            'email_verified_at' => null,
            'password' => bcrypt('password123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Sara Navarro',
            'email' => 'sara9@gmail.com',
            'username' => 'saran9',
            'email_verified_at' => now(),
            'password' => bcrypt('password123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Juan Esteban',
            'email' => 'juan10@hotmail.com',
            'username' => 'juanest10',
            'email_verified_at' => null,
            'password' => bcrypt('password123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Daniela Salazar',
            'email' => 'daniela11@gmail.com',
            'username' => 'dani_s11',
            'email_verified_at' => now(),
            'password' => bcrypt('password123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Samuel Vargas',
            'email' => 'samuel12@hotmail.com',
            'username' => 'samuelv12',
            'email_verified_at' => now(),
            'password' => bcrypt('password123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Luciana Herrera',
            'email' => 'luciana13@gmail.com',
            'username' => 'luci_h13',
            'email_verified_at' => null,
            'password' => bcrypt('password123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Andrés Castillo',
            'email' => 'andres14@hotmail.com',
            'username' => 'andresc14',
            'email_verified_at' => now(),
            'password' => bcrypt('password123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Paula Giraldo',
            'email' => 'paula15@gmail.com',
            'username' => 'paulag15',
            'email_verified_at' => null,
            'password' => bcrypt('password123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Felipe Ramírez',
            'email' => 'felipe16@hotmail.com',
            'username' => 'feliper16',
            'email_verified_at' => now(),
            'password' => bcrypt('password123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Mariana Duque',
            'email' => 'mariana17@gmail.com',
            'username' => 'marianad17',
            'email_verified_at' => now(),
            'password' => bcrypt('password123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Julián Romero',
            'email' => 'julian18@hotmail.com',
            'username' => 'julianr18',
            'email_verified_at' => null,
            'password' => bcrypt('password123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Valeria Cárdenas',
            'email' => 'valeria19@gmail.com',
            'username' => 'valec19',
            'email_verified_at' => now(),
            'password' => bcrypt('password123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Sebastián Pineda',
            'email' => 'sebastian20@hotmail.com',
            'username' => 'sebasp20',
            'email_verified_at' => null,
            'password' => bcrypt('password123'),
            'remember_token' => Str::random(10),
        ]);
    }
}

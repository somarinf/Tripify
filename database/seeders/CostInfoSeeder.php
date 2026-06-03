<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CostInfo;

class CostInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Entrada museo', 'Tour gastronómico', 'Guía turístico', 'Transporte local', 'Cena temática',
            'Almuerzo típico', 'Equipo de snorkel', 'Paseo en lancha', 'Hospedaje', 'Boleto de entrada',
            'Clase de cocina', 'Tour ecológico', 'Bicicleta', 'Rafting', 'Kayak',
            'Parapente', 'Masaje', 'Yoga', 'Taller artesanal', 'Fotografía',
            'Café tour', 'Excursión', 'Show musical', 'Degustación', 'Transporte privado',
            'Entradas monumentos', 'Trekking', 'Campamento', 'Guía de montaña', 'Seguro de viaje'
        ];

        for ($i = 1; $i <= 30; $i++) {
            CostInfo::create([
                'name' => $names[$i - 1],
                'cost_value' => rand(50000, 2000000),
            ]);
        }
    }
}

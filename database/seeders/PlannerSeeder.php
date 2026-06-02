<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Planner;

class PlannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['organizador', 'participante'];
        $userCount = 20; // Según tu UserSeeder
        $tripCount = 20; // Según tu TripSeeder

        $i = 1;
        foreach (range(1, 15) as $userId) {
            foreach (range(1, 2) as $j) {
                $tripId = (($userId - 1) * 2 + $j);
                if ($tripId > $tripCount) break;
                Planner::create([
                    'user_id' => $userId,
                    'trip_id' => $tripId,
                    'rol' => $roles[$i % 2],
                ]);
                $i++;
                if ($i > 30) break 2;
            }
        }

        // Si faltan registros para llegar a 30, los completamos con combinaciones adicionales
        while ($i <= 30) {
            $userId = ($i % $userCount) + 1;
            $tripId = ($i % $tripCount) + 1;
            Planner::create([
                'user_id' => $userId,
                'trip_id' => $tripId,
                'rol' => $roles[$i % 2],
            ]);
            $i++;
        }
    }
}

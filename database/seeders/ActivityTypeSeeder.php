<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ActivityType;

class ActivityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'cultural', 'gastronómica', 'ecológica', 'urbana', 'aventura',
            'histórica', 'recreativa', 'deportiva', 'relajación', 'artística'
        ];

        for ($i = 1; $i <= 30; $i++) {
            ActivityType::create([
                'type' => $types[($i - 1) % count($types)],
                'activity_id' => $i,
            ]);
        }
    }
}

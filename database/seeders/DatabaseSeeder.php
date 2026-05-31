<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            TripSeeder::class,
            StageSeeder::class,
            ActivitySeeder::class,
            CostInfoSeeder::class,
            ActivityTypeSeeder::class,
            ActivityCostSeeder::class,
            PlannerSeeder::class,
            CommentSeeder::class,
            TripCommentSeeder::class,
            StageCommentSeeder::class,
            ActivitySeeder::class
        ]);
    }
}

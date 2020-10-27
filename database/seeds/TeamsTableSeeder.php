<?php

use Illuminate\Database\Seeder;
use App\Team;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'category_id' => 1,
            'name' => 'Kronus Voleibol',
            'description' => 'El Alto',
        ]);

        Team::create([
            'category_id' => 2,
            'name' => 'Panteras',
            'description' => 'El Alto',
        ]);

        Team::create([
            'category_id' => 4,
            'name' => 'Rockets',
            'description' => 'El Alto',
        ]);
    }
}

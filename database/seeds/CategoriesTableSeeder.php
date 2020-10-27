<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::create([
            'name' => 'Infantil Damas',
            'description' => 'de 7 a 15 años',
            'group' => 'A',
        ]);

        Category::create([
            'name' => 'Juvenil Damas',
            'description' => 'de 15 a 19 años',
            'group' => 'A',
        ]);

        Category::create([
            'name' => 'Mayor Damas',
            'description' => 'de 18 años hacia adelante',
            'group' => 'A',
        ]);

        Category::create([
            'name' => 'Infantil Varones',
            'description' => 'de 7 a 15 años',
            'group' => 'A',
        ]);

        Category::create([
            'name' => 'Juvenil Varones',
            'description' => 'de 15 a 19 años',
            'group' => 'A',
        ]);

        Category::create([
            'name' => 'Mayor Varones',
            'description' => 'de 18 años hacia adelante',
            'group' => 'A',
        ]);

    }
}

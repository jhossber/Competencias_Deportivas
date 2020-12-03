<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            //'role_id' => 1,
            'name' => 'Jose Bernal',
            'first_name' => 'Yujra',
            'last_name' => 'Charca',
            'email'=>'josy.bjos@gmail.com',
            'password'=>bcrypt(12345678),
        ]);

        User::create([
            //'role_id' => 1,
            'name' => 'Magos',
            'first_name' => 'Delegado',
            'last_name' => 'Delegado',
            'email'=>'m@magui.com',
            'password'=>bcrypt(12345678),
        ]);
    }
}

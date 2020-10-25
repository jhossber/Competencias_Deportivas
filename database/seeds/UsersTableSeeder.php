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
            'name' => 'Jose Bernal',
            'first_name' => 'Yujra',
            'last_name' => 'Charca',
            'email'=>'josy.bjos@gmail.com',
            'password'=>bcrypt(12345678),
        ]);
    }
}
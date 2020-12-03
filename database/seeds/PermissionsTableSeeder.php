<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
//use App\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Usuarios
        Permission::create(['name' => 'user.index']);
        Permission::create(['name' => 'user.create']);
        Permission::create(['name' => 'user.show']);
        Permission::create(['name' => 'user.edit']);
        Permission::create(['name' => 'user.state']);

        // Permisos de Jugadores
        Permission::create(['name' => 'player.index']);
        Permission::create(['name' => 'player.create']);
        Permission::create(['name' => 'player.show']);
        Permission::create(['name' => 'player.edit']);
        Permission::create(['name' => 'player.state']);

        // Permisos de Equipos
        Permission::create(['name' => 'team.index']);
        Permission::create(['name' => 'team.create']);
        Permission::create(['name' => 'team.show']);
        Permission::create(['name' => 'team.edit']);
        Permission::create(['name' => 'team.state']);

        // Permisos de Categorias
        Permission::create(['name' => 'category.index']);
        Permission::create(['name' => 'category.create']);
        Permission::create(['name' => 'category.show']);
        Permission::create(['name' => 'category.edit']);
        Permission::create(['name' => 'category.state']);

        // Permisos de Canchas
        Permission::create(['name' => 'place.index']);
        Permission::create(['name' => 'place.create']);
        Permission::create(['name' => 'place.show']);
        Permission::create(['name' => 'place.edit']);
        Permission::create(['name' => 'place.state']);

        // Permisos de Puntuaciones
        Permission::create(['name' => 'point.index']);
        Permission::create(['name' => 'point.create']);
        Permission::create(['name' => 'point.show']);
        Permission::create(['name' => 'point.edit']);
        Permission::create(['name' => 'point.state']);


        //Administrador
        $admin = Role::create(['name' => 'Administrador']);

        // $admin->givePermissionTo([
        //     'products.index',
        //     'products.edit',
        //     'products.show',
        //     'products.create',
        //     'products.destroy'
        // ]);
        //$admin->givePermissionTo('products.index');
        $admin->givePermissionTo(Permission::all());

        //Delegado
        $delegado = Role::create(['name' => 'Delegado']);

        $delegado->givePermissionTo([
            'player.index',
            'player.create',
            'player.show',
            'player.edit',
            'player.state',
            'team.index',
            'team.create',
            'team.show',
            'team.edit',
            'team.state',
            'category.index',
            'category.create',
            'category.show',
            'point.index',
            'point.show'
        ]);

        //User Admin
        $user = User::find(1); //Jose
        $user->assignRole('Administrador');

        //Delegado
        $user2 = User::find(2); //Magui
        $user2->assignRole('Delegado');


        // Permission::create([
        //     'name' => 'crear-jugadores',
        //     'guard_name' => 'web',
        // ]);
    }
}

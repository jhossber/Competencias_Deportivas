<?php

use Illuminate\Database\Seeder;
use App\Grant;

class GrantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Grant::create([
            'name'          => 'Navegar usuarios',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);

        Grant::create([
            'name'          => 'Ver detalle de usuario',
            'description'   => 'Ve en detalle cada usuario del sistema',
        ]);

        Grant::create([
            'name'          => 'Creación de Usuarios',
            'description'   => 'Podría crear nuevos usuarios en el sistema',
        ]);

        Grant::create([
            'name'          => 'Edición de usuarios',
            'description'   => 'Podría editar cualquier dato de un usuario del sistema',
        ]);

        Grant::create([
            'name'          => 'Eliminar usuario',
            'description'   => 'Podría eliminar cualquier usuario del sistema',
        ]);

        Grant::create([
            'name'          => 'Generar PDF de Usuarios',
            'description'   => 'Podría Generar PDF de usuarios del sistema',
        ]);

        //Roles
        Grant::create([
            'name'          => 'Navegar roles',
            'description'   => 'Lista y navega todos los roles del sistema',
        ]);

        Grant::create([
            'name'          => 'Ver detalle de un rol',
            'description'   => 'Ve en detalle cada rol del sistema',
        ]);

        Grant::create([
            'name'          => 'Creación de roles',
            'description'   => 'Podría crear nuevos roles en el sistema',
        ]);

        Grant::create([
            'name'          => 'Edición de roles',
            'description'   => 'Podría editar cualquier dato de un rol del sistema',
        ]);

        Grant::create([
            'name'          => 'Eliminar roles',
            'description'   => 'Podría eliminar cualquier rol del sistema',
        ]);

        //Jugadores
        Grant::create([
            'name'          => 'Navegar jugadores',
            'description'   => 'Lista y navega todos los jugadores del sistema',
        ]);

        Grant::create([
            'name'          => 'Ver detalle de un jugador',
            'description'   => 'Ve en detalle cada jugadores del sistema',
        ]);

        Grant::create([
            'name'          => 'Creación de jugadores',
            'description'   => 'Podría crear nuevos jugadores en el sistema',
        ]);

        Grant::create([
            'name'          => 'Edición de jugadores',
            'description'   => 'Podría editar cualquier dato de un jugador del sistema',
        ]);

        Grant::create([
            'name'          => 'Eliminar jugadores',
            'description'   => 'Podría eliminar cualquier jugador del sistema',
        ]);

        //Equipos
        Grant::create([
            'name'          => 'Navegar Equipos',
            'description'   => 'Lista y navega todos los Equipos del sistema',
        ]);

        Grant::create([
            'name'          => 'Ver detalle de un Equipo',
            'description'   => 'Ve en detalle cada Equipos del sistema',
        ]);

        Grant::create([
            'name'          => 'Creación de Equipos',
            'description'   => 'Podría crear nuevos Equipos en el sistema',
        ]);

        Grant::create([
            'name'          => 'Edición de Equipos',
            'description'   => 'Podría editar cualquier dato de un Equipo del sistema',
        ]);

        Grant::create([
            'name'          => 'Eliminar Equipos',
            'description'   => 'Podría eliminar cualquier Equipos del sistema',
        ]);

        //Puntucaciones
        Grant::create([
            'name'          => 'Navegar puntuaciones',
            'description'   => 'Lista y navega todos los puntuaciones del sistema',
        ]);

        Grant::create([
            'name'          => 'Ver detalle de un puntuacion',
            'description'   => 'Ve en detalle cada puntuaciones del sistema',
        ]);

        Grant::create([
            'name'          => 'Creación de puntuaciones',
            'description'   => 'Podría crear nuevos puntuaciones en el sistema',
        ]);

        Grant::create([
            'name'          => 'Edición de puntuaciones',
            'description'   => 'Podría editar cualquier dato de un puntuacion del sistema',
        ]);

        Grant::create([
            'name'          => 'Eliminar puntuaciones',
            'description'   => 'Podría eliminar cualquier puntuacion del sistema',
        ]);


        //Categorias
        Grant::create([
            'name'          => 'Navegar categorias',
            'description'   => 'Lista y navega todos los categorias del sistema',
        ]);

        Grant::create([
            'name'          => 'Ver detalle de un categoria',
            'description'   => 'Ve en detalle cada categorias del sistema',
        ]);

        Grant::create([
            'name'          => 'Creación de categorias',
            'description'   => 'Podría crear nuevos categorias en el sistema',
        ]);

        Grant::create([
            'name'          => 'Edición de categorias',
            'description'   => 'Podría editar cualquier dato de un categoria del sistema',
        ]);

        Grant::create([
            'name'          => 'Eliminar categorias',
            'description'   => 'Podría eliminar cualquier categoria del sistema',
        ]);

        //Canchas
        Grant::create([
            'name'          => 'Navegar canchas',
            'description'   => 'Lista y navega todos los canchas del sistema',
        ]);

        Grant::create([
            'name'          => 'Ver detalle de un cancha',
            'description'   => 'Ve en detalle cada canchas del sistema',
        ]);

        Grant::create([
            'name'          => 'Creación de canchas',
            'description'   => 'Podría crear nuevos canchas en el sistema',
        ]);

        Grant::create([
            'name'          => 'Edición de canchas',
            'description'   => 'Podría editar cualquier dato de un cancha del sistema',
        ]);

        Grant::create([
            'name'          => 'Eliminar canchas',
            'description'   => 'Podría eliminar cualquier cancha del sistema',
        ]);

    }
}

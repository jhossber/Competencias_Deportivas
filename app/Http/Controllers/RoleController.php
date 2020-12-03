<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class RoleController extends Controller
{
    /**
     *
     *  METODO: Para mostrar el listado de una tabla de DB
     *          visualizado con una tabla.
     *
     *  URL: /roles
     *  AUTOR: Jose Bernal
     */
    public function index()
    {
        $roles = Role::orderBy('id', 'ASC')->paginate(5);
        return view('rol.index', [
            'roles' => $roles,
        ]);
    }

    /**
     * METODO: Es para crear un nuevo rol en la BD
     *         Atraves de un Formulario en la VISTA
     *
     * URL: /nuevo-rol
     * AUTOR: Jose Bernal
     *
     */
    public function create()
    {
        $permissions = Permission::orderBy('id', 'ASC')->get();
        return view('rol.create', [
            'permissions' => $permissions,
        ]);
    }

    /**
     * METODO: Es para almacenar o guardas los datos en la DB
     *         A traves del Formulario
     *
     * URL : /nuevo-rol/guargaar
     * METODO : POST
     * AUTOR : Jose Bernal
     *
     */
    public function store(Request $request)
    {
        $rol              = new Role;

        $rol->name = $request->name;
        $rol->save();

        $rol = Role::findOrFail($rol->id);
        $rol->permissions()->attach($request->permission);
        return redirect()->route('role.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * METODO : Es para Editar los datos de la BD
     *          A traves de un formulario obteniendo
     *          los datos en los campor del formulario
     *
     * URL :
     * AUTOR : Jose Bernal
     *
     */
    public function edit($id)
    {
        $roles = Role::with('permissions')->findOrFail($id);
        $array[] = 0;

        foreach($roles->permissions as $role){
            $array[] = $role->id;
        }

        $permissions = Permission::orderBy('id', 'ASC')->get();

        // return $array;

        // return response()->json(['role'=>$roles]);
        // die();

        return view('rol.editar', [
            'role' => $roles,
            'permissions' => $permissions,
            'array' => $array,
        ]);
    }

    /**
     * METODO : Una ves modificado los datos para a actualizar
     *          los datos en la BD
     *
     * URl:
     * AUTOR : Jose Bernal
     *
     */
    public function update(Request $request, $id)
    {
        $role = Role::findOrfail($id);
        $role->name = $request->name;
        $role->update();
        $role = Role::findOrFail($role->id);
        $role->permissions()->sync($request->permissions);
        return redirect()->route('role.index');
    }

    /**
     *  METODO : Esta es para el estado de un registro
     *           de una tabla de la BD
     * AUTOR : Jose Bernal
     */
    public function state($id)
    {
        $role        = Role::findOrfail($id);
        $role->state = ($role->state ? 0 : 1);
        $role->update();
        return redirect()->route('role.index');
    }
}

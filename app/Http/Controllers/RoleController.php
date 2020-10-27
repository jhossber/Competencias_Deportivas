<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Grant;

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
        $roles = Role::orderBy('role_id', 'ASC')->paginate(5);
        return view('rol.index', [
            'roles' => $roles,
        ]);
    }

    /**
     * METODO: Es para crear un nuevo rol en la BD
     *         Atraves de un Formulario en la VISTA
     *
     * URL: /
     * AUTOR: Jose Bernal
     *
     */
    public function create()
    {
        $grants = Grant::orderBy('grant_id', 'ASC')->get();
        return view('rol.create', [
            'grants' => $grants,
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
        $rol->description = $request->description;
        $rol->save();
        $rol = Role::findOrFail($rol->role_id);
        $rol->grants()->attach($request->grants);
        return redirect()->route('role.get');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

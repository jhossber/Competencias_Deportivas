<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
// use App\Role;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Carbon\Carbon;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = User::where('role_id', 1)->paginate(5);
        $users = User::orderBy('id', 'ASC')->paginate(5);
        return view('user.index', [
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::orderBy('id', 'ASC')->get();

        return view('user.create', [
            'roles' => $roles,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;

        // $user->role_id        = $request->role;
        $user->name       = $request->name;
        $user->first_name = $request->first_name;
        $user->last_name  = $request->last_name;
        $user->email      = $request->email;

        // Generacion de Contraseñas para el usario
        // "kronus_YujraJ_2020" => kronus_Paterno1raletraNombre_gestion en la que se encuentra
        $pwd = 'kronus_'.ucfirst($user->first_name).strtoupper( substr($user->name, 0,1) ).'_'.date('Y');
        $user->password   = bcrypt($pwd);
        $user->save();

        $user->assignRole($request->role);

        // $user = Role::findOrFail($user->id);
        // $user->users()->attach($request->role);

        return redirect()->route('user.index');
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
        $roles = Role::all();

        // $roles = Role::pluck('id','name')->all();

        // $user = User::findOrfail($id);


        $user = User::find($id);

        // return $user;
        // $rol = Role::pluck('id')->all();

        // foreach($roles as $key=>$rol){
        //     $role_id = $rol;
        //     // echo " ".$rol." ".$key;
        // }
        // // return $rol;
       // $role_user[]= 0;

        $userRole = $user->roles->pluck('id')->all();


        // $userRole = $user->roles->all();

        // return $userRole;
        // dd();

        // foreach($userRole as $key=>$valor){
        //      $role_user[] = $valor;
        //     echo " ". $role_user. " ";
        // }
        // dd();
        // $u[] = 1;

        foreach($userRole as $key=>$valor){
            $role_user = $valor;
           // echo $u=$key ." ". $valor . " ";
        }

        return view('user.editar', [
            'user'        => $user,
            'roles'       => $roles,
            'role_user' => $role_user,
        ]);
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
        $user = User::findOrfail($id);

        $user->name       = $request->name;
        $user->first_name = $request->first_name;
        $user->last_name  = $request->last_name;
        $user->email      = $request->email;

        // $request->role;

        $user->update();

        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->role);

        // dd($user);
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function state($id)
    {
        //findOrFail() Generacion de Pantallas de Error de Laravel
        $user        = User::findOrFail($id);
        $user->state = ($user->state ? 0 : 1);
        $user->update();
        return redirect()->route('user.index');
    }


    public function searchUser(Request $request)
    {

        $users = User::orderBy('id', 'DESC')
            ->where('first_name', 'LIKE', "%$request->buscar%")
            ->paginate(5);

        return view('user.index', [
            'users'  => $users,
            'search' => $request->buscar,
        ]);
    }
}

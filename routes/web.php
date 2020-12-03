<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return redirect()->route('login');
});


// ----------------LOGIN-----------------------------------------
Auth::routes();
//Cerrar Sesion
//Interfaz de Login

Route::get('/logout','Auth\LoginController@logout')->name('logout');

Route::get('/login', function(){
    return view('auth.login');
})->name('login');

//Intentos de Usuarios
Route::get('/login1','Auth\LoginController@login1')->name('login1');


Route::group(['middleware' => 'auth'], function () {

    // ------------------PANTALLA PRINCIPAL------------------------------------
    //Pantalla Principal, para mostrar graficas
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


    //Roles
    Route::get('/roles', 'RoleController@index')->name('role.index');
    Route::post('/nuevo-rol/guardar', 'RoleController@store')->name('role.store');
    Route::get('/nuevo-rol', 'RoleController@create')->name('role.create');
    Route::get('/editar-rol/{role_id}', 'RoleController@edit')->name('role.edit');
    Route::put('/editar-rol/actualizar/{role_id}', 'RoleController@update')->name('role.update');
    Route::get('/rol/estado/{role_id}','RoleController@state')->name('role.state');


    //Usuarios
    Route::get('/usuarios', 'UserController@index')->name('user.index')
                                                ->middleware('permission:user.index');
    Route::get('/nuevo-usuario', 'UserController@create')->name('user.create')
                                                ->middleware('permission:user.create');
    Route::post('/nuevo-usuario/guardar', 'UserController@store')->name('user.store')
                                                ->middleware('permission:user.create');
    Route::get('/editar-usuario/{id}', 'UserController@edit')->name('user.edit')
                                                ->middleware('permission:user.edit');
    Route::put('/editar-usuario/actualizar/{id}', 'UserController@update')->name('user.update')
                                                ->middleware('permission:user.edit');
    Route::get('/usuario/estado/{id}','UserController@state')->name('user.state')
                                                ->middleware('permission:user.state');
    // Buscar Usuario
    Route::post('/buscarusuario', 'UserController@searchUser')->name('search.user');

    //Jugadores
    Route::get('/jugadores', 'PlayerController@index')->name('player.index')
                                                ->middleware('permission:player.index');
    Route::get('/nuevo-jugador', 'PlayerController@create')->name('player.create')
                                                ->middleware('permission:player.create');
    Route::post('/nuevo-jugador/guardar', 'PlayerController@store')->name('player.store')
                                                ->middleware('permission:player.create');
    Route::get('/editar-jugador/{id}', 'PlayerController@edit')->name('player.edit')
                                                ->middleware('permission:player.edit');
    Route::put('/editar-jugador/actualizar/{id}', 'PlayerController@update')->name('player.update')
                                                ->middleware('permission:player.edit');
    Route::get('/jugador/estado/{id}','PlayerController@state')->name('player.state')
                                                ->middleware('permission:player.state');
    // Buscar Jugador
    Route::post('/buscarjugador', 'PlayerController@searchPlayer')->name('search.player');


    //categories
    Route::get('/categorias', 'CategoryController@index')->name('category.index');
    Route::post('/nueva-categoria/guardar', 'CategoryController@store')->name('category.store');
    Route::get('/nuevo-categoria', 'CategoryController@create')->name('category.create');
    Route::get('/editar-categoria/{category_id}', 'CategoryController@edit')->name('category.edit');
    Route::put('/editar-categoria/actualizar/{category_id}', 'CategoryController@update')->name('category.update');
    Route::get('/categoria/estado/{category_id}','CategoryController@state')->name('category.state');
    // Buscar Usuario
    Route::post('/buscarcategoria', 'CategoryController@searchCategory')->name('search.category');


    //canchas
    Route::get('/canchas', 'PlaceController@index')->name('place.index');
    Route::post('/nueva-canchas/guardar', 'PlaceController@store')->name('place.store');
    Route::get('/nueva-cancha', 'PlaceController@create')->name('place.create');
    Route::get('/editar-cancha/{place_id}', 'PlaceController@edit')->name('place.edit');
    Route::put('/editar-cancha/actualizar/{place_id}', 'PlaceController@update')->name('place.update');
    Route::get('/cancha/estado/{place_id}','PlaceController@state')->name('place.state');
    // Buscar Usuario
    Route::post('/buscarcancha', 'PlaceController@searchPlace')->name('search.place');


    //Partidos
    Route::get('/partidos', 'PlaceTeamController@index')->name('fixture.index');
    // Route::post('/nuevo-rol/guardar', 'RoleController@store')->name('role.store');
    Route::get('/nuevo-partido', 'PlaceTeamController@create')->name('fixture.create');
    // Route::get('/editar-rol/{role_id}', 'RoleController@edit')->name('role.edit');
    // Route::put('/editar-rol/actualizar/{role_id}', 'RoleController@update')->name('role.update');
    // Route::get('/rol/estado/{role_id}','RoleController@state')->name('role.state');

    //Equipos
    Route::get('/equipos', 'TeamController@index')->name('team.index');
    Route::post('/nuevo-equipo/guardar', 'TeamController@store')->name('team.store');
    Route::get('/nuevo-equipo', 'TeamController@create')->name('team.create');
    Route::get('/editar-equipo/{team_id}', 'TeamController@edit')->name('team.edit');
    Route::put('/editar-equipo/actualizar/{team_id}', 'TeamController@update')->name('team.update');
    Route::get('/equipo/estado/{team_id}','TeamController@state')->name('team.state');
    // Buscar Usuario
    Route::post('/buscarequipo', 'TeamController@searchTeam')->name('search.team');

});

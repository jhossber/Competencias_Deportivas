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




//Route::get('/', function () {
//    return view('welcome');
//});

//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth'], function () {

    // ------------------PANTALLA PRINCIPAL------------------------------------
    //Pantalla Principal, para mostrar graficas
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    //Usuarios
    Route::get('/usuarios', 'UserController@index')->name('user.get');
    Route::get('/nuevo-usuario', 'UserController@create')->name('user.create');
    Route::post('/nuevo-usuario/guardar', 'UserController@store')->name('user.store');
    Route::get('/editar-usuario/{id}', 'UserController@edit')->name('user.edit');
    Route::put('/editar-usuario/actualizar/{id}', 'UserController@update')->name('user.update');
    Route::get('/usuario/estado/{id}','UserController@state')->name('user.state');
    //Obtener Provincia
    Route::get('/provincia/{id}', 'UserController@searchProvince')->name('search.province');
    // Buscar Usuario
    Route::post('/buscarusuario', 'UserController@searchUser')->name('search.user');

    //Roles
    Route::get('/roles', 'RoleController@index')->name('role.get');
    Route::post('/nuevo-rol/guardar', 'RoleController@store')->name('role.store');
    Route::get('/nuevo-rol', 'RoleController@create')->name('role.create');
    Route::get('/editar-rol/{role_id}', 'RoleController@edit')->name('role.edit');
    Route::put('/editar-rol/actualizar/{role_id}', 'RoleController@update')->name('role.update');
    Route::get('/rol/estado/{role_id}','RoleController@state')->name('role.state');

});

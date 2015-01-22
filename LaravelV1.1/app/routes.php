<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

// Route::get('/', array('uses' => 'UsuarioV1Controller@listarUsuarios'));

Route::get('/usuarios/listado', array('uses' => 'UsuarioV1Controller@listarUsuarios'));

Route::get('/usuarios/modificar/{id}', array('uses' => 'UsuarioV1Controller@modificarUsuario'));

Route::post('/usuarios/actualizar/{id}', array('uses' => 'UsuarioV1Controller@actualizarUsuario'));

Route::get('/usuarios/ingresar', array('uses' => 'UsuarioV1Controller@ingresarUsuario'));

Route::post('/usuarios/crear', array('uses' => 'UsuarioV1Controller@crearUsuario'));

// Route::post('/usuarios/crear', function(){
// 	UsuarioV1::create(Input::all());
// 	$datos = Input::all();
// 	$reglas = array('nombre' => 'min:3');
// 	$validador = Validator::make($datos, $reglas);

// 	if($validador->passes()){
// 		return Redirect::to('/usuarios/listado');

// 	}
// 	else{
// 		return View::make('usuarios.ingresar');
// 	}
// 	});

Route::get('/usuarios/eliminar/{id}', array('uses' => 'UsuarioV1Controller@eliminarUsuario'));

Route::get('/usuarios/{id}', array('uses' => 'UsuarioV1Controller@buscarUsuario'));

//Route::get('login', 'AuthController@showLogin');


//Test Login
Route::get('/', function(){
    return View::make('login.index');
});

//Página oculta donde sólo puede ingresar un usuario identificado
Route::get('/login/hidden', ['before' => 'auth', function(){
    return View::make('login.hidden');
}]);
//Procesa el formulario e identifica al usuario
Route::post('/login/login', array('uses' => 'AuthController@doLogin', 'before' => 'guest'));
//Desconecta al usuario
Route::get('/login/logout', ['uses' => 'AuthController@doLogout', 'before' => 'auth']);

?>
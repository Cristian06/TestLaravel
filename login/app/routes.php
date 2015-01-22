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

Route::get('/', array('uses' => 'LoginController@index'));

Route::get('/main/login', array('uses' => 'LoginController@VistaMain'));
 
Route::post('/main/crear', array('uses' => 'LoginController@LogearUsuario'));

Route::get('/main/welcome', array('uses' => 'LoginController@Welcome'));
 

// Por ultimo crearemos un grupo con el filtro auth.
// Para todas estas rutas el usuario debe haber iniciado sesión.
// En caso de que se intente entrar y el usuario haya iniciado session
// entonces sera redirigido a la ruta login


// Route::group(array('before' => 'auth'), function()
// {
    
//     Route::get('inicio', function(){
        
        
//         // Con la función Auth::user() podemos obtener cualquier dato del usuario
//         // que este en la sesión, en este caso usamos su correo y su id
//         // Esta función esta disponible en cualquier parte del código
//         // siempre y cuando haya un usuario con sesión iniciada
//         echo 'Bienvenido '. Auth::user()->correo . ', su Id es: '.Auth::user()->id ;
//         echo '<br><a href="logout">Cerrar Sesión</a>';

//          if (Session::has('alert')){
//                 echo '<script>ok()</script>';
//                 echo '<h3>'. Session::get('alert'). '</h3>';
//                echo '</div>';
//          }
//     });
// });

Route::get('/main/logout', array('uses' => 'LoginController@DeslogearUsuario', 'before' => 'auth'));



/**
 /*---------RECICLAR------------------*/
// Route::post('registro', function(){
 
//     $input = Input::all();
    
//     // al momento de crear el usuario la clave debe ser encriptada
//     // para utilizamos la función estática make de la clase Hash
//     // esta función encripta el texto para que sea almacenado de manera segura
//     $input['password'] = Hash::make($input['password']);
//     Usuarios::create($input);
 
//     return Redirect::to('login')->with('mensaje_registro', 'Usuario Registrado');
// });
 
// esta ruta servirá para iniciar la sesión por medio del correo y la clave
// para esto utilizamos la función estática attemp de la clase Auth
// esta función recibe como parámetro un arreglo con el correo y la clave
 /*-------------------------------------------*/

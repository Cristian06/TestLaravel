<?php
	class LoginController extends BaseController{

		public function index(){
			return View::make('main.login');
		}

		public function VistaMain(){
			
			return View::make('main.login');
		}

		public function LogearUsuario(){
			
			// $data = Input::all();
			// la función attempt se encarga automáticamente se hacer la encriptación de la clave para ser comparada con la que esta en la base de datos.
   			if (Auth::attempt( array('correo' => Input::get('correo'), 'password' => Input::get('password') ), true )){
        	return Redirect::to('main/welcome')->with('alert', 'Bienvenido!');
    		}

    		else{
       			return Redirect::to('/main/login')->with('mensaje_login', 'Ingreso inválido')->withInput();
    		}
		}

		public function Welcome(){
			return View::make('main.welcome');
		}

		public function DeslogearUsuario(){

			Auth::logout();

			return Redirect::to('/')->with('mensaje_logout', 'Gracias por Visitarnos!');
		}
	}


?>
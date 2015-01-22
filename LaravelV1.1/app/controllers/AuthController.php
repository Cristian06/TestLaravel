<?php

	class AuthController extends BaseController{
		//LOGIN
		public function doLogin(){
			$email = mb_strtolower(trim(Input::get('email')));
			$password = Input::get('password');
			
			//$validate = array('nick' => Input::get('nick'), 'password' => Input::get('password'));

			if (Auth::attempt(array('email' => $email, 'password' => $password))){
				dd('asd');
				return Redirect::to('/login/hidden');
			}

			else{

				return Redirect::back()->with('msg', 'Error durante el Log In');
			}
			
		}

		public function doLogout(){
			Auth::logout();

			return Redirect::to('/')->with('msg', 'Gracias por visitar!');
		}

		// public function index(){
		// 	return View::make('hidden');
		// }
	}

?>
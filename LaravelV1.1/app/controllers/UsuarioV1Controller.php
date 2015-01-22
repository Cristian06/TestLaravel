<?php


	class UsuarioV1Controller extends BaseController{

		//LISTAR
		public function listarUsuarios(){
			$usuarios = UsuarioV1::all();
			// dd($usuario);
			return View::make('usuarios.listado', array('usuarios' => $usuarios));
		}

		//ACTUALIZAR
		public function modificarUsuario($id){
			$usuario = UsuarioV1::find($id);
			return View::make('usuarios.modificar', array('usuario' => $usuario));

		}

		public function actualizarUsuario($id){
			$usuario = UsuarioV1::find($id);
			//dd($usuario);
			$usuario->nombre = Input::get('nombre');
			$usuario->apellido = Input::get('apellido');
			$usuario->nombreUsuario = Input::get('nombreUsuario');
			$usuario->email = Input::get('email');

			// $usuarios->datos = Input::all();

			$validadorr = Validator::make(Input::all(), array(
				'nombre' => 'alpha|required|min:2',
				'apellido' => 'alpha|required|min:2',
				'nombreUsuario' => 'alpha_num|required|min:2',
				'email' => 'email|required|min:3'),

				array(
				'alpha' => 'El campo :attribute debe contener sólo letras',
				'alpha_num' => 'El campo :attribute debe contener sólo letras y/o números',
				'min' => 'El campo :attribute debe ser superior a 1 caracter(es)',
				'required' => 'El campo :attribute es obligatorio',
				'email' => 'El campo email debe ser una dirección válida'));
			if($validadorr->passes()){
				$usuario->save();
				return Redirect::to('usuarios/listado');
			}
			else{
				// dd($validadorr);
				// return Redirect::to('usuarios/modificar')->withInput()->withErrors($validador);
				return View::make('usuarios.modificar', array('usuario' => $usuario))->withErrors($validadorr);
			}

		}

		//INGRESAR
		public function ingresarUsuario(){
			return View::make('usuarios.ingresar');
		}

		public function crearUsuario(){

			$datos = Input::all();
			
			$validador = Validator::make($datos, array(
				'nombre' => 'alpha|min:2|required',
				'apellido' => 'alpha|min:2|required',
				'nombreUsuario' => 'alpha_num|min:2|required',
				'email' => 'email|min:2|required'), 

				array(
				'alpha' => 'El campo :attribute debe contener sólo letras',
				'alpha_num' => 'El campo :attribute debe contener sólo letras y/o números',
				'min' => 'El campo :attribute debe ser superior a 1 caracter(es)',
				'required' => 'El campo :attribute es obligatorio',
				'email' => 'El campo email debe ser una dirección válida'));

			// $messages = $validator->messages();


			if($validador->passes()){
				UsuarioV1::create(Input::all());
				return Redirect::to('/usuarios/listado')->with('notice', '');

			}
			else{
				return Redirect::to('/usuarios/ingresar')->withInput()->withErrors($validador);
				// return Redirect::to('/usuarios/ingresar');
			}
	
		}

		//ELIMINAR
		public function eliminarUsuario($id){
			$usuario = UsuarioV1::find($id);
			$usuario-> delete();

			return Redirect::to('usuarios/listado')->with('notice', '');
		}

		//BUSCAR
		public function buscarUsuario($id){
			$usuario = UsuarioV1::find($id);
			return View::make('usuarios.buscar', array('usuario' => $usuario));
		}

	}

?>
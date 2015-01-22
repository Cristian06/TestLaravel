<?php
	
	class UsuarioV1 extends Eloquent
	{
		protected $table = 'usuariosv1';
		protected $fillable = array('nombre', 'apellido', 'nombreUsuario', 'email', 'created_at');
	}

?>
@extends('layouts.main')

@section('mainContent')
<style type="text/css">
	.txtRojo{
		color: red;
		margin-left: 10px;
	}
</style>

	<div class="panel panel-primary">

		<div class="panel-heading"><h4> Usuario {{$usuario->id}} </h4></div>

		<div class="panel-body">
			{{ Form::open(array('url' => 'usuarios/actualizar/'.$usuario->id)) }}

				{{--Campo Nombre--}}
				{{ Form::label('nombre', 'Nombre') }}
				{{ Form::label('', $errors->first('nombre'), array('class' => 'txtRojo')) }}
				{{ Form::text('nombre', $usuario->nombre, array('class' => 'form-control')) }}

				{{--Campo Apellido--}}
				<br>{{ Form::label('apellido', 'Apellido') }}
				{{ Form::label('', $errors->first('apellido'), array('class' => 'txtRojo')) }}
				{{ Form::text('apellido', $usuario->apellido, array('class' => 'form-control')) }}

				{{--Campo Nombre Usuario--}}
				<br>{{ Form::label('nombreUsuario', 'Nombre de Usuario') }}
				{{ Form::label('', $errors->first('nombreUsuario'), array('class' => 'txtRojo')) }}
				{{ Form::text('nombreUsuario', $usuario->nombreUsuario, array('class' => 'form-control')) }}

				{{--Campo Email--}}
				<br>{{ Form::label('email', 'E-mail') }}
				{{ Form::label('', $errors->first('email'), array('class' => 'txtRojo')) }}
				{{ Form::email('email', $usuario->email, array('class' => 'form-control')) }}

				<br>{{ Form::submit('Modificar Usuario', array('class' => 'btn btn-primary')) }}

			{{ Form::close() }}

		</div>

		<div class="panel-footer"></div>

	</div>	

@stop

@section('rightMenu')

	<div class="rightMenu">
			<h3>Menú</h3>
			<ul>
				<li>{{ HTML::link('usuarios/ingresar', 'Crear Usuario'); }}</li>

				<li>{{ HTML::link('usuarios/listado', 'Volver Atrás'); }}</li>

			</ul>
	</div>

@stop
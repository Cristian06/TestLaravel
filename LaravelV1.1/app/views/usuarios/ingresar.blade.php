@extends('layouts.main')

@section('mainContent')

<script type="text/javascript">
	function exitoo(){
		alert ('Usuario ingresado exitosamente');
	}
</script>

<style type="text/css">
	.txtRojo{
		color: red;
		margin-left: 10px;
	}
</style>

	@if(Session::has('notice'))
		<script>exitoo()</script>
	@endif

	<div class="panel panel-primary">

		<div class="panel-heading">
			<h4>Formulario de Registro</h4>
		</div>

		<div class="panel-body">

			{{ Form::open(array('url' => 'usuarios/crear'), array('role' => 'form')) }}

				{{--Campo Nombre--}}
				{{--$errors->first('nombre')--}}
				{{ Form::label('nombre', 'Nombre') }}
				{{ Form::label('', $errors->first('nombre'), array('class' => 'txtRojo'))}}
				{{ Form::text('nombre', null, array('class' => 'form-control')) }}
				

				{{--Campo Apellido--}}
				{{ Form::label('apellido', 'Apellido') }}
				{{ Form::label('', $errors->first('apellido'), array('class' => 'txtRojo'))}}
				{{ Form::text('apellido', null, array('class' => 'form-control')) }}

				{{--Campo Nombre de Usuario--}}
				{{ Form::label('nombreUsuario', 'Nombre de Usuario') }}
				{{ Form::label('', $errors->first('nombreUsuario'), array('class' => 'txtRojo'))}}
				{{ Form::text('nombreUsuario', null, array('class' => 'form-control')) }}

				{{--Campo Email--}}
				{{ Form::label('email', 'E-mail') }}
				{{ Form::label('', $errors->first('email'), array('class' => 'txtRojo'))}}
				{{ Form::email('email', null, array('class' => 'form-control')) }}

				{{ Form::submit('Ingresar Usuario', array('class' => 'btn btn-primary')) }}

			{{ Form::close() }}

		</div>

		<div class="panel-footer">
			
		</div>

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
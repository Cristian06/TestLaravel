@extends('layouts.main')

@section('mainContent')

	<table class="table table-striped">

		<tr>
			<th colspan="2">Detalles Usuario {{ $usuario->id }}</th>
		</tr>

		<tr>
			<td>Nombre</td>
			<td>{{ $usuario->nombre }} </td>
		</tr>

		<tr>
			<td>Apellido</td>
			<td>{{ $usuario->apellido }}</td>
		</tr>

		<tr>
			<td>Nombre de Usuario</td>
			<td>{{ $usuario->nombreUsuario }}</td>
		</tr>

		<tr>
			<td>E-mail</td>
			<td>{{ $usuario->email }}</td>
		</tr>

		<tr>
			<td>Fecha Ingreso</td>
			<td>{{ $usuario->created_at }}</td>
		</tr>

	</table>

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
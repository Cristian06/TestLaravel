@extends('layouts.main')

@section('mainContent')
<script type="text/javascript">
	function exito(){

		alert ('El Usuario ha sido Eliminado');
		
	}
</script>

	@if(Session::has('notice'))
		<script>exito()</script>
		<!-- <p>{{ Session::get('notice') }}</p> -->
		
	@endif

	<h3>Listado de Usuarios Disponibles</h3>

	<table class="table table-striped">

		<tr>
			<th>Usuario</th>
			<th colspan="2">Acciones</th>
		</tr>

		@foreach($usuarios as $usuario)
		<tr>
			<td>{{ HTML::link('usuarios/'.$usuario->id, $usuario->nombre)}}</td>
			<td>{{ HTML::link('usuarios/modificar/'.$usuario->id, 'Modificar Usuario'); }}</td>
			<td>{{ HTML::link('usuarios/eliminar/'.$usuario->id, 'Eliminar Usuario'); }}</td>
		</tr>
		@endforeach

	</table>

@stop

@section('rightMenu')
	
	<div class="rightMenu">
			<h3>Menú</h3>
			<ul>
				<li>{{ HTML::link('usuarios/ingresar', 'Crear Usuario'); }}</li>

			</ul>
	</div>

@stop




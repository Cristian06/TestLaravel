@extends('layouts.main')

@section('welcome')
<script type="text/javascript">
	
	function ok(){
		  alert('Bienvenido!');
	}

	$(document).ready(function(){
		$("#myModal").dialog({
			autoOpen: true,
			width: 500,
			modal: true,
			buttons: {
		    	Cerrar: function(){
		        	$(this).dialog("close");
				}}
			});

		$('.upModal').click(function(){
			$('myModal').dialog('open');
		});
	});

</script>


	<h3>Bienvenido {{Auth::user()->nombre}}</h3>
       <br>{{ HTML::link('/main/logout', 'Cerrar Sesión'); }}


    <!-- Alerta Bienvenida -->

	@if (Session::has('alert'))
		<script>ok()</script>
	@endif
	
@stop
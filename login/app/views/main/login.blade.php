@extends('layouts.main')

@section('login')
         

    <script type="text/javascript">
        function ty(){
            alert ('Gracias por Visitarnos!');
        }

    </script>

      
        <div class="panel panel-primary"> 

        <div class="panel-heading"><h2>Ingresar </h2></div> 

            <div class="panel-body"> 

            @if (Session::has('mensaje_login'))
                <div class="alert alert-danger" role="alert">
                    <h3>{{ Session::get('mensaje_login') }}</h3>
                </div>
             @endif

                {{ Form::open(array('url' => 'main/crear'), array('role' => 'form')) }}
                    
                    {{ Form::label('correo', 'Email', array('class' => 'form-control')) }}
                    {{ Form::text('correo','', array('class' => 'form-control', 'placeholder' => 'Ingresa tu dirección de E-mail')) }}

                    <br>{{ Form::label('password', 'Clave', array('class' => 'form-control')) }}
                    {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Ingresa tu Clave')) }}

                    <br>{{ Form::submit('Iniciar Sesión', array('class' => 'btn btn-primary')) }}
                 
                {{ Form::close() }}
            </div>

        <div class="panel-footer">
             
        </div>

        </div>

    <!-- Alerta Logout -->
        @if (Session::has('mensaje_logout'))
            <script>ty()</script>
              
        @endif
        
@stop
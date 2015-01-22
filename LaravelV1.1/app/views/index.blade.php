@extends('layouts.layout')
 
@section('title')
    Identificación
@stop
 
@section('content')
    <h2>Identificarse</h2>
 
    @if(Session::get('msg'))
        <p><em>{{ Session::get('msg') }}</em></p>
    @endif
 
    {{ Form::open(array('url' => 'login/login', 'method' => 'POST')) }}
        <!-- E-mail <input type="text" name="email" id="email" /> <br />
        Contraseña <input type="password" name="password" id="password" /> <br />
        <input type="submit" value="Ingresar" /> -->

        {{ Form::label('email', 'E-mail') }}
        {{ Form::email('email', '') }}

        {{ Form::label('password', 'Contraseña') }}
        {{ Form::text('password', '') }}

        {{ Form::submit('Log In')}}
    {{ Form::close() }}
@stop
@extends('layouts.layout')
 
@section('title')
    Identificación
@stop
 
@section('content')
    <h2>Identificarse</h2>
 
    @if(Session::get('msg'))
        <p><b>{{ Session::get('msg') }}</b></p>
    @endif
 
    {{ Form::open(array('url' => '/login', 'method' => 'POST')) }}
        <!-- E-mail <input type="text" name="email" id="email" /> <br />
        Contraseña <input type="password" name="password" id="password" /> <br />
        <input type="submit" value="Ingresar" /> -->

        {{ Form::label('nick', 'NickName') }}
        {{ Form::text('nick', '') }}

        {{ Form::label('password', 'Contraseña') }}
        {{ Form::password('password', '') }}

        {{ Form::submit('Log In')}}
    {{ Form::close() }}
@stop
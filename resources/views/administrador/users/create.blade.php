@extends('adminlte::page')

@section('title', 'Creación de Usuarios')

@section('content_header')
    <h1>Creación de Usuarios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'administrador.users.store']) !!}
                @include('administrador.users.partials.form')
                {!!  Form::submit('Crear Usuario', ['class'=> 'btn btn-outline-info btn-sm']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Administración de Usuarios</h1>
    <a href="{{route('administrador.users.create')}}" class="btn btn-outline-info btn-sm float-right">Crear Usuario</a>
@stop

@section('content')
    <p>Aquí va el table para el crud</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

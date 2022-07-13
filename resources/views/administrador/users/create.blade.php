@extends('adminlte::page')

@section('title', 'Creación Usuarios')

@section('content_header')
    <h1>Creación de Usuarios</h1>
    {{-- <a href="{{route('administrador.users.create')}}"
    class="btn btn-outline-info btn-sm float-right">Crear Usuario</a> --}}
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'administrador.users.store']) !!}
                @include('administrador.users.partials.form')
                {!!  Form::submit('Crear Usuario', ['class'=> 'btn btn-outline-danger']) !!}
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

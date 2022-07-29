@extends('adminlte::page')

@section('title', 'Creación de Usuarios')

@section('content_header')
    {{-- <h1>Creación de Usuarios</h1> --}}
    <br/>
@stop

@section('content')
    <div class="card" , style="width: 30rem; margin: auto auto;">
        <div class="card-body">
            <h1 class="card-title", style="color: #17a2b8"><strong>Creación de Usuarios</strong></h1>
            <br/><br/>
            {!! Form::open(['route' => 'administrador.users.store']) !!}
                @include('administrador.users.partials.form')
                {!!  Form::submit('Crear Usuario', ['class'=> 'btn btn-outline-info']) !!}
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

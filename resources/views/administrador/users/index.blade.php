@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    {{-- <h1>Administración de Usuarios</h1> --}}
    <a href="{{route('administrador.users.create')}}
    "class="btn btn-outline-info btn-sm float-left">Crear Usuario</a>
    <br/><br/>
@stop
@section('content')
    <div class="card-body">
        <table class="table table-striped table-bordered table-content">
            <thead align="center" style="color: #fff; background-color: #17a2b8">
                <tr>
                    <th> # </th>
                    <th>Nombre Completo</th>
                    <th>Correo</th>
                    <th>Edición</th>
                    <th>Desactivación</th>
                </tr>
            </thead>
            <tbody align="center">
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><a href="{{route('administrador.users.edit', $user->id)}}" class="btn btn-outline-secondary">Editar</td>
                        <td>
                            <form action="{{route('administrador.users.destroy', $user->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button href=" " class="btn btn-outline-danger">Desactivar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

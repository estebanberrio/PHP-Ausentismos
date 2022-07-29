@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
<<<<<<< HEAD
    {{-- <h1>Administración de Usuarios</h1> --}}
    <div class="card-body">
        <a href="{{route('administrador.users.create')}}"class="btn btn-outline-info float-left">Crear Usuario</a>
    </div>
=======
<div class="card-transparent" >
    <div class="card-body">
        {{-- <h1>Administración de Usuarios</h1> --}}
        <a href="{{route('administrador.users.create')}}"class="btn btn-outline-info float-left">Crear Usuario</a>
    </div>
</div>
>>>>>>> 4aea05fc96d01ebc2a54db82a42826aff6815fa0
@stop

@section('content')
@include('sweetalert::alert')
<div class="card-transparent" >
    <div class="card-body">
        <table class="table table-striped table-bordered table-content">
            <thead align="center" style="color: #fff; background-color: #17a2b8">
                <tr>
                    <th> # </th>
                    <th>Nombre Completo</th>
                    <th>Correo</th>
                    <th>Estado</th>
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
                        <td>{{$user->status}}</td>
                        <td><a href="{{route('administrador.users.edit', $user->id)}}" class="btn btn-outline-secondary btn-sm">Editar</td>
                        <td>
                            <form action="{{route('administrador.users.destroy', $user->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button href=" " class="btn btn-outline-danger btn-sm" type="submit">Desactivar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

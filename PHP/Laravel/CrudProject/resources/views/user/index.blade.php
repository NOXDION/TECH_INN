@extends('layouts.app')

@section('content')
<div class="row text-center">
    <div>
        <h2>Crear Usuario</h2>
        <a href="{{route('user.create')}}" class="btn btn-primary">Crear</a>
    </div>
</div>

@if(Session::get('success'))
    <div class="alert alert-success p-2 mx-5 my-2">
        <strong>{{Session::get('success')}}</strong>
    </div>
@endif

<div class="col-md-10 m-4">
    <table class="table table-bordered">
        <tr class="text-secondary">
            <th>Id usuario</th>
            <th>Id rol</th>
            <th>Tipo documento</th>
            <th>Numero Documento</th>
            <th>Nombre-Apellido</th>
            <th>Correo electronico</th>
            <th>Telefono</th>
            <th>Contraseña</th>
            <th></th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td class="fw-bold">{{$user->useId}}</td>
            <td>{{$user->rolId}}</td>
            <td>{{$user->useTipoDoc}}</td>
            <td>{{$user->useNumDoc}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->useTelefono}}</td>
            <td>{{$user->password}}</td>
            <td>
                <a href="{{ route('user.show', $user->useId) }}" class="btn btn-info">Deatalles</a>
                <a href="{{ route('user.edit', $user->useId) }}" class="btn btn-warning">Editar</a>

                <form action="{{route('user.destroy', $user->useId)}}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
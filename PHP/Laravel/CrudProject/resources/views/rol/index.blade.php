@extends('layouts.app')

@section('content')
<div class="row text-center">
    <div>
        <h2>Crear Rol</h2>
        <a href="{{route('rol.create')}}" class="btn btn-primary">Crear</a>
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
            <th>Id rol</th>
            <th>Nombre rol</th>
            <th>Descripcion</th>
            <th></th>
        </tr>
        @foreach ($roles as $rol)
        <tr>
            <td class="fw-bold">{{$rol->rolId}}</td>
            <td>{{$rol->rolNombre}}</td>
            <td>{{$rol->rolDescripcion}}</td>
            <td>
                <a href="{{ route('rol.show', $rol->rolId) }}" class="btn btn-info">Detalles</a>
                <a href="{{ route('rol.edit', $rol->rolId) }}" class="btn btn-warning">Editar</a>

                <form action="{{route('rol.destroy', $rol->rolId)}}" method="POST" class="d-inline">
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
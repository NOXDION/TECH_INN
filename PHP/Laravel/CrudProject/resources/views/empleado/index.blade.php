@extends('layouts.app')

@section('content')
<div class="row text-center">
    <div>
        <h2>Crear Empleado</h2>
        <a href="{{route('empleado.create')}}" class="btn btn-primary">Crear</a>
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
            <th>Id empleado</th>
            <th>Id usuario</th>
            <th>Direccion</th>
            <th>Trabajo</th>
            <th>Salario Basico</th>
            <th>Fecha de Admicion</th>
            <th></th>
        </tr>
        @foreach ($empleados as $empleado)
        <tr>
            <td class="fw-bold">{{$empleado->empId}}</td>
            <td>{{$empleado->useId}}</td>
            <td>{{$empleado->empDireccion}}</td>
            <td>{{$empleado->empTrabajo}}</td>
            <td>{{$empleado->empSalarioBasico}}</td>
            <td>{{$empleado->empFechaAdmision}}</td>
            <td>
                <a href="{{ route('empleado.show', $empleado->empId) }}" class="btn btn-info">Detalles</a>
                <a href="{{ route('empleado.edit', $empleado->empId) }}" class="btn btn-warning">Editar</a>

                <form action="{{route('empleado.destroy', $empleado->empId)}}" method="POST" class="d-inline">
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
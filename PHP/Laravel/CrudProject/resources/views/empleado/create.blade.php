@extends('layouts.app')

@section('content')
<div class="row text-center">
    <div>
        <h2>Crear Empleado</h2>
        <a href="{{route('empleado.index')}}" class="btn btn-primary">Volver</a>
    </div>
</div>

<div class="container w-50 border p-4 mt-4">
    <form action="{{route('empleado.store')}}" method="POST" novalidate>
        @csrf
        <div class="mb-3">
            <label for="roleId">Id usuario:</label>
            <input id="" type="text" name="useId" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="Direccion">Dirección:</label>
            <input id="" type="text" name="empDireccion" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="Trabajo">Trabajo:</label>
            <input id="" type="text" name="empTrabajo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="SalarioBasico">Salario Básico:</label>
            <input id="" type="text" name="empSalarioBasico" class="form-control" required>
        </div>

        <div class="mb-3">
                <label for="fechaAdmision">Fecha de Admisión:</label>
                <input id="" type="date" name="empFechaAdmision" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Crear Empleado</button>
    </form>
</div>
@endsection
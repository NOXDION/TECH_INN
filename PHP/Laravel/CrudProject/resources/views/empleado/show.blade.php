@extends('layouts.app')

@section('content')
<div class="row text-center">
    <div>
        <h2>Detalles Rol</h2>
        <a href="{{route('empleado.index')}}" class="btn btn-primary">Volver</a>
    </div>
</div>

<div class="class m-5">
    <h3>Id empleado: {{ $empleado->empId }}</h3>
    <h3>Id usuario: {{ $empleado->useId }}</h3>
    <h4>Direccion: {{ $empleado->empDireccion }}</h4>
    <h4>Trabajo: {{ $empleado->empTrabajo }}</h4>
    <h4>Salario Basico: {{ $empleado->empSalarioBasico }}</h4>
    <h4>Fecha de admicion: {{ $empleado->empFechaAdmision }}</h4>
    <h4>Creacion del empleado: {{ $empleado->created_at}}</h4>
    <h4>Actualizacion del empleado: {{ $empleado->updated_at}}</h4>
</div>

@endsection
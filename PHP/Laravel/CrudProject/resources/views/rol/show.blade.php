@extends('layouts.app')

@section('content')
<div class="row text-center">
    <div>
        <h2>Detalles Rol</h2>
        <a href="{{route('rol.index')}}" class="btn btn-primary">Volver</a>
    </div>
</div>

<div class="class m-5">
    <h3>Id rol: {{ $rol->rolId }}</h3>
    <h3>Nombre rol: {{ $rol->rolNombre }}</h3>
    <h4>Descripcion rol: {{ $rol->rolDescripcion }}</h4>
    <h4>Creacion del rol {{ $rol->created_at}}</h4>
    <h4>Actualizacion del rol {{ $rol->updated_at}}</h4>
</div>

@endsection
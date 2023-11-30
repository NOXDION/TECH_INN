@extends('layouts.app')

@section('content')
<div class="row text-center">
    <div>
        <h2>Crear Rol</h2>
        <a href="{{route('rol.index')}}" class="btn btn-primary">Volver</a>
    </div>
</div>

<div class="container w-50 border p-4 mt-4">
    <form action="{{route('rol.store')}}" method="POST" novalidate>
        @csrf
        <div class="mb-3">
            <label for="">Nombre rol:</label>
            <input id="" type="text" name="rolNombre" class="form-control" placeholder="Administrador">
        </div>
        <div class="mb-3">
            <label for="">Descripcion:</label>
            <input id="" type="text" name="rolDescripcion" class="form-control" placeholder="" >
        </div>
        <button type="submit" class="btn btn-primary">Crear rol</button>
    </form>
</div>
@endsection
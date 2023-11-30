@extends('layouts.app')

@section('content')
<div class="row text-center">
    <div>
        <h2>Editar Rol</h2>
        <a href="{{route('rol.index')}}" class="btn btn-primary">Volver</a>
    </div>
</div>

<div class="container w-50 border p-4 mt-4">
    <form action="{{route('rol.update', $rol)}}" method="POST" novalidate>
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="">Nombre rol:</label>
            <input id="" type="text" name="rolNombre" class="form-control" placeholder="Administrador" value="{{$rol->rolNombre}}">
        </div>
        <div class="mb-3">
            <label for="">Descripcion:</label>
            <input id="" type="text" name="rolDescripcion" class="form-control" placeholder="" value="{{$rol->rolDescripcion}}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar rol</button>
    </form>
</div>
@endsection
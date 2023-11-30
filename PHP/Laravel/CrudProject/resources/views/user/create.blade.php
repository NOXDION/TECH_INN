@extends('layouts.app')

@section('content')
<div class="row text-center">
    <div>
        <h2>Crear Usuario</h2>
        <a href="{{route('user.index')}}" class="btn btn-primary">Volver</a>
    </div>
</div>

<div class="container w-50 border p-4 mt-4">
    <form action="{{route('user.store')}}" method="POST" novalidate>
        @csrf
        <div class="mb-3">
            <label for="">Id rol:</label>
            <input id="" type="text" name="rolId" class="form-control" placeholder="" >
        </div>
        <div class="mb-3">
            <label for="">Tipo documento:</label>
            <input id="" type="text" name="useTipoDoc" class="form-control" placeholder="" >
        </div>
        <div class="mb-3">
            <label for="">Numero Documento:</label>
            <input id="" type="text" name="useNumDoc" class="form-control" placeholder="" >
        </div>
        <div class="mb-3">
            <label for="">Nombre-Apellido:</label>
            <input id="" type="text" name="name" class="form-control" placeholder="" >
        </div>
        <div class="mb-3">
            <label for="">Correo electronico:</label>
            <input id="" type="text" name="email" class="form-control" placeholder="" >
        </div>
        <div class="mb-3">
            <label for="">Telefono:</label>
            <input id="" type="text" name="useTelefono" class="form-control" placeholder="" >
        </div>
        <div class="mb-3">
            <label for="">Contraseña:</label>
            <input id="" type="text" name="password" class="form-control" placeholder="" >
        </div>
        <button type="submit" class="btn btn-primary">Crear Usuario</button>
    </form>
</div>
@endsection
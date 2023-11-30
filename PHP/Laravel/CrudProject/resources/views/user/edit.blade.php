@extends('layouts.app')

@section('content')
<div class="row text-center">
    <div>
        <h2>Editar Usuario</h2>
        <a href="{{route('user.index')}}" class="btn btn-primary">Volver</a>
    </div>
</div>

<div class="container w-50 border p-4 mt-4">
    <form action="{{route('user.update', $user)}}" method="POST" novalidate>
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="">Id rol:</label>
            <input id="" type="text" name="rolId" class="form-control" placeholder="" value="{{$user->rolId}}">
        </div>
        <div class="mb-3">
            <label for="">Tipo documento:</label>
            <input id="" type="text" name="useTipoDoc" class="form-control" placeholder="" value="{{$user->useTipoDoc}}">
        </div>
        <div class="mb-3">
            <label for="">Numero Documento:</label>
            <input id="" type="text" name="useNumDoc" class="form-control" placeholder="" value="{{$user->useNumDoc}}">
        </div>
        <div class="mb-3">
            <label for="">Nombre-Apellido:</label>
            <input id="" type="text" name="name" class="form-control" placeholder="" value="{{$user->name}}">
        </div>
        <div class="mb-3">
            <label for="">Correo electronico:</label>
            <input id="" type="text" name="email" class="form-control" placeholder="" value="{{$user->email}}">
        </div>
        <div class="mb-3">
            <label for="">Telefono:</label>
            <input id="" type="text" name="useTelefono" class="form-control" placeholder="" value="{{$user->useTelefono}}">
        </div>
        <div class="mb-3">
            <label for="">Contraseña:</label>
            <input id="" type="text" name="password" class="form-control" placeholder="" value="{{$user->password}}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar usuario</button>
    </form>
</div>
@endsection
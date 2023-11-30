@extends('layouts.app')

@section('content')
<div class="row text-center">
    <div>
        <h2>Detalles Rol</h2>
        <a href="{{route('user.index')}}" class="btn btn-primary">Volver</a>
    </div>
</div>

<div class="class m-5">
    <h3>Id usuario: {{ $user->useId }}</h3>
    <h3>Id rol: {{ $user->rolId }}</h3>
    <h4>Tipo documento: {{$user->useTipoDoc }}</h4>
    <h4>Numero documento: {{ $user->useNumDoc }}</h4>
    <h4>Nombre-Apellido: {{ $user->name }}</h4>
    <h4>Corre electronico: {{ $user->email }}</h4>
    <h4>Telefono: {{ $user->useTelefono }}</h4>
    <h4>Verficacion correo electronico: {{ $user->email_verified_at }}</h4>
    <h4>Contraseña: {{ $user->password }}</h4>
    <h4>Token: {{ $user->remember_token }}</h4>
    <h4>Creacion del usuario: {{ $user->created_at }}</h4>
    <h4>Actualizacion del usuario: {{ $user->updated_at }}</h4>
</div>

@endsection
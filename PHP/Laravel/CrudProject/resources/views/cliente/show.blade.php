@extends('layouts.app')

@section('content')

<div class="row text-center">
    <div>
        <h2>Detalles</h2>
        <a href="{{route('cliente.index')}}" class="btn btn-primary">Volver</a>
    </div>
</div>

<div class="m-5">
    <h3 style="color:blue">Id rol: </h3>
        <h5>{{$cliente->rolId}}</h5>
    <h3 style="color:blue">Fecha de registro: </h3>
        <h5>{{$cliente->cliFechaRegistro}}</h5>
    <h3 style="color:blue">Fecha de creacion: </h3>
        <h5>{{$cliente->created_at}}</h5>
    <h3 style="color:blue">Fecha de actualizacion: </h3>
        <h5>{{$cliente->updated_at}}</h5>
</div>

@endsection
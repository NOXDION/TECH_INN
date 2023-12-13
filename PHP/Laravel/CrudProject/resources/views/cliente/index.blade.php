@extends('layouts.app')

@section('content')

<div class="row text-center">
    <div>
        <h2>Crear Cliente</h2>
        <a href="{{route('cliente.create')}}" class="btn btn-primary">Crear</a>
    </div>
</div>

<!-- @if (session('success'))
    <h6 class="alert alert-success p-2 mt-2" >{{ session('success') }}</h6>
@endif -->

@if(Session::get('success'))
    <div class="alert alert-success p-2 mx-5 my-2">
        <strong>{{Session::get('success')}}</strong>
    </div>
@endif

<div class="col-md-10 m-4" >
    <table class="table table-bordered">
        <tr>
            <th>Id cliente</th>
            <th>Id usuario</th>
            <th>Fecha Registro</th>
            <th></th>
        </tr>

        @foreach($clientes as $cli)

        <tr>
            <td>{{$cli->cliId}}</td>
            <td>{{$cli->useId}}</td>
            <td>{{$cli->cliFechaRegistro}}</td>
            <td>
                <a href="{{route('cliente.show', $cli->cliId)}}" class="btn btn-info">Detalles</a>
                <a href="{{route('cliente.edit', $cli->cliId)}}" class="btn btn-warning">Editar</a>

                <form action="{{route('cliente.destroy', $cli->cliId)}}" method="POST" class="d-inline">
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
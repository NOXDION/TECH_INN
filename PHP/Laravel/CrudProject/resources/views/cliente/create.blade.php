@extends('layouts.app')

@section('content')

<div class="container w-50 border p-4 mt-4">
  <form action="{{ route('cliente.store') }}" method="POST" novalidate>
    @csrf
    <div class="mb-3">
      <label for="">Id del usuario:</label>
      <input id="" type="number" name="useId" class="form-control">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Fecha de registro del cliente:</label>
      <input id="" type="date" name="cliFechaRegistro" class="form-control">
    </div>

    <div class="d-flex">
      <button type="submit" class="btn btn-primary">Enviar</button>

      <div class="row">
        <div>
          <a href="{{route('cliente.index')}}" class="btn btn-danger">Volver</a>
        </div>
      </div>
    </div>

  </form>
</div>
@endsection
@extends('layouts.app')

@section('title','Catalogo de empleados')

@section('content')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Codigo del empleado</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido paterno</th>
        <th scope="col">Apellido materno</th>
        <th scope="col">puesto</th>
        <th scope="col">sueldo</th>
        <th scope="col">tipo moneda sueldo</th>
        <th scope="col">correo</th>
        <th scope="col">editar</th>
        <th scope="col">eliminar</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($entity as $empleado)
    <tr>
    <th scope="row">{{ $empleado->codigo_empleado }}</th>

    <td>{{ $empleado->nombre }}</td>
    <td>{{ $empleado->apellido_paterno }}</td>
    <td>{{ $empleado->apellido_materno }}</td>
    <td>{{ $empleado->puesto }}</td>
    <td>{{ $empleado->sueldo }}</td>
    <td>{{ $empleado->tipo_moneda_sueldo }}</td>
    <td>{{ $empleado->correo }}</td>
    
        <td>
          <a href="{{ route('empleado.editar',$empleado) }}" class="btn btn-success"> Editar</a>
        </td>
        <td>
          <form action="{{ route('empleado.eliminar',$empleado) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">eliminar </button>
          </form>
      </td>
    </tr>
    @endforeach
    </tbody>
  </table>
  <a href="{{ route('empleado.create') }}" class="btn btn-primary">Nuevo empleado</a>

</div>
</div>
</div
@endsection
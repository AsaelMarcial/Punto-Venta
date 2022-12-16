@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
      <div class="col-12">
        <table class="table table-bordered">
          <div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
            <tr>
                <th>Proveedor</th>
                <th>Descripción</th>
                <th>Partida</th>
                <th>Total</th>
                <th>Factura</th>
                <th>Opciones</th>
            </tr>
        </thead>
        
        <tbody class="table-group-divider">

            @foreach ($egresos as $key => $egreso)
            <tr>
                <td>{{ $egreso->idProveedor }}</td>
                <td>{{ $egreso->descripcion }}</td>
                <td>{{ $egreso->partida }}</td>
                <td>{{ $egreso->total }}</td>
                <td>{{ $egreso->factura }}</td>
                <td>
                    <a class="btn btn-info" >Ver</a>
                    <a class="btn btn-primary" >Editar</a>
                </td>
            </tr>
        @endforeach

        </tbody>

      </table>
    </div>
  </div>
</div>

@endsection
@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="pull-left">
          <h2>Egresos</h2>
      </div>
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Nuevo egreso
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('products.store') }}" method="POST">
          @csrf
           <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Nombre:</strong>
                      <input type="text" name="name" class="form-control" placeholder="Nombre">
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Descripcion:</strong>
                      <textarea class="form-control" style="height:150px" name="detail" placeholder="Descripcion"></textarea>
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                      <button type="submit" class="btn btn-primary">Continuar</button>
              </div>
          </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
@if ($message = Session::get('success'))
  <div class="alert alert-success">
      <p>{{ $message }}</p>
  </div>
@endif
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
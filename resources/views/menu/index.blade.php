@extends('layouts.app')

@section('content')
<div class="d-flex w-100 bg-white rounded">
	{{-- Content body --}}
	<div class="d-flex flex-column  w-100 p-3">
		{{-- Tab bar --}}
		<div class="d-flex flex-row">
			<h2 class="m-2" style="height: fit-content">Alimentos</h2>
			<div class="bg-black m-2" style="height: 35px; width: 2px"></div>
			<h2 class="m-2" style="height: fit-content">Dulcería</h2>
			<div class="bg-black m-2" style="height: 35px; width: 2px"></div>
			<h2 class="m-2" style="height: fit-content">Bebidas</h2>
		</div>

		{{-- Menu items --}}
		<div class="d-flex flex-wrap">
			@foreach ($data as $key => $product)
			{{-- Menu item --}}
			<div id="{{$product->id}}"" class="d-flex flex-column m-1 bg-light rounded" style="width: 180px; height: 230px; overflow:hidden;" >
				{{-- Menu item picture --}}
				<img src="/image/empanadas.jpeg" style="height: 145px; object-fit:cover;">
				{{-- Menu item content --}}
				<div class="m-2">
					<p class="" style="line-height: 11px; font-size:11px; margin: 2px">{{$product->name}}</p>
					<p class="" style="line-height: 11px; font-size:11px; margin: 2px">${{$product->detail}}</p>
					
					{{-- Stepper --}}
					<div class="d-flex flex-row justify-content-center ">
						<div class="d-flex flex-row align-items-center text-white text-center justify-content-center rounded-circle bg-black" style="width: 28px; height:28px" onclick="substract({{$product->id}})" >
							<p style="margin: 0">-</p>
						</div>
						<div class="d-flex flex-row align-items-center text-center justify-content-center rounded-circle" style="width: 28px; height:28px">
							<p id="product-{{$product->id}}-count" style="margin: 0">0</p>
						</div>
						<div class="d-flex flex-row align-items-center text-white text-center justify-content-center rounded-circle bg-black" style="width: 28px; height:28px" onclick="add({{$product->id}})">
							<p style="margin: 0">+</p>
						</div>
					</div>
				</div>
			</div>
			@endforeach

		</div>
	</div>
	
	{{-- Order details --}}
	<div class="d-flex flex-column bg-light rounded p-3 m-3" style="min-width: 300px; height: fit-content;">
		<h3>Detalles de la orden</h3>
		
		{{-- Order items --}}
		<div class="container rounded border">

			{{-- Table header --}}
			<div class="row">
				<div class="col d-flex align-items-center " style="border-right-width: 1px !important; border-right-style: solid !important; max-width: 80px;min-width: 80px;">
					Cant.
				</div>
				<div class="col d-flex align-items-center " style="border-right-width: 1px !important; border-right-style: solid !important; max-width: 100px;min-width: 100px;">
					Desc.
				</div>
				<div class="col">
					Sub-total
				</div>
			</div>

			{{-- Table content --}}
			<div class="row">
				<div class="col d-flex align-items-center " style="border-right-width: 1px !important; border-right-style: solid !important; max-width: 80px;min-width: 80px;">
					<div class="rounded-circle bg-black m-1" style="width: 5px; height: 5px;"></div>
					200
				</div>
				<div class="col d-flex align-items-center " style="border-right-width: 1px !important; border-right-style: solid !important; max-width: 100px;min-width: 100px;">
					Empanadas
				</div>
				<div class="col">
					$$$
				</div>
			</div>
		</div>

		{{-- Total --}}
		<div class="d-flex justify-content-between mt-1">
			<p class="m-2">Total</p>
			<p class="m-2">$$$</p>
		</div>

		{{-- Order holder name --}}
		<div>
			<label for="name">Nombre:</label>
			<input class="form-control mb-3" type="text" placeholder="Ej: Juan Rojas."/>
		</div>

		{{-- Special notes --}}
		<div>
			<textarea class="form-control" cols="30" rows="5" placeholder="Agrega una nota al pedido"></textarea>
		</div>

		{{-- Ticket toggle --}}
		<div class="form-check form-switch mt-3">
			<label class="form-check-label" for="ticket-switch">Imprimir ticket</label>
			<input class="form-check-input" type="checkbox" role="switch" id="ticket-switch">
		</div>

		{{-- Action buttons --}}
		<div class="d-flex flex-row justify-content-around mt-3">
			<button type="button" class="btn btn-secondary">Cancelar</button>
			<button type="button" class="btn btn-primary">Continuar</button>
		</div>
	</div>
</div>
<script>
	function add(id) {
		let countElement = document.getElementById(`product-${id}-count`)
		let count = countElement.innerHTML
		count++
		countElement.innerHTML = count
	}

	function substract(id) {
		let countElement = document.getElementById(`product-${id}-count`)
		let count = countElement.innerHTML
		count--
		countElement.innerHTML = count>=0 ? count : 0
	}
</script>
@endsection
@extends('layouts.app')

@section('content')
@php
$total_price = 0;
$total_tax = 0;
@endphp

@foreach($purchases as $purchase)
	<p><strong>Cliente: </strong>{{ $purchase->user->name }}</p>
	@break
@endforeach

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Producto</th>
				<th>Precio</th>
				<th>Impuesto</th>
			</tr>
		</thead>
		<tbody>
			@foreach($purchases as $purchase)

				<tr>
					<td>{{ $purchase->product->name }}</td>
					<td>{{ $purchase->product->price }}</td>
					<td>({{ $purchase->product->tax }}%) = {{ $purchase->product->price * $purchase->product->tax / 100  }}</td>
					
				</tr>
				@php
				 $total_price += $purchase->product->price;
				 $total_tax += ($purchase->product->price * $purchase->product->tax / 100);

				@endphp
			@endforeach
		</tbody>
	</table>
	<p><strong>Total: </strong>{{ $total_price }}</p>
	<p><strong>Total impuesto: </strong>{{ $total_tax }}</p>
	<p><strong>Total + impuesto: </strong>{{ $total_price + $total_tax }}</p>
	

@stop


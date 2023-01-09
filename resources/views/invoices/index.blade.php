@extends('layouts.app')

@section('content')

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($invoices as $invoice)

				<tr>
					<td>{{ $invoice->id }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('invoice', $invoice->id) }}" class="btn btn-primary">Ver Factura</a>
                            
                        </div>

					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop

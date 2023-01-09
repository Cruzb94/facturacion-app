@extends('layouts.app')

@section('content')
	<div class="d-flex mb-3"><a href="{{ route('products.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>description</th>
				<th>price</th>
				<th>tax</th>
				<th>image</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($products as $product)

				<tr>
					<td>{{ $product->id }}</td>
					<td>{{ $product->name }}</td>
					<td>{{ $product->description }}</td>
					<td>{{ $product->price }}</td>
					<td>{{ $product->tax }}</td>
					<td> <img src="{{ $product->image }}" alt="" width="150" height="150"> </td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('products.edit', [$product->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['products.destroy', $product->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop

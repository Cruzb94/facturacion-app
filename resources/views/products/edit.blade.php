@extends('layouts.app')
@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($product, array('route' => array('products.update', $product->id), 'method' => 'PUT')) }}

		<div class="mb-3">
			{{ Form::label('name', 'Name', ['class'=>'form-label']) }}
			{{ Form::text('name', null, array('class' => 'form-control', 'required' => 'required')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('description', 'Description', ['class'=>'form-label']) }}
			{{ Form::text('description', null, array('class' => 'form-control', 'required' => 'required')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('price', 'Price', ['class'=>'form-label']) }}
			{{ Form::number('price', null, array('class' => 'form-control', 'required' => 'required')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('tax', 'Tax', ['class'=>'form-label']) }}
			{{ Form::number('tax', null, array('class' => 'form-control', 'required' => 'required')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('image', 'Image', ['class'=>'form-label']) }}
			{{ Form::text('image', null, array('class' => 'form-control', 'required' => 'required')) }}
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop

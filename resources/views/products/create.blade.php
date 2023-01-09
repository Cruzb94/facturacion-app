@extends('layouts.app')

@section('content')
	

	{!! Form::open(['route' => 'products.store']) !!}

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
			{{ Form::label('image', 'Image (Copiar url de la imagen)', ['class'=>'form-label']) }}
			{{ Form::text('image', null, array('class' => 'form-control', 'required' => 'required')) }}
		</div>


		{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}


@endsection
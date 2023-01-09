@extends('layouts.app')

@section('content')

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>name</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)

				<tr>
					<td>{{ $user->user->name }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('generate-invoice', $user->user->id) }}" class="btn btn-primary">Generar Factura</a>
                            
                        </div>

					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

<script>
	$( document ).ready(function() {
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
});
</script>
@stop

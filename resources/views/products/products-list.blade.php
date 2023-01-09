@extends('layouts.app')

@section('content')
<style>
	.card{
    
    width:350px;
    height:400px;
    margin-bottom: 90px;
}

.image{
   width: 100%;
}

.main-heading{
    
    font-size:40px;
    color:red !important;
}

.ratings i{
    
    color:orange;
    
}

.user-ratings h6{
    margin-top:2px;
}

.colors{
    display:flex;
    margin-top:2px;
}

.colors span{
    width:15px;
    height:15px;
    border-radius:50%;
    cursor:pointer;
    display:flex;
    margin-right:6px;
}

.colors span:nth-child(1) {
    
    background-color:red;
    
}

.colors span:nth-child(2) {
    
    background-color:blue;
    
}

.colors span:nth-child(3) {
    
    background-color:yellow;
    
}

.colors span:nth-child(4) {
    
    background-color:purple;
    
}

.btn-danger{
    
    height:48px;
    font-size:18px;
}
</style>


 <div class="row">
 	@foreach($products as $product)
	 	<div class="col-md-4">
	 		<div class="height d-flex justify-content-center align-items-center">
	    
			    <div class="card p-3">
			        
			        <div class="d-flex justify-content-center align-items-center ">
			            
			            <div class="image">
			                <img src="{{ $product->image }}" class="class="img-fluid" width="315">
			            </div>
			        </div>
			        
			        <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
			            <h3>{{ $product->name }}</h3>
			        </div>
			        
			        
			        <p>{{ $product->description }}</p>
			        <p>
			        	<strong>Price: </strong> {{ $product->price }}
			        </p>
			        
			       <a class="btn btn-danger"  href="{{ route('confirm-buy', $product->id) }}">Comprar</a> 
			    </div>
			    
			</div>
	 	</div>
 	@endforeach
 </div>

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

@extends('layouts.mobile')

@section('content')
<div class="container archive">
	<div class="panel panel-default">
	    <div class="panel-heading">Archief overzicht</div>

	    <div class="panel-body">
	        @foreach($reflections as $reflection)
	        	<h1>{{ $reflection->title}}</h1>
	        @endforeach

	        <div id="output"></div>

	        <button id="button">Button</button>
	    </div>
	</div>
</div>

<script>
	$(document).ready(function() {
		
		$("#button" ).click(function() {
  		$.ajax({
        type: "GET",
        url: '/archive/test',
				success: function(reflections) {

					console.log(reflections[0]); 
					//$("#output" ).append(data.reflections[0]);      
        }
    	});
		});   
});
</script>
@endsection

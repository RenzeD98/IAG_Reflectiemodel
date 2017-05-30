@extends('layouts.mobile')

@section('content')
<div class="container archive">
	<div class="panel panel-default">
	    <div class="panel-heading">Archief overzicht</div>

	    <div class="panel-body">
	        @foreach($reflections as $reflection)
	        	<h1>{{ $reflection->title}}</h1>
	        @endforeach
	    </div>
	</div>
</div>
@endsection

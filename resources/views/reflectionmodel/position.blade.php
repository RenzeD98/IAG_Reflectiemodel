@extends('layouts.mobile')

@section('content')
<div class="container reflectiemodel">
    <div class="panel-heading">
      <h1>{{$position->name}}</h1>
    </div>
    <div class="panel-body">
      <h2>{{$position->info}}</h2>
</div>
@endsection

@extends('layouts.mobile')

@section('content')
<div class="container reflectiemodel">
    <div class="panel-heading">
      <h1>{{$radar->name}}</h1>
    </div>
    <div class="panel-body">
      <h2>{{$radar->description}}</h2>
      @foreach($radar->radars_options as $option)
        <div class="reflectionchoice">
          <label for="reflectionchoice">{{$option->name}}</label>
          <div class="arrow"><i class="fa fa-arrow-down" aria-hidden="true"></i></div>
        </div>
        <div class="reflectionchoice-open">
          <p for="reflectionchoice-open">{!!html_entity_decode($option->info)!!}</p>
        </div>
      @endforeach
</div>
@endsection

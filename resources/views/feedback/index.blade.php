@extends('layouts.mobile')

@section('content')
  <div class="container feedback">
    @foreach($reflections as $reflection)
    <div class="panel panel-default">
      <div class="panel-heading">Lijst met uw gegeven feedback</div>
      <div class="panel-body">
          <div class="row reflectionItem">
            <div class="col-md-12 head">
              <img class="img-circle" src="http://placehold.it/50x50" alt="">
              <span>{{ $reflection->title }}</span>
              <span class="time">{{ $reflection->created_at }}</span>
            </div>

            <div class="col-md-12 message">
              <p>{{ $reflection->message }}</p>
            </div>

            <div class="col-md-6">
              <span class="tag">tag</span>
            </div>

            <div class="col-md-6">
              <a href="{{ url('/feedback/' . $reflection->id .'/view') }}"  class="button" style="float:right;">Feedback geven</a>

            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection

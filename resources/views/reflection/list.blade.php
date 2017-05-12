@extends('layouts.mobile')

@section('content')
<div class="container reflection">
    @foreach($reflections as $reflection)
        <div class="row">
 
        <div class="col-md-12 head">
          <img class="img-circle" src="http://placehold.it/50x50" alt="">
          <a href="/reflectie/{{ $reflection->id }}/view">{{ $reflection->title }}</a>
          <span class="date">{{ $reflection->created_at }}</span>
        </div>

          <div class="col-md-12 message">
            <p>{{ $reflection->message }}</p>
          </div>

          <div class="col-md-6">
            @foreach($reflection->tags as $tag)
              <span class="tag">{{ $tag }}</span>
            @endforeach        
          </div>

          <!--<div class="col-md-6">
            <a href="#" class="button" style="float:right;">Feedback geven</a>
          </div>-->

        </div>
    @endforeach
    <a class="addNewItemButton" href="{{ url('reflectie/create') }}">+</a>
</div>
@endsection

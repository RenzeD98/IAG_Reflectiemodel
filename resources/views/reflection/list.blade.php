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

        </div>
    @endforeach
    <a href="{{ url('reflectie/create') }}">
      <i class="fa fa-plus-circle" aria-hidden="true"></i>
    </a>
</div>
@endsection

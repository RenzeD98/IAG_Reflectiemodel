@extends('layouts.mobile')

@section('content')
<div class="container reflection">
    @foreach($reflections as $reflection)

    <div class="panel panel-default feedback">
          <div class="panel-heading title">
            <a href="/reflectie/{{ $reflection->id }}/view">{{ $reflection->title }}</a>
            <span class="date">{{ $reflection->created_at }}</span>
          </div>
          <div class="panel-body">
              <div class="message">
                <p>{{ $reflection->message }}</p>
              </div>
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

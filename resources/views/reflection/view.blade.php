@extends('layouts.mobile')

@section('content')
<div class="container reflection">
  <div class="navigation">
    <a href="/reflecties" class="give-feedback">Terug</a>
    <a href="/reflectie/{{ $reflection->id }}/update" class="give-feedback">Wijzigen</a>
    <a href="/reflectie/{{ $reflection->id }}/delete" class="give-feedback">Verwijderen</a>
  </div>

    <div class="row reflectionItem">
      <div class="col-md-12 head">
        <img class="img-circle" src="http://placehold.it/50x50" alt="">
        <span>{{ $reflection->title }}</span>
        <span class="time" style="float:right;"> {{ $reflection->created_at }} </span>
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
</div>
@endsection

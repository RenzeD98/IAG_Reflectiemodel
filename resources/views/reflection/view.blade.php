@extends('layouts.mobile')

@section('content')
<div class="container reflection">
  <div class="navigation">
    <a href="/reflecties" class="back">
      <i class="fa fa-chevron-left" aria-hidden="true"></i>Terug naar reflecties
    </a>
    <a href="/reflectie/{{ $reflection->id }}/update" class="edit">
      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Wijzigen</a>
    <a href="/reflectie/{{ $reflection->id }}/delete" class="del">
      <i class="fa fa-trash-o" aria-hidden="true"></i>Verwijderen
    </a>
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

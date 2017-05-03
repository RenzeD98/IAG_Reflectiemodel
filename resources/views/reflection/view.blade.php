@extends('layouts.mobile')

@section('content')
<div class="container reflection">
  <div class="navigation">
    <a href="/reflecties" class="give-feedback">Terug</a>
    <a href="/reflectie/{{ $reflection->id }}/edit" class="give-feedback">Wijzigen</a>
    <a href="/reflectie/{{ $reflection->id }}/delete" class="give-feedback">Verwijderen</a>
  </div>

    <div class="row">
      <div class="col-md-12 head">
        <img class="img-circle" src="http://placehold.it/50x50" alt="">
        <p>{{ $reflection->title }}</p>
        <p class="time"></p>
      </div>

      <div class="col-md-12 message">
        <p>{{ $reflection->message }}</p>
      </div>


      <div class="col-md-6">
        <span class="tag">{{ $reflection->title }}</span>
      </div>

    </div>

</div>
@endsection

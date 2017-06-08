@extends('layouts.mobile')

@section('content')
<div class="container">
  @if($reflections->isEmpty())
    <div class="panel panel-default feedback">
      <div class="panel-body">
        <div style="text-align: center" class="emptyState">
          <span class="title">
            Er zijn nog <strong>geen</strong> andere reflecties gevonden
          </span>
          <a href="http://localhost/home">
            <button type="button" class="go-button btn">Ga naar Home</button>
          </a>
    
        </div>
      </div>
    </div>
  @endif
  @foreach($reflections as $reflection)
    <div class="panel panel-default feedback">
      <div class="panel-heading ">
        <div class="col-md-8 title">
          <a href="{{ url('/feedback/' . $reflection->id .'/view') }}">
         Reflectie door 
          {{ $user->firstname }} - {{ $reflection->title }}</a>
        </div>
        <div class="col-md-4 date">
          Geplaats op: {{ $reflection->created_at->format('d m Y')}}
        </div>
      </div>
      <div class="panel-body">
        <div class="message">
          <p>{{ str_limit($reflection->message, $limit = 180, $end = '...') }}
          </p>
        </div>

        <span class="tag">Moet nog worden geautomatiseerd!!</span>

        <a href="{{ url('/feedback/' . $reflection->id .'/view') }}" class="btn save-button" style="float:right">
        <i class="fa fa-pencil" aria-hidden="true"></i> Schrijf Feedback
        </a>
      </div>
    </div>
  @endforeach
</div>
@endsection

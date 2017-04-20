@extends('layouts.mobile')

@section('content')
<div class="container reflection">
  <div class="panel panel-default">
    <div class="panel-heading">Reflectie overzicht</div>
    <div class="panel-body">


        <div class="row">
          <div class="col-md-12">
            <a href="{{ url('reflectie\create') }}">Toevoegen</a>
          </div>
        </div>

    @foreach($reflections as $reflection)
        <div class="row" style="border: 1px #111 solid;">
          <div class="col-md-12">
            <p>{{ $reflection->title }}</p>
          </div>
          <div class="col-md-12">
            <p>{{ $reflection->message }}</p>
          </div>
        </div>
    @endforeach

    </div>
  </div>
</div>
@endsection

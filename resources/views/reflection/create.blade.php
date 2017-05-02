@extends('layouts.mobile')

@section('content')
<div class="container reflection add">
  <div class="panel panel-default">
    <div class="panel-heading">Reflectie toevoegen</div>
    <div class="panel-body">

      <form method="PUT" action="{{ route('reflection.create') }}">
        <input type="text">
        <input type="text">
        <input type="submit">
      </form>

    </div>
  </div>
</div>
@endsection

@extends('layouts.mobile')

@section('content')
<div class="container profile">
  <div class="panel panel-default">
    <div class="header">
        <span class="name">Welkom: {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
    </div>
    <div class="panel-body">

    </div>

  </div>
</div>
@endsection

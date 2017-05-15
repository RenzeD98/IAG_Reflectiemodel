@extends('layouts.mobile')

@section('content')
<div class="container reflectiemodel">
    <div class="reflectioncontainer">

      <div class="topleft">
        <a href="/reflectionmodel/8">
          <img src="{{ URL::asset('images/custom.png') }}" alt="" class="custom">
        </a>
        <a href="/reflectionmodel/7">
          <img src="{{ URL::asset('images/transparent.png') }}" alt="" class="transparant">
        </a>
      </div>

      <div class="topright">
        <a href="/reflectionmodel/1">
          <img src="{{ URL::asset('images/theory.png') }}" alt="" class="theorie">
        </a>
        <a href="/reflectionmodel/3">
          <img src="{{ URL::asset('images/model.png') }}" alt="" class="model">
        </a>
      </div>

      <div class="bottomleft">
        <a href="/reflectionmodel/6">
          <img src="{{ URL::asset('images/feedback.png') }}" alt="" class="feedback">
        </a>
        <a href="/reflectionmodel/5">
          <img src="{{ URL::asset('images/methodology.png') }}" alt="" class="methodiek">
        </a>
      </div>

      <div class="bottomright">
        <a href="/reflectionmodel/2">
          <img src="{{ URL::asset('images/focus.png') }}" alt="" class="gerichtheid">
        </a>
        <a href="/reflectionmodel/4">
          <img src="{{ URL::asset('images/strategy.png') }}" alt="" class="strategie">
        </a>
      </div>

    </div>
</div>
@endsection

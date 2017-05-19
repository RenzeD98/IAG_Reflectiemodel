@extends('layouts.mobile')

@section('content')
  <div class="container">
    @foreach($reflections as $reflection)
    <div class="panel panel-default feedback">
          <div class="panel-heading title">
            <span class="title">{{ $reflection->title }}</span>
            <span class="date">{{ $reflection->created_at }}</span>
          </div>
          <div class="panel-body">
              <div class="message">
                <p>{{ $reflection->message }}</p>
              </div>
                  <span class="tag">Test Tag</span>
              <a href="{{ url('/feedback/' . $reflection->id .'/view') }}">
              <button type="submit" class="btn save-button" style="float:right;"><i class="fa fa-pencil" aria-hidden="true"></i> Schrijf Feedback</button>
              </a>
          </div>
      </div>
    @endforeach
  </div>
@endsection

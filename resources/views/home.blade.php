@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welkom {{ Auth::user()->firstname }} {{ Auth::user()->lastname }} </div>

                <div class="panel-body">
                  <form class="" action="{{ url('/spraak') }}" method="get">
                      <button type="submit" class="btn btn-primary">Spraak Feedback</button>
                  </form>
                  <br />
                  <form class="" action="{{ url('/feedback') }}" method="get">
                      <button type="submit" class="btn btn-primary">Tekst Feedback</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

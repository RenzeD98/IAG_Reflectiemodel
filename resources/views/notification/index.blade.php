@extends('layouts.mobile')

@section('content')
  <div class="container notification">
    <div class="panel panel-default">
      <div class="panel-heading">Notificaties</div>
      <div class="panel-body">

        <a href="{{ url('/notification/1/view') }}">
          <div class="row notificationItem">
            <div class="col-xs-2 head">
              <img class="img-circle" src="http://placehold.it/50x50" alt="">
            </div>

            <div class="col-xs-7 title">
              <span class="title">Feedback: Jeffrey</span>
            </div>

            <div class="col-xs-3 date">
              <span class="title">Date</span>
            </div>
          </div>
        </a>

        <a href="{{ url('/notification/1/view') }}">
          <div class="row notificationItem">
            <div class="col-xs-2 head">
              <img class="img-circle" src="http://placehold.it/50x50" alt="">
            </div>

            <div class="col-xs-7 title">
              <span class="title">Feedback: Jeffrey</span>
            </div>

            <div class="col-xs-3 date">
              <span class="title">Date</span>
            </div>
          </div>
        </a>
        
      </div>
    </div>
  </div>
@endsection

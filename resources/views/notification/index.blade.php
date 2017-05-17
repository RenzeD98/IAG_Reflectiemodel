@extends('layouts.mobile')

@section('content')

<div class="container notification">
  <div class="panel panel-default">
    <div class="panel-heading">Notificaties</div>
    <div class="panel-body">

      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#ontvangen">Ontvangen</a></li>
        <li><a data-toggle="tab" href="#gelezen">Gelezen</a></li>
      </ul>

      <div class="tab-content">
        <div id="ontvangen" class="tab-pane fade in active">
          @foreach($unread as $ur)
            <a href="/feedback/{{ $ur['data']['reflection'] }}/view">
              <div class="row notificationItem">
                <div class="col-xs-2 head">
                  <img class="img-circle" src="http://placehold.it/50x50" alt="">
                </div>
              
                  <div class="col-xs-7">
                    <span class="title">{{ $ur['data']['title'] }}</span>
                  </div>

                  <div class="col-xs-3">
                    <span class="message">{{ $ur['data']['message'] }}</span>
                  </div>
              </div>
            </a>
          @endforeach
        </div>

        <div id="gelezen" class="tab-pane fade">
          @foreach($read as $r)
            <a href="/feedback/{{ $r['data']['reflection'] }}/view">
              <div class="row notificationItem">
                <div class="col-xs-2 head">
                  <img class="img-circle" src="http://placehold.it/50x50" alt="">
                </div>
              
                  <div class="col-xs-7">
                    <span class="title">{{ $r['data']['title'] }}</span>
                  </div>

                  <div class="col-xs-3">
                    <span class="message">{{ $r['data']['message'] }} </span>
                  </div>
              </div>
            </a>
          @endforeach
          
        </div>
      </div>
      
    </div>
  </div>
</div>
@endsection

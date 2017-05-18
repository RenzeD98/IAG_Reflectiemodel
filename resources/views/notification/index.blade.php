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
          
          @if(empty($unread))
            <span>U heeft nog geen ongelezen berichten</span>
          @else
            @foreach($unread as $ur)   
              <div class="row notificationItem unread">
                <div class="col-xs-3 head">
                  <img class="img-circle" src="http://placehold.it/50x50" alt="">
                </div>
                  <div class="col-xs-6">
                    <a href="/feedback/{{ $ur['data']['reflection'] }}/view">
                      <span class="title">{{ $ur['data']['title'] }}</span>
                    </a>
                  </div>
                  <div class="col-xs-3 column markAsRead">
                    <a href="/notification/{{$ur->id}}/markAsRead" class="">
                      <span>Markeren als gelezen</span>
                    </a>
                  </div>
                </div>
            @endforeach
          @endif
        </div>

        <div id="gelezen" class="tab-pane fade">
          @if(empty($read))
            <span>U heeft nog geen berichten</span>
          @else
            @foreach($read as $r)    
              <div class="row notificationItem read">
                <div class="col-xs-3 head">
                  <img class="img-circle" src="http://placehold.it/50x50" alt="">
                </div>
                <div class="col-xs-9">
                 <a href="/feedback/{{ $ur['data']['reflection'] }}/view">
                    <span class="title">{{ $ur['data']['title'] }}</span>
                  </a>
                </div>
              </div>   
            @endforeach
          @endif
        </div>
      </div>
      
    </div>
  </div>
</div>
@endsection

@extends('layouts.mobile')
@section('content')

<div class="container notification">
  <div class="panel panel-default">
    <div class="panel-heading">Notificaties</div>
    <div class="panel-body">
      <ul class="nav nav-tabs">
        <li class="active">
          <a data-toggle="tab" href="#ontvangen">Ontvangen</a>
        </li>
        <li>
          <a data-toggle="tab" href="#gelezen">Gelezen</a>
        </li>
      </ul>
      <div class="tab-content">
        <div id="ontvangen" class="tab-pane fade in active">
          @if(empty($unread))
            <div class="row">
              <div class="col-xs-12">
                <p>U heeft nog geen berichten ontvangen</p>
              </div>
            </div>
          @else
            @foreach($unread as $ur)   
              <div class="row notificationItem unread">
                <div class="col-md-6">
                  <a href="/feedback/{{ $ur['data']['reflection'] }}/view">
                    {{-- <span class="title">{{ $ur['data']['title'] }} - Van {{ $sender->firstname }}</span> --}}
                    <span class="title">Feedback ontvangen van {{ $sender->firstname }}</span>
                  </a>
                </div>
                <div class="col-md-6 markAsRead">
                  <a href="/notification/{{$ur->id}}/markAsRead" class="button">Gelezen</a>
                </div>
              </div>
            @endforeach
          @endif
        </div>

        <div id="gelezen" class="tab-pane fade">
          @if(empty($read))
            <div class="row">
              <div class="col-xs-12">
                <p>U heeft nog geen berichten ontvangen</p>
              </div>
            </div>
          @else
            @foreach($read as $r)    
              <div class="row notificationItem read">
                <div class="col-md-12">
                  <a href="/feedback/{{ $r['data']['reflection'] }}/view">
                    {{-- <span class="title">{{ $ur['data']['title'] }} - Van {{ $sender->firstname }}</span> --}}
                    <span class="title">Feedback ontvangen van {{ $sender->firstname }}</span>
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

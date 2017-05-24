@extends('layouts.mobile')

@section('content')
<div class="container profile">
  <div class="panel panel-default">
    <div class="header">
            <!-- <img src="http://lumee-shop.ro/wp-content/uploads/2014/06/buddy.png" alt="Profiel afbeelding"> -->
            <span class="name">Welkom: {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
        <!-- <span class="function">IAG hulpverlener</span> -->
    </div>

    <div class="row row-centered">
      <a href="{{ url('/profile/mydetails') }}">
        <div class="col-xs-6 col-centerd column">
             <img src="{{ URL::asset('icons/ProfileIcon.svg') }}" alt="Reflectie icoon">
             <span class="subtitle">Mijn gegevens</span>
        </div>
      </a>
      <a href="{{ url('profile/contacts') }}">
        <div class="col-xs-6 col-centerd column col-xs-offset-2">
            <img src="{{ URL::asset('icons/ContactIcon.svg') }}" alt="Reflectie icoon">
            <span class="subtitle">Mijn Contacten</span>
        </div>
      </a>
    </div>

    <div class="row row-centered">
      <a href="{{ url('profile/agenda') }}">
        <div class="col-xs-6 col-centerd column">
          <img src="{{ URL::asset('icons/AgendaIcon.svg') }}" alt="Reflectie icoon">
          <span class="subtitle">Mijn Agenda</span>
        </div>
      </a>

      <a href="{{ url('profile/settings') }}">
        <div class="col-xs-6 col-centerd column col-xs-offset-2">
          <img src="{{ URL::asset('icons/SettingsIcon.svg') }}" alt="Reflectie icoon">
            <span class="subtitle">Instellingen</span>
        </div>
      </a>
    </div>
        </div>
    </div>
  </div>
</div>
@endsection

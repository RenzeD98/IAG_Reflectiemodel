@extends('layouts.mobile')

@section('content')
<div class="container profile">
    <div class="panel panel-default">
        <div class="header">
            <a href="{{ url('profiel') }}">
                <img src="https://pbs.twimg.com/profile_images/689125864731242496/DGU2F799.jpg" alt="Profiel afbeelding">
                <span class="name">Welkom: {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
            </a>
            <!-- <span class="function">IAG hulpverlener</span> -->
        </div>

        <div class="row row-centered">
            <a href="{{ url('/profiel/gegevens') }}">
                <div class="col-xs-6 col-centerd column">
                     <img src="{{ URL::asset('icons/ProfileIcon.svg') }}" alt="Reflectie icoon">
                     <span class="subtitle">Mijn gegevens</span>
                </div>
            </a>
            <a href="{{ url('profiel/contacten') }}">
                <div class="col-xs-6 col-centerd column col-xs-offset-2">
                    <img src="{{ URL::asset('icons/ContactIcon.svg') }}" alt="Reflectie icoon">
                    <span class="subtitle">Mijn Contacten</span>
                </div>
            </a>
        </div>

        <div class="row row-centered">
             <a href="{{ url('/profiel/agenda') }}">
                <div class="col-xs-6 col-centerd column">
                     <img src="{{ URL::asset('icons/AgendaIcon.svg') }}" alt="Reflectie icoon">
                     <span class="subtitle">Mijn Agenda</span>
                </div>
            </a>
            <a href="{{ url('/profiel/instellinge') }}">
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

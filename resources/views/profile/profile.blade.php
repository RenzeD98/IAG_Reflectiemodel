@extends('layouts.mobile')

@section('content')
<div class="container profile">
    <div class="panel panel-default">
        <div class="header">
            <a href="">
                <img src="https://pbs.twimg.com/profile_images/689125864731242496/DGU2F799.jpg" alt="Profiel afbeelding">
                <span class="name">Welkom: {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
            </a>
            <span class="function">IAG hulpverlener</span>
        </div>

        <div class="row row-centered">

            <a href="{{ url('/profile/mydetails') }}">
                <div class="col-xs-4 col-centered column">
                     <img src="icons/ProfileIcon.svg" alt="Reflectie icoon">
                     <span class="subtitle">Mijn gegevens</span>
                </div>
            </a>

            <a href="{{ url('/profile/contacts') }}">
                <div class="col-xs-4 col-centered column">
                    <img src="icons/ContactIcon.svg" alt="Reflectie icoon">
                    <span class="subtitle">Mijn Contacten</span>
                </div>
            </a>
        </div>

        <div class="row row-centered">
             <a href="{{ url('/profile/agenda') }}">
                <div class="col-xs-4 col-centered col-xs-offset-1 column">
                     <img src="icons/AgendaIcon.svg" alt="Reflectie icoon">
                     <span class="subtitle">Mijn Agenda</span>
                </div>
            </a>
            <a href="{{ url('/profile/settings') }}">
                <div class="col-xs-4 col-centered column">
                    <img src="icons/SettingsIcon.svg" alt="Reflectie icoon">
                    <span class="subtitle">App Instellingen</span>
                </div>
            </a>


                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@extends('layouts.mobile')

@section('content')
<div class="container profile">
    <div class="panel panel-default">
        <div class="header">
            <a href="{{ url('profiel') }}">
                <img src="https://pbs.twimg.com/profile_images/689125864731242496/DGU2F799.jpg" alt="Profiel afbeelding">
                <span class="name">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
            </a>
            <span class="function">IAG hulpverlener</span> 
        </div>
        
        <div class="row row-centered">

            <a href="{{ url('reflectie') }}">
                <div class="col-xs-4 col-centered column">  
                     <img src="icons/FeedbackIconQuestion.svg" alt="Reflectie icoon">
                     <span class="subtitle">Mijn gegevens</span>
                </div>
            </a>

            <a href="{{ url('reflectiemodel') }}">
                <div class="col-xs-4 col-centered column"> 
                    <img src="icons/IAGModelIcon.svg" alt="Reflectie icoon">
                    <span class="subtitle">Mijn Contacten</span>
                </div>
            </a>      
        </div>
        
        <div class="row row-centered">
             <a href="{{ url('feedback') }}">
                <div class="col-xs-4 col-centered col-xs-offset-1 column">  
                     <img src="icons/FeedbackIcon.svg" alt="Reflectie icoon">
                     <span class="subtitle">Mijn Agenda</span>
                </div>
            </a>
            <a href="{{ url('archief') }}">
                <div class="col-xs-4 col-centered column"> 
                    <img src="icons/SettingsIcon.svg" alt="Reflectie icoon">
                    <span class="subtitle">Instellingen</span>
                </div>
            </a>
                    

                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection

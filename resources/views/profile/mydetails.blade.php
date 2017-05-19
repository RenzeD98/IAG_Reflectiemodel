@extends('layouts.mobile')

@section('content')
<div class="container profile">
  <div class="panel panel-default">
    <div class="header">
      <a href="">
          <img src="https://pbs.twimg.com/profile_images/689125864731242496/DGU2F799.jpg" alt="Profiel afbeelding">
          <span class="name">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
      </a>
      <!--<span class="function">IAG hulpverlener</span>-->
    </div>
    <div class="panel panel-body">
      @if (Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>
      @endif
      <div class="row row-centered">
        Hier kunt u uw accountgegevens aanpassen. Uw account gegevens zijn strikt persoonlijk. Het niet mogelijk om uw voor/achternaam te wijzigen.
        <form method="post" action="mydetails">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group {{ $errors->has('firstname') ? ' has-error' : '' }}">
              <label for="firstname">Voornaam:</label>
              <input required disabled type="text" name="firstname" id="firstname" value="{{$user->firstname}}">
            </div>
            <div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
                <label for="lastname">Achternaam:</label>
                <input required disabled type="text" name="lastname" value="{{$user->lastname}}">
            </div>
            <div class="form-group {{ $errors->has('function') ? ' has-error' : '' }}">
                <label for="function">Functie:</label>
                <input  type="text" name="function" id="function" value="">
            </div>
            <div class="form-group {{ $errors->has('experience') ? ' has-error' : '' }}">
                <label for="experience">Jaren ervaring met IAG Model:</label>
                <input  type="text" name="experience" id="experience" value="">
            </div>
            <hr>
            <legend>Privegegevens:</legend>
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email">E-Mail:</label>
                <input  type="text" name="email" id="email" value="">
            </div>
            <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                <label for="phone">Mobielenummer:</label>
                <input  type="text" name="phone" value="" id="phone">
            </div>
            <button type="submit" class="btn button save-button" style="float:right;"><i class="fa fa-floppy-o" aria-hidden="true"></i> Opslaan</button>
        
        </form>
        </div>
      </div>
    </div>
</div>
@endsection

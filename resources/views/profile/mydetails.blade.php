@extends('layouts.mobile')

@section('content')
<div class="container profile">
  <div class="panel panel-default">
    <div class="header">
      <span class="name">
        {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
      </span>

      <!--<span class="function">IAG hulpverlener</span>-->
    </div>
    <div class="panel-body">
      @if (count($errors) > 0)
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      @if (Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>
      @endif
      <div class="row">
        Hier kunt u uw accountgegevens aanpassen. Uw account gegevens zijn strikt persoonlijk. Het niet mogelijk om uw voor/achternaam te wijzigen.
        <form method="post" action="mydetails">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <h2>Persoonlijk:</h2>

            <div class="form-group {{ $errors->has('firstname') ? ' has-error' : '' }}">
              <label for="firstname">Voornaam</label>
              <input disabled type="text" name="firstname" id="firstname" value="{{$user->firstname}}" class="form-control">
            </div>

            <div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
                <label for="lastname">Achternaam</label>
                <input  disabled type="text" name="lastname" 
                  value="{{$user->lastname}}" class="form-control">
            </div>

            <div class="form-group {{ $errors->has('function') ? ' has-error' : '' }}">
                <label for="function">IAG Functie</label>
                <input  type="text" name="function" id="function" class="form-control" value="{{$user->function}}">
            </div>

            <div class="form-group {{ $errors->has('experience') ? ' has-error' : '' }}">
                <label for="experience">Jaren ervaring met IAG Reflectiemodel</label>
                <input  type="text" name="experience" id="experience" class="form-control" value="{{$user->experience}}">
            </div>

              <h2>Contact:</h2>

              <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email">E-Mail</label>
                  <input  disabled type="text" name="email" id="email" class="form-control"
                  value="{{$user->email}}" >
              </div>

              <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                  <label for="phone">Mobiele nummer</label>
                  <input  type="text" name="phone" id="phone" class="form-control"
                  value="{{$user->phone}}">
              </div>

            <button type="submit" class="btn button save-button" style="float:right;"><i class="fa fa-floppy-o" aria-hidden="true"></i> Opslaan</button>
        
        </form>
        </div>
      </div>
    </div>
</div>
@endsection

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
                  In het onderstaande scherm kunt u uw accountgegevens aanpassen. Omdat uw account strikt persoonlijk is, is het niet mogelijk uw voor/achternaam meer te wijzigen.
                  @foreach ($users as $User)
                    <form class="user-panel" method="post">
                        <div class="form-group">
                            <label for="email">Voornaam:</label>
                            <input required disabled type="text" name="firstname" value="{{$User->firstname}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Achternaam:</label>
                            <input required disabled type="text" name="lastname" value="{{$User->lastname}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Functie:</label>
                            <input required type="text" name="function" value="">
                        </div>
                        <div class="form-group">
                            <label for="email">Jaren ervaring met IAG Model:</label>
                            <input required type="text" name="experiance" value="">
                        </div>
                        <hr>
                        <span class="span-heading">Privegegevens:</span>
                        <div class="form-group">
                            <label for="email">E-Mail:</label>
                            <input required type="text" name="email" value="">
                        </div>
                        <div class="form-group">
                            <label for="email">Mobielenummer:</label>
                            <input required type="text" name="phone" value="">
                        </div>
                        <button type="submit" name="button" class="btn save-button button-left"><i class="fa fa-floppy-o" aria-hidden="true"></i> Opslaan</button>
                    </form>
                    @endforeach
        </div>
    </div>
</div>
@endsection

@extends('layouts.mobile')

@section('content')
<div class="container profile contacts">
    <div class="panel panel-default">
        <div class="header">
            <a href="{{ url('profiel') }}">
                <img src="https://pbs.twimg.com/profile_images/689125864731242496/DGU2F799.jpg" alt="Profiel afbeelding">
                <span class="name">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
            </a>
            <span class="function">IAG hulpverlener</span> 
        </div>
        <div class="contactList">
          <form class="ui-filterable">
            <input id="myFilter" data-type="search">
          </form>

           <ul data-role="listview" data-filter="true" data-input="#myFilter">
              <li><a href="#">Adele</a></li>
              <li><a href="#">Billy</a></li>
              <li><a href="#">Calvin</a></li>
            </ul>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
     <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
</div>
@endsection

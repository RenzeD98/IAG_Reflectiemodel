@extends('layouts.mobile')

@section('content')
<div class="container feedback">
   <div class="navigation">
    <a href="/feedback" class="button feedback">Terug naar reflecties</a>
  </div>

  @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
  @endif

  <div class="panel panel-default">
    <div class="panel-heading">Reflectie titel</div>
    <div class="panel-body">
      <div class="row reflectionItem">
        <div class="col-md-12 head">
          <img class="img-circle" src="http://placehold.it/50x50" alt="">
          <span class="title">{{ $reflection->title }}</span>
          <span class="time">Geplaatst op: 23-11-2019</span>
        </div>

        <div class="col-md-12 message">
          <p>{{ $reflection->message }}</p>
        </div>

        <div class="col-md-6">
          <span class="tag">Tags</span>
        </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default feedbackForm">
    <div class="panel-heading">Feedback geven op reflectie</div>
    <div class="panel-body">
      <form method="POST" action="/feedback/create">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ $reflection->id }}"> 
        <input type="hidden" name="user_id" value="{{ $reflection->user_id }}"> 
        <div class="form-group">
          <label for="title">Titel</label>
          <input type="text" class="form-control" id="title" placeholder="Titel" name="title">
        </div>
        <div class="form-group">
          <label for="reflection">Feedback:</label>
          <textarea class="form-control" rows="5" id="reflection" name="message"></textarea>
        </div>
        
        <button type="submit" class="button feedback" style="float:right;">Verstuur</button>
      </form>
      </div 
    </div>
  </div>

  <div class="panel panel-default recentFeedback">
    <div class="panel-heading">Recente feedback</div>
    <div class="panel-body">
      <div class="sorting">
        <form method="GET" action="/feedback/view/">      
          <span class="">Sorteren op: </span> 
          <select name="sorting">
            <option value="recent">Meest recent</option>
            <option value="rating">Best beoordeeld</option>
          </select>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <button type="submit" class="button feedback sort">Sorteer</button>
        </form>
      </div>

      @foreach($feedback as $fb)
      <div class="row commentItem">      
        <div class="col-md-1 col-xs-2 rating" >+3</div>
        <div class="col-md-11 col-xs-10 content">
          <div class="head">     
            <div class="rateComment" style="float:right;">
              <button class="rate down">-1</button>
              <button class="rate up">+1</button>
            </div>
          </div>
          <div class="content">
            <span class="title">{{ $fb->title }}</span>
            <p class="description">{{ $fb->messages }}</p>
          </div>   
      </div>
    </div>
  @endforeach

</div>
@endsection

@extends('layouts.mobile')

@section('content')
<div class="container feedback">
  @if (Session::has('message'))
    <div class="alert alert-success">{{ Session::get('message') }}</div>
  @endif
  <div class="panel panel-default">
    <div class="panel-heading title">{{ $reflection->title }}
      <span class="date">{{ $reflection->created_at }}</span>
    </div>
    <div class="panel-body">
        <div class="message">
          <p>{{ $reflection->message }}</p>
        </div>
          @foreach($reflection->tags as $tag)
            <span class="tag">{{ $tag }}</span>
          @endforeach
    </div>
  </div>

  <div class="panel panel-default feedbackForm">
    <div class="panel-heading">Feedback geven op reflectie</div>
    <div class="panel-body">
      <form method="POST" action="/feedback/create">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ $reflection->id }}">
        <input type="hidden" name="user_id" value="{{ $reflection->user_id }}">
        <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
          <label for="title">Titel:</label>
          <input type="text" class="form-control" id="title" placeholder="Titel" name="title" minlength="1" maxlength="255" value="{{ old('title') }}">
        </div>
        <div class="form-group {{ $errors->has('message') ? ' has-error' : '' }}">
          <label for="reflection">Feedback:</label>
          <textarea class="form-control" rows="5" id="reflection" name="message"
          >{{ old('message') }}</textarea><!--minlength="1" maxlength="5000"-->
        </div>

        <button type="submit" class="btn save-button" style="float:right;"><i class="fa fa-floppy-o" aria-hidden="true"></i> Verstuur</button>
      </form>
      </div>
    </div>
  </div>

  <div class="panel panel-default recentFeedback">
    <div class="panel-heading">Recente feedback</div>
    <div class="panel-body">
      <!--
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
      -->
      @foreach($reflection->feedback as $fb)
      <div class="row commentItem">
        <div class="col-md-1 col-xs-2 rating" >+3</div>
        <div class="col-md-11 col-xs-10 content">
          <span class="title">{{ $fb->title }} - </span>
          <span class="user">{{ $fb->user->id }}</span>
          <span class="date">{{ $fb->created_at }}</span>
          <p class="description">{{ $fb->messages }}</p>
          <!--<div class="head">
            <div class="rateComment" style="float:right;">
              <button class="rate down">-1</button>
              <button class="rate up">+1</button>
            </div>
          </div>-->
      </div>
    </div>
  @endforeach
</div>
@endsection

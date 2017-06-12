@extends('layouts.mobile')

@section('content')
<div class="container feedback">
  @if (Session::has('message'))
    <div class="alert alert-success">{{ Session::get('message') }}</div>
  @endif
  <div class="panel panel-default">
    <div class="panel-heading title">{{ $reflection->title }}
      <span class="date">
        Geplaats op: {{ $reflection->created_at->format('d m Y')}}
      </span>
    </div>
    <div class="panel-body">
        <div class="message">
          <p>{{ $reflection->message }}</p>
        </div>
          @foreach($reflection->tags as $tag)
            <span class="tag">
              <i class="fa fa-tag" aria-hidden="true" style="margin-right:3px;"></i>{{ $tag }}
            </span>
          @endforeach
    </div>
  </div>

    <div class="panel panel-default recentFeedback">
      <div class="panel-heading">Recente feedback</div>
      <div class="panel-body">
        @if($reflection->feedback->isEmpty())
          <div class="emptyState" style="text-align: center;">
            <span class="title">
              Er is nog <strong>geen</strong> feedback geschreven
            </span>

          </div>
        @endif
        @foreach($reflection->feedback as $fb)
        <div class="row commentItem">
          <div class="content">
            <div class="col-xs-8 ">
             <span class="title">{{ $fb->title }} - Feedback van: 
              <span class="user">{{ $user->firstname }}</span>
              </span>
            </div>
            <div class="col-xs-4 date">
              Geplaatst op: {{ $reflection->created_at->format('d m Y')}}
            </div> 
            <div class="col-md-12 description"><p>{{ $fb->messages }}</p></div>  
        </div>
      </div>
    @endforeach
  </div>
</div>
    <div class="panel panel-default feedbackForm" id="feedbackForm">
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
@endsection
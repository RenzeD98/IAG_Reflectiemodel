@extends('layouts.mobile')

@section('content')
<div class="container reflection add">
  <div class="navigation">
    <a href="/reflecties" class="button"><i class="fa fa-chevron-left" aria-hidden="true"></i>Terug naar reflecties</a>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">Reflectie toevoegen</div>
    <div class="panel-body">
     <form method="POST" action="/reflectie/create">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
          <label for="title">Titel</label>
          <input type="text" class="form-control" id="title" placeholder="Titel" name="title"
          minlength="1" maxlength="255" value="{{ old('title') }}">
        </div>
         <div class="form-group {{ $errors->has('message') ? ' has-error' : '' }}">
          <label for="reflection">Reflectie:</label>
          <textarea class="form-control" rows="5" id="reflection" name="message" minlength="1">{{ old('message') }}</textarea>
        </div>
        <div class="form-group {{ $errors->has('tags') ? ' has-error' : '' }}">
          <label for="tags">Tags, gescheiden met komma's </label>
          <input type="text" class="form-control" id="tags" placeholder="Tag1, tag2, tag3" name="tags" maxlength="255" value="{{ old('tags') }}">
        </div>
        
        <button type="submit" class="button" style="float:right;">Geef feedback!</button>
      </form>
    </div>
  </div>
</div>
@endsection

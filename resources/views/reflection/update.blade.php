@extends('layouts.mobile')

@section('content')
<div class="container reflection add">
  <div class="panel panel-default">
    <div class="panel-heading">Reflectie wijzigen</div>
    <div class="panel-body">
     <form method="POST" action="/reflectie/update">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label for="title">Titel</label>
          <input type="text" class="form-control" id="title" placeholder="Titel" name="title" value="{{ $reflection->title }}">
        </div>
         <div class="form-group">
          <label for="reflection">Reflectie:</label>
          <textarea class="form-control" rows="5" id="reflection" name="message">{{ $reflection->message }}</textarea>
        </div>
        <div class="form-group">
          <label for="tags">Tags, gescheiden met komma's </label>
          <input type="text" class="form-control" id="tags" placeholder="Tag1, tag2, tag3" name="tags" value="{{ $reflection->tags }}">
        </div>
        
        <input type="hidden" name="id" value="{{ $reflection->id }}">

        <button type="submit" class="btn btn-default">Verstuur</button>
      </form>
    </div>
  </div>
</div>
@endsection

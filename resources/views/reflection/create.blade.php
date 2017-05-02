@extends('layouts.mobile')

@section('content')
<div class="container reflection add">
  <div class="panel panel-default">
    <div class="panel-heading">Reflectie toevoegen</div>
    <div class="panel-body">



     <form method="POST" action="/reflectie/create">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label for="title">Titel</label>
          <input type="text" class="form-control" id="title" placeholder="Titel">
        </div>
         <div class="form-group">
          <label for="reflection">Reflectie:</label>
          <textarea class="form-control" rows="5" id="reflection"></textarea>
        </div>
        <div class="form-group">
          <label for="tags">Tags, gescheiden met komma's </label>
          <input type="text" class="form-control" id="tags" placeholder="Tag1, tag2, tag3">
        </div>
        
        <button type="submit" class="btn btn-default">Verstuur</button>
      </form>




    </div>
  </div>
</div>
@endsection

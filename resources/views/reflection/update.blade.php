@extends('layouts.mobile')

@section('content')
<div class="container reflection add">
  <div class="panel panel-default">
    <div class="panel-heading title">Reflectie wijzigen</div>
    <div class="panel-body">
     <form method="POST" action="/reflectie/update">
        @if (Session::has('message'))
          <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ $reflection->id }}">
        <div class="form-group">
          <label for="title">Titel*</label>
          <input type="text" class="form-control" id="title" placeholder="Titel" name="title" value="{{ $reflection->title }}">
        </div>
         <div class="form-group">
          <label for="reflection">Reflectie*</label>
          <textarea class="form-control" rows="5" id="reflection" name="message">{{ $reflection->message }}</textarea>
        </div>
        <div class="form-group">
          <label for="tags">Tags, gescheiden met komma's</label>
          <input type="text" class="form-control" id="tags" placeholder="Tag1, tag2, tag3" name="tags" value="{{ $reflection->tags }}">
        </div>
        
        <button type="submit" class="btn button update" style="float:right;">Update reflectie</button>
      </form>
    </div>
  </div>
</div>
@endsection

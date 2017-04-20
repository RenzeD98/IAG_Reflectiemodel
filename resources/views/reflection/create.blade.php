@extends('layouts.mobile')

@section('content')
<div class="container reflection add">
  <div class="panel panel-default">
    <div class="panel-heading">Reflectie toevoegen</div>
    <div class="panel-body">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="title">
        <input type="text" name="message">
        <input type="submit">
      </form>

    </div>
  </div>
</div>
@endsection

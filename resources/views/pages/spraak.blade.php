@extends('layouts.mobile')

@section('content')
<div class="container talk">
  <div class="panel panel-default">
      <div class="panel-heading">Spraak feedback</div>

      <div class="panel-body">
          <form action="post">
            <h5>Hier het onderwerpsnaam ofzo</h5>
            <input type="text" name="feedback_title" placeholder="hier titel">
            <h5>Hier je feedback</h5>
            <input type="text" name="feedback_feedback" placeholder="hier text"> <br><br>
            <input type="submit">
          </form>
      </div>
  </div>
</div>
@endsection

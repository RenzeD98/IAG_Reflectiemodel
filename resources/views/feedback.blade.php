@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Feedbackformuliertje</div>

                <div class="panel-body">
                    <form method="post">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <h5>Hier het onderwerpsnaam ofzo</h5>
                      <input type="text" name="title" placeholder="hier titel">
                      <h5>Hier je feedback</h5>
                      <input type="text" name="message" placeholder="hier tekst"> <br><br>
                      <button type="submit">Verzenden</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

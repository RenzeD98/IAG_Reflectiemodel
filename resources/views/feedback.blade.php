@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Feedbackformulier</div>

                <div class="panel-body">
                    <form method="post">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <h5>Onderwerp:</h5>
                      <input type="text" name="title" placeholder="hier titel">
                      <h5>Feedback:</h5>
                      <textarea name="message" id="" cols="10" rows="10"></textarea><br><br>
                      <button type="submit">Verzenden</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

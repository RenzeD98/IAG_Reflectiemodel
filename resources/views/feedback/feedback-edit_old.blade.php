@extends('layouts.app')

@section('content')
<div class="container feedback edit">
    <div class="row row-centered">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Feedback wijzigen</div>
                <div class="panel-body">
                    @if (Session::has('message'))
                      <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif
                    <form action="POST">
                      <h5>Hier het onderwerpsnaam ofzo</h5>
                      <input type="text" name="feedback_title" placeholder="hier titel">
                      <h5>Hier je feedback</h5>
                      <input type="text" name="feedback_feedback" placeholder="hier text"> <br><br>
                      <input type="submit">
                    <form action="post">

                      <a class="btn btn-success" href="#">
                      <i class="fa fa-microphone" aria-hidden="true"></i>
                      Spraak opnemen
                      </a>

                    </form>
                    <br />
                    <form class="" action="{{ url('/home') }}" method="get">
                        <button type="submit" class="btn btn-primary">Terug naar Home</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

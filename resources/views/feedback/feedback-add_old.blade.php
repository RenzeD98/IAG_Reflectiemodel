@extends('layouts.app')

@section('content')
<div class="container feedback add">
    <div class="row row-centered">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Feedback toevoegen</div>
                <div class="panel-body">
                    @if (Session::has('message'))
                      <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif
                    <form method="post">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <h5>Onderwerp:</h5>
                      <input type="text" name="title" placeholder="hier titel">
                      <h5>Feedback:</h5>
                      <textarea name="message" id="" cols="100" rows="10"></textarea><br><br>
                      <button class="btn btn-primary" type="submit">Verzenden</button>
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

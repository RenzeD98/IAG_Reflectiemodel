@extends('layouts.app')

@section('content')
<div class="container feedback add">
    <div class="row row-centered">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Feedback toevoegen</div>

                <div class="panel-body">
                    <form action="POST">
                      <h5>Hier het onderwerpsnaam ofzo</h5>
                      <input type="text" name="feedback_title" placeholder="hier titel">
                      <h5>Hier je feedback</h5>
                      <input type="text" name="feedback_feedback" placeholder="hier text"> <br><br>
                      <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

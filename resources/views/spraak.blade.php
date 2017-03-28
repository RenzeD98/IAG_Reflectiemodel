@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Spraak feedback</div>

                <div class="panel-body">
                    <form action="post">
                      
                      <a class="btn btn-success" href="#">
                      <i class="fa fa-microphone" aria-hidden="true"></i>
                      Spraak opnemen
                      </a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

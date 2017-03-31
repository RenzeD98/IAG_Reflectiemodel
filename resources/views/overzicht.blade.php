@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Overzicht feedback</div>

                <div class="panel-body">
                @foreach ($messages as $Message)
                  <p>{{ $Message->message }}</p>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

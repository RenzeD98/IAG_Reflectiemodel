@extends('layouts.app')

@section('content')
<div class="container home">
    <div class="panel panel-default">
        <div class="panel-heading">
              Welkom {{ Auth::user()->firstname }} {{ Auth::user()->lastname }} 
        </div>
        <br />
        <div class="row">
            <a href="{{ url('feedback') }}">
                <div class="col-xs-4 col-xs-offset-1 column">  
                     <i class="fa fa-forward fa-5x" aria-hidden="true"></i>
                     <span class="subtitle">Feedback</span>
                </div>
            </a>


            <a href="{{ url('feedback') }}">
                <div class="col-xs-4 col-xs-offset-1 column">  
                     <i class="fa fa-repeat fa-5x" aria-hidden="true"></i>
                     <span class="subtitle">Reflecteren</span>
                </div>
            </a>
        </div>

        <div class="row">
            <a href="{{ url('feedback') }}">
                <div class="col-xs-4 col-xs-offset-1 column">  
                    <i class="fa fa-refresh fa-5x" aria-hidden="true"></i>
                    <span class="subtitle">IAG Reflectiemodel</span>
                </div>
            </a>


            <a href="{{ url('feedback') }}">
                <div class="col-xs-4 col-xs-offset-1 column">  
                    <i class="fa fa-user fa-5x" aria-hidden="true"></i>
                    <span class="subtitle">Profiel</span>
                </div>
            </a>
        </div>
    </div>
    
</div>
@endsection

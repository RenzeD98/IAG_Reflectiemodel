@extends('layouts.mobile')

@section('content')
<div class="container profile">
    <div class="panel panel-default">
        <div class="header">
            <a href="{{ url('profiel') }}">
                <img src="https://pbs.twimg.com/profile_images/689125864731242496/DGU2F799.jpg" alt="Profiel afbeelding">
                <span class="name">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
            </a>
        </div>
        <div class="panel-body">
            <div class="row row-centered">
                <div class="col-md-12">
                    <div class="intern-notification">
                        <a href="{{ url('profiel/add') }}">
                            <span class="text">
                                <i class="fa fa-bell" aria-hidden="true"></i>
                                U heeft uw profiel nog niet ingevul. Klik hier om in te vullen. 
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row row-centered">
                 <div class="col-md-12">
                    <div class="">
                        <a href="{{ url('upload') }}">
                            <img src="http://data.whicdn.com/images/66288208/large.jpg" class="img-circle img-responsive" style="width:150px;height:150px; margin:auto;">
                        </a>
                    </div>
        
                    <div class="change-image">
                        <a href="{{ url('upload') }}">Change image</a>

                    </div>

                    <div class="change-image">
                        <a href="{{ url('upload') }}">Add image</a>
                    </div>
                  
                </div>	
            </div>
            <div class="row row-centered">
                <div class="col-md-12">
                    <span class="name">Jeffrey Pieksma</span>
                </div>  
            </div>
            <div class="row row-centered">
                <div class="col-md-12">
                    <span class="function"> IAG Hulpverlener</span>
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection

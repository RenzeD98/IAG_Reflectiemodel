@extends('layouts.mobile')

@section('content')
<div class="container reflection">

    @foreach($reflections as $reflection)
        <div class="row refrow">
          <div class="col-md-12 refhead">
            <img class="img-circle" src="http://placehold.it/50x50" alt="">
            <p>{{ $reflection->title }}</p>
            <p class="reftime">{{ $reflection->updated_at}}</p>
          </div>

          <div class="col-md-12 refmessage">
            <p>{{ $reflection->message }}</p>
          </div>

            <!-- foreach -->
          <div class="col-md-6">
            <span class="reftag">{{ $reflection->title }}</span>
          </div>
            <!-- endforeach -->

          <div class="col-md-6">
            <a href="#" class="reffeedback">Feedback geven</a>
          </div>
        </div>
    @endforeach

        <a class="refadd" href="{{ url('reflectie\create') }}">+</a>
</div>
@endsection

@extends('layouts.mobile')

@section('content')
<div class="container reflection">

    @foreach($reflections as $reflection)
        <div class="row">
          <div class="col-md-12 head">
            <p>{{ $reflection->title }}</p>
            <p class="time">{{ $reflection->updated_at}}</p>
          </div>

          <div class="col-md-12 message">
            <p>{{ $reflection->message }}</p>
          </div>

            <!-- foreach -->
          <div class="col-md-6">
            <span class="tag">{{ $reflection->title }}</span>
          </div>
            <!-- endforeach -->


          <div class="col-md-6">
            <a href="#" class="feedback">Feedback inzien</a>
          </div>
        </div>
    @endforeach

    <a class="add-reflection-button" href="{{ url('reflectie\create') }}">+</a>

</div>
@endsection

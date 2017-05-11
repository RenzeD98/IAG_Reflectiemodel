@extends('layouts.mobile')

@section('content')

<div class="container reflection add">
  <div class="panel panel-default">
    <div class="panel-heading">Reflectie toevoegen</div>
    <div class="panel-body">
     <form method="POST" action="/reflectie/create">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="reflection-model" id="reflection-model">
          <label for="reflection-model">Bekijk het reflectiemodel</label>
      </div>
      <div class="reflection-model-open" id="reflection-model-open">
        <div class="container reflectiemodel">
            <div class="reflectioncontainer">

              <div class="topleft">
                <a href="/reflectionmodel/custom"><img src="{{ URL::asset('images/custom.png') }}" alt="" class="custom"></a>
                <a href="/reflectionmodel/transparent"><img src="{{ URL::asset('images/transparent.png') }}" alt="" class="transparant"></a>
              </div>

              <div class="topright">
                <a href="/reflectionmodel/theory"><img src="{{ URL::asset('images/theory.png') }}" alt="" class="theorie"></a>
                <a href="/reflectionmodel/model"><img src="{{ URL::asset('images/model.png') }}" alt="" class="model"></a>
              </div>

              <div class="bottomleft">
                <a href="/reflectionmodel/feedback"><img src="{{ URL::asset('images/feedback.png') }}" alt="" class="feedback"></a>
                <a href="/reflectionmodel/methodology"><img src="{{ URL::asset('images/methodology.png') }}" alt="" class="methodiek"></a>
              </div>

              <div class="bottomright">
                <a href="/reflectionmodel/focus"><img src="{{ URL::asset('images/focus.png') }}" alt="" class="gerichtheid"></a>
                <a href="/reflectionmodel/strategy"><img src="{{ URL::asset('images/strategy.png') }}" alt="" class="strategie"></a>
              </div>

            </div>
        </div>
      </div>
        <div class="form-group">
          <label for="title">Titel</label>
          <input type="text" class="form-control" id="title" placeholder="Titel" name="title">
        </div>
         <div class="form-group">
          <label for="reflection">Reflectie:</label>
          <textarea class="form-control" rows="5" id="reflection" name="message"></textarea>
        </div>
        <div class="form-group">
          <label for="tags">Tags, gescheiden met komma's </label>
          <input type="text" class="form-control" id="tags" placeholder="Tag1, tag2, tag3" name="tags">
        </div>
        <button type="submit" class="btn btn-default">Verstuur</button>
      </form>
    </div>
  </div>
</div>
@endsection

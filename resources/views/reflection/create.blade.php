@extends('layouts.mobile')

@section('content')
<div class="ajax-content">
  <div class="ajax-header">
      <div class="back-arrow">
          <i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i>
      </div>
  </div>
  <div class="page-loader-content"></div>
</div>

<div class="container reflection add">
  <div class="panel panel-default">
    <div class="panel-heading">Reflectie toevoegen</div>
      <div class="panel-body">
      <form method="POST" action="/reflectie/create">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="reflection-model" id="reflection-model">
          <label for="reflection-model">Bekijk het reflectiemodel</label>
          <div class="arrow"><i class="fa fa-arrow-down" aria-hidden="true"></i></div>
      </div>
        <div class="reflection-model-open" id="reflection-model-open">
        <div class="container reflectiemodel">
            <div class="reflectioncontainer">
                <div class="topleft">
                    <a id="page-loader" link="/reflectionmodel/8"><img src="{{ URL::asset('images/custom.png') }}" alt="" class="custom"></a>
                    <a id="page-loader" link="/reflectionmodel/7"><img src="{{ URL::asset('images/transparent.png') }}" alt="" class="transparant"></a>
                </div>
                <div class="topright">
                    <a id="page-loader" link="/reflectionmodel/1"><img src="{{ URL::asset('images/theory.png') }}" alt="" class="theorie"></a>
                    <a id="page-loader" link="/reflectionmodel/3"><img src="{{ URL::asset('images/model.png') }}" alt="" class="model"></a>
                </div>
                <div class="bottomleft">
                    <a id="page-loader" href="/reflectionmodel/6"><img src="{{ URL::asset('images/feedback.png') }}" alt="" class="feedback"></a>
                    <a id="page-loader" href="/reflectionmodel/5"><img src="{{ URL::asset('images/methodology.png') }}" alt="" class="methodiek"></a>
                </div>
                <div class="bottomright">
                    <a id="page-loader" href="/reflectionmodel/2"><img src="{{ URL::asset('images/focus.png') }}" alt="" class="gerichtheid"></a>
                    <a id="page-loader" href="/reflectionmodel/4"><img src="{{ URL::asset('images/strategy.png') }}" alt="" class="strategie"></a>
                </div>
            </div>
            <hr>
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
        <button type="submit" class="btn save-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Verstuur</button>
      </form>
    </div>
  </div>
</div>
@endsection

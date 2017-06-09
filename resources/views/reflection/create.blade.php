@extends('layouts.mobile')

@section('content')
<div class="ajax-content">
  <div class="ajax-header">
      <div class="back-arrow">
          <i class="fa fa-arrow-left fa-2x" aria-hidden="true" ></i>
      </div>
  </div>
  <div class="page-loader-content"></div>
</div>

<div class="container reflection add">
  <div class="panel panel-default">
    <div class="panel-heading">Reflectie toevoegen</div>
      <div class="panel-body">
        @if (Session::has('message'))
          <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif
        <div class="reflection-model" id="reflection-model">
            <label for="reflection-model">Bekijk het reflectiemodel</label>
            <div class="arrow">
              <i class="fa fa-arrow-down" aria-hidden="true"></i>
            </div>
        </div>
        <div class="reflection-model-open" id="reflection-model-open">
          <div class="container reflectiemodel">
            <div class="reflectioncontainer">
                <div class="topleft">
                    <a class="page-loader" link="/reflectionmodel/8"><img src="{{ URL::asset('images/custom.png') }}" alt="" class="custom"></a>
                    <a class="page-loader" link="/reflectionmodel/7"><img src="{{ URL::asset('images/transparent.png') }}" alt="" class="transparant"></a>
                </div>
                <div class="topright">
                    <a class="page-loader" link="/reflectionmodel/1"><img src="{{ URL::asset('images/theory.png') }}" alt="" class="theorie"></a>
                    <a class="page-loader" link="/reflectionmodel/3"><img src="{{ URL::asset('images/model.png') }}" alt="" class="model"></a>
                </div>
                <div class="bottomleft">
                    <a class="page-loader" link="/reflectionmodel/6"><img src="{{ URL::asset('images/feedback.png') }}" alt="" class="feedback"></a>
                    <a class="page-loader" link="/reflectionmodel/5"><img src="{{ URL::asset('images/methodology.png') }}" alt="" class="methodiek"></a>
                </div>
                <div class="bottomright">
                    <a class="page-loader" link="/reflectionmodel/2"><img src="{{ URL::asset('images/focus.png') }}" alt="" class="gerichtheid"></a>
                    <a class="page-loader" link="/reflectionmodel/4"><img src="{{ URL::asset('images/strategy.png') }}" alt="" class="strategie"></a>
                </div>
            </div>
            <hr>
        </div>
      </div>

      <form method="POST" action="/reflectie/create">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
          <label for="title">Titel*</label>
          <input type="text" class="form-control" id="title" placeholder="Titel" name="title" value="{{ old('title') }}">
        </div>
         <div class="form-group  {{ $errors->has('message') ? ' has-error' : '' }}">
          <label for="reflection">Reflectie*</label>
          <textarea class="form-control" rows="5" id="reflection" name="message" placeholder="Uw reflectie">
            {{ old('message') }}
          </textarea>
        </div>
        <div class="form-group">
          <label for="tags">Tags, gescheiden met komma's</label>
          <input type="text" class="form-control" id="tags" placeholder="Tag1, tag2, tag3" name="tags" value="{{ old('tags') }}">
        </div>
        <i><i class="fa fa-info-circle" aria-hidden="true"></i> Een "tag" is een zoekwoord die aan uw reflectie wordt gekoppeld.</i>
        <button type="submit" class="btn button save-button" style="float:right;"><i class="fa fa-floppy-o" aria-hidden="true"></i> Verstuur</button>
      </form>
    </div>
  </div>
</div>
@endsection

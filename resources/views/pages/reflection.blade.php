@extends('layouts.mobile')

@section('content')
<div class="container reflection">
  <div class="panel panel-default">
    <div class="panel-heading">Reflectie overzicht</div>
    <div class="panel-body">

        <div class="row">
          <div class="col-md-12">
            <a href="{{ url('reflection\create') }}">Toevoegen</a>
          </div>
          <div class="col-md-12">
            <p>dag-maand-jaar</p>
          </div>
          <div class="col-md-12">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque atque consequuntur harum, similique, iusto consectetur quo voluptates soluta veritatis explicabo ut odit quos accusantium, suscipit sapiente iure culpa quam quidem.</p>
          </div>
        </div>

    </div>
  </div>
</div>
@endsection

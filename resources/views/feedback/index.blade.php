@extends('layouts.mobile')

@section('content')
<div class="container feedback">

<!-- foreach -->
        <div class="row">
          <div class="col-md-12 head">
            <img class="img-circle" src="http://placehold.it/50x50" alt="">
            <p>naam van persoon</p>
            <p class="time">123-213-21233</p>
          </div>

          <div class="col-md-12 message">
            <h2>titel van het bericht</h2>
            <p>wat de reflectie is en waar op gereageerd kan worden</p>
          </div>

            <!-- foreach -->
          <div class="col-md-6">
            <span class="tag">tag</span>
          </div>
            <!-- endforeach -->

          <div class="col-md-6">
            <a href="#" class="feedback">Feedback geven</a>
          </div>
        </div>
<!-- endforeach -->

</div>
@endsection

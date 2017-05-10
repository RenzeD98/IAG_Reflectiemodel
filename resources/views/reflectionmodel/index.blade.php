@extends('layouts.mobile')

@section('content')
<div class="container reflectiemodel">
<!--   <div class="panel panel-default"> -->
    <div class="reflectioncontainer">
<!--       <img src="reflectie-model.png" alt=""> -->

      <div class="topleft">
        <a href="#"><img src="{{'images/custom.png'}}" alt="" class="custom"></a>
        <a href="#"><img src="{{'images/transparant.png'}}" alt="" class="transparant"></a>
      </div>

      <div class="topright">
        <a href="#"><img src="{{'images/theorie.png'}}" alt="" class="theorie"></a>
        <a href="#"><img src="{{'images/model.png'}}" alt="" class="model"></a>
      </div>

      <div class="bottomleft">
        <a href="#"><img src="{{'images/feedback.png'}}" alt="" class="feedback"></a>
        <a href="#"><img src="{{'images/methodiek.png'}}" alt="" class="methodiek"></a>
      </div>

      <div class="bottomright">
        <a href="#"><img src="{{'images/gerichtheid.png'}}" alt="" class="gerichtheid"></a>
        <a href="#"><img src="{{'images/strategie.png'}}" alt="" class="strategie"></a>
      </div>

    </div>
<!--   </div> -->
</div>
@endsection

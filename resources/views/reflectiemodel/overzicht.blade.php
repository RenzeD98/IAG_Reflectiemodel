@extends('layouts.mobile')

@section('content')
<div class="container reflectiemodel">
  <div class="panel panel-default">
    <div class="panel-heading">Reflectiemodel </div>
    <div class="panel-body">

        <div class="col-md-12">
          <img src="/images/reflectie-model.png" class="refmodel">
          
          <map name="planetmap">
            <area shape="circle" coords="543,183,700,343" href="/reflectiemodel/theorie" alt="Theorie">
            <area shape="circle" coords="90,58,3" href="mercur.htm" alt="Mercury">
            <area shape="circle" coords="124,58,8" href="venus.htm" alt="Venus">
          </map>
        </div>

    </div>
  </div>
</div>
@endsection

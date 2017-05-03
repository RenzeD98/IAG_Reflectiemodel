@extends('layouts.mobile')

@section('content')
<div class="container profile">
    <div class="panel panel-default">
        <div class="panel-heading">Profiel invullen</div>
        <div class="panel-body">
            <div class="row row-centered">
                 <div class="col-md-12">
                    <div class="">
                        <a href="#">
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
            <div class="row">
                <form>

                  <div class="form-group">
                    <label for="select">Functie:</label><br />
                    <p>
                    Misschien leuk om toe te voegen? https://silviomoreto.github.io/bootstrap-select/ </p>
                        <select class="selectpicker" id="select">
                          <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                          <option data-tokens="mustard">Burger, Shake and a Smile</option>
                          <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                        </select>
                  </div>

                  <div class="form-group">
                    <label for="search">search:</label>
                    <input type="text" class="form-control" id="search" placeholder="Zoek functie...">
                  </div>

                  <div class="form-group">
                    <label for="pwd">Geboorte datum:</label>
                    <input type="text" class="form-control" id="search" placeholder="DD/MM/YYYY">
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-default">Verstuur</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

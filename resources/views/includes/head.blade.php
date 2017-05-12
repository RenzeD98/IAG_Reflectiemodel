<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ config('app.name', 'Laravel') }}</title>
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>

<script>
$(document).ready(function(){
    $("#reflection-model").click(function(){
        $("#reflection-model-open").slideToggle("50");
    });
});
</script>

<script>
$("#page-loader").click(function () {
    // add loading image to div
    $("#page-loader-content").html('<img src="icons/LoadingIcon.svg">');

    // run ajax request
    $.ajax({
      url:'http://www.skysports.com/f1/news/12433/10868775/max-verstappens-first-f1-win-at-the-2016-spanish-gp-revisited',
      type:'GET',
      success: function(data){
           $('#page-loader-content').html($(data).find('#page-loader-content').html());
      }
    });
    // $.ajax({
    //     type: "GET",
    //     dataType: dataType,
    //     url: "http://www.skysports.com/f1/news/12433/10868775/max-verstappens-first-f1-win-at-the-2016-spanish-gp-revisited",
    //     success: function (d) {
    //         // replace div's content with returned data
    //         // $('#loading').html('<img src="'+d.avatar_url+'"><br>'+d.login);
    //         // setTimeout added to show loading
    //         setTimeout(function () {
    //             $("#page-loader-content").html(data);
    //             alert( "Load was performed." );
    //         }, 2000);
    //     }
    // });
});
</script>

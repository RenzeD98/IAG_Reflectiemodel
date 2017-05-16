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
    $(document).ready(function(){
        $("#page-loader").click(function(){
            document.getElementById("#page-loader").getAttribute("link")
            $(".ajax-content").css("display", "block");
            $(".page-loader-content").html('<img class="loader_icon" src="{{ URL::asset('icons/LoadingIcon.svg') }}">');
            $(".page-loader-content").load("http://localhost/reflectionmodel/theory .reflectiemodel");
        });
    });
</script>

<script>
$(".reflectionchoice").click(function(){
      $(this).next().slideToggle("fast");
      $("i", this).toggleClass("fa-arrow-up fa-arrow-down");
    });
});
</script>

<script>
    $(document).ready(function(){
        $('.back-arrow').click(function() {
            $(".ajax-content").css("display", "none");
        });
    });
</script>


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

$(document).ready(function(){

  window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
          $(this).fadeOut(500); 
      });
  }, 4000);

  $(".page-loader").on("click", function(){
      var GetUrl = $(this).attr('link');
      $(".ajax-content").css("display", "block");
      //$(".page-loader-content").html('<img class="loader_icon" src="{{ URL::asset('icons/LoadingIcon.svg') }}">');
      $(".page-loader-content").html('<img class="loader_icon" src="/icons/LoadingIcon.svg")">');
      $(".page-loader-content").load(GetUrl + ".reflectiemodel");
  });

  $("#reflection-model").click(function(){
      $("#reflection-model-open").slideToggle("50");
  });

	$('.back-arrow').click(function() {
		$(".ajax-content").css("display", "none");
	});

    $(".reflectionchoice").click(function(){
    	$(this).next().slideToggle("fast");
    	$("i", this).toggleClass("fa-arrow-up fa-arrow-down");
    });

	function goBack()
	{
		if(window.location.pathname !== '/home'){
			window.history.back(); 
		}  
	}

});


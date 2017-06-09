@extends('layouts.mobile')

@section('content')
<div class="container archive">
	<div class="panel panel-default">
	    <div class="panel-heading">Archief overzicht</div>
	    <div class="panel-body">
	    	<div id="searchbar">
		    	<span class="title">Zoek met behulp van tags</span>
		    	<form method="GET" action="archive/search" class="form-inline">
		    		<div class="col-md-8">
						  <input type="text" class="form-control" name="search" placeholder="Search..." id="searchValue" style="width:100%;">
						</div>
						<div class="col-md-4">
						  <button type="submit" class="btn save-button" id="search-button">
						  	<i class="fa fa-search" aria-hidden="true" style="margin-right:3px;"></i>Zoek een reflectie
							</button>
						</div>
						</form>
	       </div>   
	    </div>
	    <div id="result"></div>
	       <div id="error"><span class="error"></span></div>
	</div>
</div>

<script>

	$(document).ready(function() {

		$("#search-button" ).click(function(event) {
			event.preventDefault();
			getFormValue();
			if(!value==""){
				search(value);
			}
		});

		var getFormValue = function(){
			return value = $('#searchValue').val().trim();
		};

		var search = function(value) { 
 			$.ajax({
        type: "GET",
        url: '/archive/search',
        data: {
        	'search': value,
        },
        error: function (error) {
        	return;
        },
        success: function(data){
        	var reflections = data.reflections;

        	if (reflections=="") {
        		setError();
        	}else{
        		setOutput(reflections);
        	}
        } 
    	});	
		}; 

		var setOutput = function(reflections){
			$('#result').empty();
			$('#error').empty();
			
			if(!reflections == 0){
				for(i=0; i<reflections.length; i++){
					var reflection = reflections[i];
					var message = reflection.message.substr(0,160)+'...';

					var $result = $('<div/>', { 'class': 'reflection' });
					var title = $('<a/>', { 'class': 'title','href': 'reflectie/'+reflection.id+'/view' }).text(reflection.title).appendTo($result);

					var $message = $('<p/>', {'class': 'message'}).text(message).appendTo($result);
					var $createdAt = $('<span/>', {'class': 'date'}).text('geplaatst op '+reflection.created_at).appendTo($result);

	  			$('#result').append($result);
	  		}
	  	}
		};

		var setError = function(){
			$('#error span').text('Er zijn geen reflecties gevonden');
		};

	});

</script>
@endsection
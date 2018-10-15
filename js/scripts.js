var pantalla = 1;	
var numpantallas = 0;
$(document).ready(function(){
	
	numpantallas = $('.pantalla').length;
	if (pantalla<numpantallas){
		$(".button-next").show();
	}
	if (pantalla>1){
		$(".button-prev").show();
	}
});

$(".button-next").click(function(){
	pantalla = $(".pantalla.active").data("pantalla");
	$(".pantalla.active").removeClass("active").hide().next().addClass("active").show();
	pantalla = pantalla+1;
	if (pantalla>=numpantallas){
		$(".button-next").hide();
	}
	if (pantalla>1){
		$(".button-prev").show();
	}
//	if (pantalla==5 && $("#map1").is(":hidden")){
	//	setTimeout(function(){
		//	initMap("map1");
		//}, 750);
		//}
});

$(".button-prev").click(function(){
	pantalla = $(".pantalla.active").data("pantalla");
	$(".pantalla.active").removeClass("active").hide().prev().addClass("active").show();
	pantalla = pantalla-1;
	if (pantalla<numpantallas){
		$(".button-next").show();
	}
	if (pantalla<=1){
		$(".button-prev").hide();
	}
});

$("#pantalla4 select").on("change", function() {
	if ($(this).val()=="other"){
		$("#pantalla4 .other").show();
		//initMap("map1");
	}
});

$("#pantalla5 select").on("change", function() {
	if ($(this).val()=="other"){
		$("#pantalla5 .other").show();
		//initMap("map2");
	}
});

$("#pantalla6 select").on("change", function() {
	if ($(this).val()=="other"){
		//$("#pantalla6 .other").show();
		//initMap("map1");
	}
});


var localidades_bh = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.whitespace,
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  remote: {
    url: './php/geocode.php?loc=%QUERY',
    wildcard: '%QUERY'
  }
});

$('.typeahead').typeahead({
  hint: true,
  highlight: true,
  minLength: 1,
	autoselect: true
},
{
  name: 'localidades_nombre',
	display: 'name',
  source: localidades_bh
	//templates: {
		//empty: function (data){
      //return '<div class="tt-suggestion tt-selectable"><span class="addnewlocation">+ Add new location</span></div>';
			//}
	//}
});

$('#pantalla4 .typeahead').on('typeahead:selected', function(evt, item) {
	if (typeof item !== 'undefined' && item != "") {
		$.get( "https://maps.googleapis.com/maps/api/geocode/json?place_id="+item.place_id+"&key=AIzaSyD4I4HZ25lHy9WftOj4x3fEKCoEGYmJHgk", function( data ) {
			var lat = data.results[0].geometry.location.lat;
			var lng = data.results[0].geometry.location.lng;
			$("#artistBirthLocOtherLat").val(lat);
			$("#artistBirthLocOtherLng").val(lng);
			$("#pantalla4 .coordinates").text(lat + ", "+ lng).show();
		});
	}
});

$('#pantalla5 .typeahead').on('typeahead:selected', function(evt, item) {
	if (typeof item !== 'undefined' && item != "") {
		$.get( "https://maps.googleapis.com/maps/api/geocode/json?place_id="+item.place_id+"&key=AIzaSyD4I4HZ25lHy9WftOj4x3fEKCoEGYmJHgk", function( data ) {
			var lat = data.results[0].geometry.location.lat;
			var lng = data.results[0].geometry.location.lng;
			$("#artistCurrentLocOtherLat").val(lat);
			$("#artistCurrentLocOtherLng").val(lng);
			$("#pantalla5 .coordinates").text(lat + ", "+ lng).show();
		});
	}
});

$('.typeahead').on('blur', function(){
	if ($(this).val()==""){
		$(this).parent().next().text("");
	}
});

$('.typeahead').on('focus', function(){
	$(this).parent().next().text("");
});

$("button.new-location").click(function(){
	$(this).parent().append(
		'<div class="input-group" style="margin-top:10px;">'+
		  '<div class="input-group-prepend">'+
		    '<div class="input-group-text">'+
		      '<input type="checkbox" aria-label="Checkbox for following text input">'+
		    '</div>'+
		  '</div>'+
		  '<input type="text" class="form-control" aria-label="Text input with checkbox">'+
			'<div class="input-group-append">'+
				'<button class="btn btn-outline-secondary" type="button" id="button-addon2">Done</button>'+
			'</div>'+
		'</div>'
	);
});


var index = 0;

$("button.add-new").click(function(){
	if (pantalla==6 && $("#map1").is(":hidden")){
		$("#map1").show();
		setTimeout(function(){
			initMap("map1");
		}, 100);
	}
	
	setTimeout(function(){
		if (pantalla==6){
			addDragMarker();
		}
	}, 150 );
	
	$(this).parent().append(
	'<div data-index="'+index+'" class="input-group" style="margin-top:10px;">'+
	  '<input type="text" class="form-control" placeholder="" aria-label="Recipients username" aria-describedby="basic-addon2">'+
	  '<div class="input-group-append">'+
	    '<button class="remove-input btn btn-outline-secondary" type="button"><span class="oi oi-minus"></span></button>'+
	  '</div>'+
	  '<div class="input-group-append">'+
	    '<button class="add-input btn btn-outline-secondary" type="button"><span class="oi oi-plus"></span></button>'+
	 ' </div>'+
	'</div>'
	);
	
	$("button.add-input").unbind( "click" );
	$("button.add-input").click(function(){
		$(this).parent().parent().parent().find("button.add-new").click();
	});
	$("button.remove-input").unbind( "click" );
	$("button.remove-input").click(function(){
		$(this).parent().parent().remove();
		var curIndex = $(this).parent().parent().data('index');
		if (pantalla==6){
			removeDragMarker(curIndex);
		}
	});
	index ++;
});
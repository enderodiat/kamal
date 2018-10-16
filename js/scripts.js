var section = 1;	
var numsections = 0;
$(document).ready(function(){
	
	numsections = $('.section').length;
	if (section<numsections){
		$(".button-next").show();
	}
	if (section>1){
		$(".button-prev").show();
	}
});




$("form").parsley({
   errorClass: 'is-invalid text-danger',
   successClass: 'is-valid',
   errorsWrapper: '<span class="form-text text-danger"></span>',
   errorTemplate: '<span></span>',
   trigger: 'change'
}).on('field:validated', function() {
//  var ok = $('.parsley-error').length === 0;
//  $('.bs-callout-info').toggleClass('hidden', !ok);
//  $('.bs-callout-warning').toggleClass('hidden', ok);
}).on('form:submit', function() {
  return false; // Don't submit form for this demo
});

$sections = $(".section");

// Next button goes forward iff current block validates
$('.button-next').click(function() {
	
	  $('form').parsley().whenValidate({
	    group: 'block-' + $(".section.active").data("section")
	  }).done(function() {

			section = $(".section.active").data("section");
			if(section==2){
				if ($("input[name='userType']:checked").val()=="institucion"){
					$(".section.active").removeClass("active").hide();
					$("#section11").addClass("active").show();
					section = section = 11;
				} else {
					$(".section.active").removeClass("active").hide().next(".section").addClass("active").show();
					section = section+1;					
				}
			} else {
				$(".section.active").removeClass("active").hide().next(".section").addClass("active").show();
				section = section+1;		
			}
			if (section>=numsections){
				$(".button-next").hide();
			}
			if (section>1){
				$(".button-prev").show();
			}
	  });
				

});

$sections.each(function(index, section) {
  $(section).find(':input').attr('data-parsley-group', 'block-' + $(this).data("section"));
});

$(".button-prev").click(function(){
	section = $(".section.active").data("section");
	if ($("input[name='userType']:checked").val()=="institucion"){
		if (section==11){
			$(".section.active").removeClass("active").hide();
			$("#section2").addClass("active").show();
			section = section=2;
		}
	} else {
		$(".section.active").removeClass("active").hide().prev().addClass("active").show();
		section = section-1;
	}

	if (section<numsections){
		$(".button-next").show();
	}
	if (section<=1){
		$(".button-prev").hide();
	}
});

$("#section4 select").on("change", function() {
	if ($(this).val()=="other"){
		$("#section4 .other").show();
		//showMap("map1");
	}
});

$("#section5 select").on("change", function() {
	if ($(this).val()=="other"){
		$("#section5 .other").show();
		//showMap("map2");
	}
});

$("#section6 select").on("change", function() {
	if ($(this).val()=="other"){
		//$("#section6 .other").show();
		//showMap("map1");
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

$('#section4 .typeahead').on('typeahead:selected', function(evt, item) {
	if (typeof item !== 'undefined' && item != "") {
		$.get( "https://maps.googleapis.com/maps/api/geocode/json?place_id="+item.place_id+"&key=AIzaSyD4I4HZ25lHy9WftOj4x3fEKCoEGYmJHgk", function( data ) {
			var lat = data.results[0].geometry.location.lat;
			var lng = data.results[0].geometry.location.lng;
			$("#artistBirthLocOtherLat").val(lat);
			$("#artistBirthLocOtherLng").val(lng);
			$("#section4 .coordinates").text(lat + ", "+ lng).show();
		});
	}
});

$('#section5 .typeahead').on('typeahead:selected', function(evt, item) {
	if (typeof item !== 'undefined' && item != "") {
		$.get( "https://maps.googleapis.com/maps/api/geocode/json?place_id="+item.place_id+"&key=AIzaSyD4I4HZ25lHy9WftOj4x3fEKCoEGYmJHgk", function( data ) {
			var lat = data.results[0].geometry.location.lat;
			var lng = data.results[0].geometry.location.lng;
			$("#artistCurrentLocOtherLat").val(lat);
			$("#artistCurrentLocOtherLng").val(lng);
			$("#section5 .coordinates").text(lat + ", "+ lng).show();
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


var index6 = 0;

$("#section6 button.add-new").click(function(){
	if ($("#map1").is(":hidden")){
		$("#map1").show();
		setTimeout(function(){
			showMap("map1");
		}, 100 );
	}
	
	setTimeout(function(){
		addDragMarker();
	}, 150 );
	
	
	$(this).parent().append(
	'<div data-index="'+index6+'" class="input-group" style="margin-top:10px;">'+
	  '<input type="text" id="artistEspaciosOther'+index6+'" name="artistEspaciosOther'+index6+'" class="form-control" placeholder="" aria-label="Otro espacio" aria-describedby="artistEspaciosOther'+index6+'">'+
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
		removeDragMarker(curIndex);
	});
	index6++;
});

var index7 = 0;

$("#section7 button.add-new").click(function(){

	$(this).parent().append(
	'<div data-index="'+index7+'" class="input-group" style="margin-top:10px;">'+
	  '<input type="text" id="artistEventosOther'+index7+'" name="artistEventosOther'+index7+'" class="form-control" placeholder="" aria-label="Eventos" aria-describedby="artistEventosOther'+index7+'">'+
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
		$("button.add-new").click();
	});
	$("button.remove-input").unbind( "click" );
	$("button.remove-input").click(function(){
		$(this).parent().parent().remove();
	});
	index7++;
});
var section = 1;
var numsections = 0;
$(document).ready(function(){

	$("#map_button").click(function(){
		$("#map").show();
		$("#form").hide();
		//$("#form_button img").attr('src', 'img/timon_square_letters_white.png')
		//$("#map_button img").attr('src', 'img/kamal_square_letters.png')
		$(this).addClass('btn-light');
		$(this).removeClass('btn-outline-light');
		$("#form_button").removeClass('btn-dark');
		$("#form_button").addClass('btn-outline-dark');
		$(".nav-inner-container").show();
	});

	$("#form_button").click(function(){
		$("#form").show();
		$("#map").hide();
		//$("#form_button img").attr('src', 'img/timon_square_letters.png')
		//$("#map_button img").attr('src', 'img/kamal_square_letters_white.png')
		$(this).addClass('btn-dark');
		$(this).removeClass('btn-outline-dark');
		$("#map_button").removeClass('btn-light');
		$("#map_button").addClass('btn-outline-light');
		$(".nav-inner-container").hide();
	});
			
	numsections = $('.section').length + 2;
	if (section<numsections){
		$(".button-next").show();
	}
	if (section>1){
		$(".button-prev").show();
	}


	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
	  $('.selectpicker').selectpicker('mobile');
	}

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

	var submitting = 0;
	var buttonStart = 0;

	// Next button goes forward iff current block validates
	$('.button-next').click(function() {
	
		if ($(this).hasClass("button-submit")) submitting = 1;
		if ($(this).hasClass("button-start")) buttonStart = 1;
	
	  $('form').parsley().whenValidate({
	    group: 'block-' + $(".section.active").data("section")
	  }).done(function() {

			section = $(".section.active").data("section");
		
			if (submitting==1){
				console.log("OK");
				var success = 1;

				if (success==1){
			
					if (section==2){
						if ($("input[name='userType']:checked").val()=="institucion"){
							$(".section.active").removeClass("active").hide();
							$("#section12").addClass("active").show();
							section = section = 12;
						} else {
							$(".section.active").removeClass("active").hide().next(".section").addClass("active").show();
							section = section+1;					
						}
					} else {
						$(".section.active").removeClass("active").hide().next(".section").addClass("active").show();
						section = section+1;		
					}
	//				if (section>=numsections){
		//				$(".button-next").hide();
		//			}
					if (section>1){
						$(".button-prev").show();
					}




					$.post("send.php", $("#userData").serialize(), function(data) {
						console.log(data);
						submitting=0;
					});

					$(".button-prev").hide();
				
				
				} else {
					
					console.log("FAIL");
					
				}
									
			} else {
			
				if (buttonStart == 1){
					$(".section.active").removeClass('active').hide();
					$('.section').first().addClass('active').show();
					$('.selectpicker').selectpicker('deselectAll');
					document.getElementById("userData").reset();
					$('#userData').parsley().reset();
					$("#section4 .coordinates").text('').hide();
					$("#section5 .coordinates").text('').hide();
					$("#section13 .coordinates").text('').hide();
					section=1;
					buttonStart = 0;
				} else if (section==2){
					if ($("input[name='userType']:checked").val()=="institucion"){
						$(".section.active").removeClass("active").hide();
						$("#section12").addClass("active").show();
						section = 12;
					} else {
						$(".section.active").removeClass("active").hide().next(".section").addClass("active").show();
						section = section+1;					
					}
				} else {
					$(".section.active").removeClass("active").hide().next(".section").addClass("active").show();
					section = section+1;		
				}
	//			if (section>=numsections){
		//			$(".button-next").hide();
			//	}
				if (section>1){
					$(".button-prev").show();
				}
			}
	  });
	});


	$sections.each(function(index, section) {
	  $(section).find(':input').attr('data-parsley-group', 'block-' + $(this).data("section"));
	});

	$(".button-prev").click(function(){
		section = $(".section.active").data("section");
		if ($("input[name='userType']:checked").val()=="institucion" && section==12){
			$(".section.active").removeClass("active").hide();
			$("#section2").addClass("active").show();
			section = section=2;
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


	var localidades_city = new Bloodhound({
	  datumTokenizer: Bloodhound.tokenizers.whitespace,
	  queryTokenizer: Bloodhound.tokenizers.whitespace,
	  remote: {
	    url: './php/geocode.php?type=city&loc=%QUERY',
	    wildcard: '%QUERY'
	  }
	});
	var localidades_address = new Bloodhound({
	  datumTokenizer: Bloodhound.tokenizers.whitespace,
	  queryTokenizer: Bloodhound.tokenizers.whitespace,
	  remote: {
	    url: './php/geocode.php?type=address&loc=%QUERY',
	    wildcard: '%QUERY'
	  }
	});

	$('.typeahead.city').typeahead({
	  hint: true,
	  highlight: true,
	  minLength: 1,
		autoselect: true
	},
	{
	  name: 'localidades_city',
		display: 'name',
	  source: localidades_city
	});
	
	$('.typeahead.address').typeahead({
	  hint: true,
	  highlight: true,
	  minLength: 1,
		autoselect: true
	},
	{
	  name: 'localidades_address',
		display: 'name',
	  source: localidades_address
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
				$("#artistBirthLocLat").val(lat);
				$("#artistBirthLocLng").val(lng);
				$("#section4 .coordinates").text(lat + ", "+ lng).show();
			});
		}
	});

	$('#section5 .typeahead').on('typeahead:selected', function(evt, item) {
		if (typeof item !== 'undefined' && item != "") {
			$.get( "https://maps.googleapis.com/maps/api/geocode/json?place_id="+item.place_id+"&key=AIzaSyD4I4HZ25lHy9WftOj4x3fEKCoEGYmJHgk", function( data ) {
				var lat = data.results[0].geometry.location.lat;
				var lng = data.results[0].geometry.location.lng;
				$("#artistCurrentLocLat").val(lat);
				$("#artistCurrentLocLng").val(lng);
				$("#section5 .coordinates").text(lat + ", "+ lng).show();
			});
		}
	});
	
	$('#section13 .typeahead').on('typeahead:selected', function(evt, item) {
		if (typeof item !== 'undefined' && item != "") {
			$.get( "https://maps.googleapis.com/maps/api/geocode/json?place_id="+item.place_id+"&key=AIzaSyD4I4HZ25lHy9WftOj4x3fEKCoEGYmJHgk", function( data ) {
				var lat = data.results[0].geometry.location.lat;
				var lng = data.results[0].geometry.location.lng;
				$("#institucionLocLat").val(lat);
				$("#institucionLocLng").val(lng);
				$("#section13 .coordinates").text(lat + ", "+ lng).show();
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
			}, 50 );
		}

		setTimeout(function(){
			addDragMarker(index6);	
		}, 60 );

		setTimeout(function(){
			$("#section6").append('<input type="hidden" id="artistEspaciosOtherLat'+(index6-1)+'" name="artistEspaciosOtherLat'+index6+'" value="">');
			$("#section6").append('<input type="hidden" id="artistEspaciosOtherLng'+(index6-1)+'" name="artistEspaciosOtherLng'+index6+'" value="">');
		}, 120);
					
		$(this).parent().append(
		'<div data-index="'+index6+'" class="input-group" style="margin-top:10px;">'+
		  '<div class="input-group-prepend">'+
				'<span class="input-group-text" id="basic-addon1">'+(index6+1)+'</span>'+
		 ' </div>'+
		  '<input type="text" id="artistEspaciosOther'+index6+'" name="artistEspaciosOther[]'+index6+'" class="form-control artistEspaciosOther" placeholder="Título" aria-label="Otro espacio" aria-describedby="artistEspaciosOther'+index6+'">'+
		  '<div class="input-group-append">'+
		    '<button class="remove-input btn btn-outline-secondary" type="button"><span class="oi oi-minus"></span></button>'+
		  '</div>'+
		  '<div class="input-group-append">'+
		    '<button class="add-input btn btn-outline-secondary" type="button"><span class="oi oi-plus"></span></button>'+
		 ' </div>'+
		'</div>'
		);
	
		$("#section6 button.add-input").unbind( "click" );
		$("#section6 button.add-input").click(function(){
			$(this).parent().parent().parent().find("button.add-new").click();
		});
	
		$("#section6 button.remove-input").unbind( "click" );
		$("#section6 button.remove-input").click(function(){
			$(this).parent().parent().parent().find("button.remove-new").click();
		});

		$(this).parent().find(".input-group-append").hide();
		$(this).parent().find(".input-group").last().find(".input-group-append").show();
	
		index6++;

	});

	$("#section6 button.remove-new").click(function(){

		index6--;

		setTimeout(function(){
			removeDragMarker(index6);
		}, 60 );
	
		$(this).parent().find(".input-group").last().remove();
	
		$(this).parent().find(".input-group-append").hide();
		$(this).parent().find(".input-group").last().find(".input-group-append").show();
	
	});

	var index7 = 0;

	$("#section7 button.add-new").click(function(){

		$(this).parent().append(
	'<div data-index="'+index7+'" class="input-group" style="margin-top:10px;">'+
		'<div class="input-group-prepend">'+
			'<span class="input-group-text" id="basic-addon1">'+(index7+1)+'</span>'+
		' </div>'+
	  '<input type="text" id="artistEventosOther'+index7+'" name="artistEventosOther[]" class="form-control artistEventosOther" placeholder="Título" aria-label="Eventos" aria-describedby="artistEventosOther'+index7+'">'+
	  '<div class="input-group-append">'+
	    '<button class="remove-input btn btn-outline-secondary" type="button"><span class="oi oi-minus"></span></button>'+
	  '</div>'+
	  '<div class="input-group-append">'+
	    '<button class="add-input btn btn-outline-secondary" type="button"><span class="oi oi-plus"></span></button>'+
	 ' </div>'+
	'</div>'
		);
	
		$("#section7 button.add-input").unbind( "click" );
		$("#section7 button.add-input").click(function(){
			$(this).parent().parent().parent().find("button.add-new").click();
		});
	
		$("#section7 button.remove-input").unbind( "click" );
		$("#section7 button.remove-input").click(function(){
			$(this).parent().parent().parent().find("button.remove-new").click();
		});

		$(this).parent().find(".input-group-append").hide();
		$(this).parent().find(".input-group").last().find(".input-group-append").show();
	
		index7++;

	});

	$("#section7 button.remove-new").click(function(){

		index7--;
	
		$(this).parent().find(".input-group").last().remove();
	
		$(this).parent().find(".input-group-append").hide();
		$(this).parent().find(".input-group").last().find(".input-group-append").show();
	
	});

	var index14 = 0;

	$("#section14 button.add-new").click(function(){

		$(this).parent().append(
	'<div data-index="'+index14+'" class="input-group" style="margin-top:10px;">'+
		'<div class="input-group-prepend">'+
			'<span class="input-group-text" id="basic-addon1">'+(index14+1)+'</span>'+
		' </div>'+
	  '<input type="text" id="institucionEventosOther'+index14+'" name="institucionEventosOther[]" class="form-control institucionEventosOther" placeholder="Título" aria-label="Eventos" aria-describedby="institucionEventosOther'+index14+'">'+
	  '<div class="input-group-append">'+
	    '<button class="remove-input btn btn-outline-secondary" type="button"><span class="oi oi-minus"></span></button>'+
	  '</div>'+
	  '<div class="input-group-append">'+
	    '<button class="add-input btn btn-outline-secondary" type="button"><span class="oi oi-plus"></span></button>'+
	 ' </div>'+
	'</div>'
		);
	
		$("#section14 button.add-input").unbind( "click" );
		$("#section14 button.add-input").click(function(){
			$(this).parent().parent().parent().find("button.add-new").click();
		});
	
		$("#section14 button.remove-input").unbind( "click" );
		$("#section14 button.remove-input").click(function(){
			$(this).parent().parent().parent().find("button.remove-new").click();
		});

		$(this).parent().find(".input-group-append").hide();
		$(this).parent().find(".input-group").last().find(".input-group-append").show();
	
		index14++;

	});

	$("#section14 button.remove-new").click(function(){

		index14--;
	
		$(this).parent().find(".input-group").last().remove();
	
		$(this).parent().find(".input-group-append").hide();
		$(this).parent().find(".input-group").last().find(".input-group-append").show();
	
	});

	$("#privacyModal button.acepto").click(function(){
		$("input.acceptTerms").prop('checked', 1);
	});


	
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {

	} else {
		$('.bootstrap-select').selectpicker({
			noneSelectedText:"Nada seleccionado",
			selectedTextFormat:"count",
			countSelectedText:"{0} términos seleccionados",
			liveSearch:true,
			liveSearchNormalize:true
		});
	}

	//

});

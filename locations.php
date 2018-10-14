<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link href="css/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="css/typeaheadjs.css">
		<link rel="stylesheet" href="https://use.typekit.net/dwh0ovi.css">
		<link rel="stylesheet" type="text/css" href="css/map-icons.min.css">
		<link rel="stylesheet" href="css/form.css">
		<?php		
		$local = "http://localhost/~maxwell/kamal";

		$json = file_get_contents($local.'/php/sexos.php');
		$sexos = json_decode($json);

		$json = file_get_contents($local.'/php/localidades.php');
		$localidades = json_decode($json);

		$json = file_get_contents($local.'/php/lugares.php');
		$lugares = json_decode($json);
		
		$loc = $_GET['loc'];
		?>
	</head>
	<body>
	
	<div id="pantalla4" class="active pantalla" data-pantalla="4">
		<div class="main v-center">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
					</div>
					
					<div class="col-sm-4 offset-sm-2">
						
					  <div class="form-group">
					    <label for="exampleFormControlSelect1">¿De dónde vienes?</label>
					    <select class="form-control">
					      <option></option>
								<?php foreach($localidades as $localidad):?>
									<option value="<?php echo $localidad->Id;?>"><?php echo $localidad->Nombre;?></option>
								<?php endforeach;?>
									<option value="other">No aparece en la lista.</option>
					    </select>
					  </div>
					
						<div class="other form-group localidades">
					    <label for="exampleFormControlInput1">Localidad</label>
							<input type="text" class="form-control typeahead" id="exampleFormControlInput1" placeholder="Enter the name of the localidad.">
				      <div class="coordinates valid-feedback"></div>
						</div>
					</div>
						
					
					<div class="col-sm-2 offset-sm-2 text-right"></div>
					
					<div class="other offset-sm-2 col-sm-8">
					</div>
					
					<div class="col-sm-12 text-center button-container">
						<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	<div id="pantalla5" class="pantalla" data-pantalla="5" style="display:none;">
		<div class="main v-center">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
					</div>
					
					<div class="col-sm-4 offset-sm-2">
						
					  <div class="form-group">
					    <label for="exampleFormControlSelect1">Lugar de residencia habitual</label>
					    <select class="form-control">
					      <option></option>
								<?php foreach($localidades as $localidad):?>
									<option value="<?php echo $localidad->Id;?>"><?php echo $localidad->Nombre;?></option>
								<?php endforeach;?>
									<option value="other">No aparece en la lista.</option>
					    </select>
					  </div>
					
						<div class="other form-group localidades">
					    <label for="exampleFormControlInput1">Localidad</label>
							<input type="text" class="form-control typeahead" id="exampleFormControlInput1" placeholder="Enter the name of the localidad.">
				      <div class="coordinates valid-feedback"></div>
						</div>						
						
					</div>
					
					<div class="col-sm-2 offset-sm-2 text-right">
					</div>
					
					<div class="other offset-sm-2 col-sm-8">
					</div>
					
					<div class="col-sm-12 text-center button-container">
						<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	<div id="pantalla6" class="pantalla" data-pantalla="6" style="display:none;">
		<div class="main v-center">
			<div class="container">
				<div class="row">
					
					<div class="col-sm-6 offset-sm-3">
						<h5>¿Qué espacios frecuentas o has frecuentado?</h5>
						<h4 class="small">Indica en este mapa los espacios si no aparecen en la lista anterior:<br/>(Si no existe una ubicación exacta, puedes señalar una latitud aproximada)</h4>
					</div>
					
					<div class="col-sm-2 text-right">
					</div>

					<div class="col-sm-2 offset-sm-1 checkbox-container">
						<?php foreach($lugares as $lugar):?>
							<div class="custom-control custom-checkbox">
							  <input class="custom-control-input" type="checkbox" value="<?php echo $lugar->Id;?>" id="<?php echo $lugar->Id;?>-<?php echo $lugar->Nombre;?>">
							  <label class="custom-control-label" for="<?php echo $lugar->Id;?>-<?php echo $lugar->Nombre;?>">
							    <?php echo $lugar->Nombre;?>
							  </label>
							</div>
						<?php endforeach;?>
					</div>
					
					<div class="col-sm-6">
						<div id="map1"></div>
					</div>
					
					<div class="col-sm-3">
						<!--<button class="new-location btn btn-outline-secondary" type="button">Add a new location &nbsp; <span class="oi oi-plus"></span></button>-->
					</div>
					
					<div class="col-sm-12 text-center button-container">
						<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	
	<button class="button-prev v-center-fixed btn btn-light" type="button"><span class="oi oi-arrow-left"></span></button>
	<!--<button class="button-next v-center-fixed btn btn-light" type="button"><span class="oi oi-arrow-right"></span></button>-->


	<script>
		var lugares = <?php echo json_encode($lugares, JSON_UNESCAPED_UNICODE);?>;
		var localidades = <?php echo json_encode($localidades, JSON_UNESCAPED_UNICODE);?>;
				
	  var localidades_nombre = localidades.map(function(item) {
	    return item.Nombre;
	  });

	  var localidades_lng = localidades.map(function(item) {
	    return parseFloat(item.lg);
	  });
	  var localidades_lat = localidades.map(function(item) {
	    return parseFloat(item.lt);
	  });
		
	  var localidades_ids = localidades.map(function(item) {
	    return parseInt(item.Id);
	  });
		
		
		
		//localidades = localidades.map(function(_, i){ return {'value': localidades[i]}; });
		
		
    function initMap(id) {
			var bounds;
			var markers = [];

			var dragmarker;

      var map = new google.maps.Map(document.getElementById(id), {
        center: {lat: 42.6088989, lng: -2.7332348},
        zoom: 8
      });
			
			var icon = "css/open-iconic/png/map-marker-3x.png";
			
			var defaultIcon = {
				path: mapIcons.shapes.MAP_PIN,
				fillColor: '#00CCBB',
				fillOpacity: 1,
				strokeColor: '#000000',
				strokeWeight: 1,
				scale:0.5
			}
			
			var activeIcon = {
				path: mapIcons.shapes.MAP_PIN,
				fillColor: '#FF0000',
				fillOpacity: 1,
				strokeColor: '#000000',
				strokeWeight: 1,
				scale:0.5
			}
			
			if (id=="map1"){
				
				for (i = 0; i < lugares.length; i++) {
					var nombre = lugares[i].Nombre;
					var lt = parseFloat(lugares[i].lt);
					var lg = parseFloat(lugares[i].lg);
				
					var coords = { lat: lt, lng:lg }
					var marker = new google.maps.Marker({
						position: coords,
						map: map,
						icon: defaultIcon,
						title: nombre,
						options: { opacity:1 }
					});
					markers.push(marker);

	        marker.addListener('click', function() {
//					map.setZoom(8);
//					map.setCenter(marker.getPosition());
						this.setIcon(activeIcon);
	        });

				}
				
			} else {
							
				for (i = 0; i < localidades.length; i++) {
					var nombre = localidades[i].nombre;
					var lt = parseFloat(localidades[i].lt);
					var lg = parseFloat(localidades[i].lg);
				
					var coords = { lat: lt, lng:lg }
					var marker = new google.maps.Marker({
						position: coords,
						map: map,
						icon: icon,
						title: nombre,
						clickable: false,
						options: { opacity:0.4 }
					});
					markers.push(marker);
				}
			
			}



			bounds = new google.maps.LatLngBounds();
			for (var i = 0; i < markers.length; i++) {
				bounds.extend(markers[i].getPosition());
			}
			map.fitBounds(bounds);
			map.panToBounds(bounds);
			
			/*
			setTimeout(function(){
				dragmarker = new google.maps.Marker({
				    position: map.getCenter(),
				    map: map,
          	animation: google.maps.Animation.DROP,
				    draggable:true
				});
				
			  map.addListener('zoom_changed', function() {
					map.panTo(dragmarker.position);
			  });
							
			}, 10);
			*/
			
    }
		
		

	</script>
	
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0oebl1k1yH3CkxWS0vldSepERG7sFov4" type="text/javascript"></script>
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script src="js/map-icons.js"></script>

	<script src="js/typeahead.bundle.js"></script>


	<script>

		var pantalla = 4;	
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
			if (pantalla>=numpantallas+4){
				$(".button-next").hide();
			}
			if (pantalla>1){
				$(".button-prev").show();
			}
			if (pantalla==5 && $("#map1").is(":hidden")){
				setTimeout(function(){
					initMap("map1");
				}, 750);
			}
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
					$("#pantalla4 .coordinates").text(lat + ", "+ lng).show();
				});
			}
		});
		
		$('#pantalla5 .typeahead').on('typeahead:selected', function(evt, item) {
			if (typeof item !== 'undefined' && item != "") {
				$.get( "https://maps.googleapis.com/maps/api/geocode/json?place_id="+item.place_id+"&key=AIzaSyD4I4HZ25lHy9WftOj4x3fEKCoEGYmJHgk", function( data ) {
					var lat = data.results[0].geometry.location.lat;
					var lng = data.results[0].geometry.location.lng;
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

	</script>


	</body>
</html>
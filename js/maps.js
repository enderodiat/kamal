				
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
		var map;
		var bounds;
		var markers = [];

		var dragmarker;
		var dragmarkers = [];
		
    function initMap(id) {

      map = new google.maps.Map(document.getElementById(id), {
        center: {lat: 42.6088989, lng: -2.7332348},
        zoom: 8
      });
			
			//var icon = "css/open-iconic/png/map-marker-3x.png";
			
			defaultIcon = {
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
		
		function addDragMarker() {		
			dragmarker = new google.maps.Marker({
			    position: map.getCenter(),
			    map: map,
	      	animation: google.maps.Animation.DROP,
			    draggable:true
			});
			
			dragmarkers.push(dragmarker);
			
			
		  //map.addListener('zoom_changed', function() {
				//map.panTo(dragmarker.position);
				//});
			
		}
		
		function removeDragMarker(index) {
			dragmarkers[index].setMap(null);			
		}
		
		
		

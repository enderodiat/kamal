				
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
		var formMap;
		var formBounds;
		var formMarkers = [];

		var dragmarker;
		var dragmarkers = [];
		
    function showMap(id) {

      formMap = new google.maps.Map(document.getElementById(id), {
        //center: {lat: 42.6088989, lng: -2.7332348},
				center: {lat: lt_inicial, lng: lg_inicial},
        zoom: 12
      });
						
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
				
				/*
				
				for (i = 0; i < lugares.length; i++) {
					var nombre = lugares[i].Nombre;
					var lt = parseFloat(lugares[i].lt);
					var lg = parseFloat(lugares[i].lg);
				
					var coords = { lat: lt, lng:lg }
					var marker = new google.maps.Marker({
						position: coords,
						map: formMap,
						icon: defaultIcon,
						title: nombre,
						options: { opacity:1 }
					});
					formMarkers.push(marker);

	        marker.addListener('click', function() {
//					map.setZoom(8);
//					map.setCenter(marker.getPosition());
						this.setIcon(activeIcon);
	        });

				}
				*/
				
			} else {
							
				for (i = 0; i < localidades.length; i++) {
					var nombre = localidades[i].nombre;
					var lt = parseFloat(localidades[i].lt);
					var lg = parseFloat(localidades[i].lg);
				
					var coords = { lat: lt, lng:lg }
					var marker = new google.maps.Marker({
						position: coords,
						map: formMap,
						icon: icon,
						title: nombre,
						clickable: false,
						options: { opacity:0.4 }
					});
					formMarkers.push(formMarker);
				}
			
			}


			/*
			// recenter around markers
			formBounds = new google.maps.LatLngBounds();
			for (var i = 0; i < formMarkers.length; i++) {
				formBounds.extend(formMarkers[i].getPosition());
			}
			formMap.fitBounds(formBounds);
			formMap.panToBounds(formBounds);
			*/
			
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
		
		function addDragMarker(index) {		
			dragmarker = new google.maps.Marker({
			    position: formMap.getCenter(),
			    map: formMap,
					label: index.toString(),
	      	animation: google.maps.Animation.DROP,
			    draggable:true
			});
			
			dragmarkers.push(dragmarker);			
			var dragIndex = index-1;
			console.log(dragIndex);
			google.maps.event.addListener(dragmarker, 'dragend', function(){
				$("#section6 #artistEspaciosOtherLat"+dragIndex).val(dragmarkers[dragIndex].position.lat());
				$("#section6 #artistEspaciosOtherLng"+dragIndex).val(dragmarkers[dragIndex].position.lng());
			});
		}
		
		function removeDragMarker(index) {
			dragmarkers[index].setMap(null);
			dragmarkers.pop();
		}
		
		
		
		
		
		
		

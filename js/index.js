var map;
function initMap() {
	inicializarVista();
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: lt_inicial, lng: lg_inicial},
    zoom: zoom_inicial,
    disableDefaultUI: true
  });
  var lugares = obtener(url + 'lugares.php');
	for (i=0; i<lugares.length; i++){
		new google.maps.Marker({
			position: new google.maps.LatLng(lugares[i].lt, lugares[i].lg),
			map: map,
			title: lugares[i].Nombre,
			indice: i
		});
	}
}

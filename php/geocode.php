<?php
if(isset($_GET['loc']) && $_GET['loc']!=""){
	//$loc = strtolower(str_replace(" ","", urldecode($_GET['loc'])));
	//$loc = urldecode($_GET['loc']);
	$loc = urlencode($_GET['loc']);
	//echo $loc;
	if($_GET['type']=="address"){
		$json = file_get_contents('https://maps.googleapis.com/maps/api/place/autocomplete/json?input='.$loc.'&types=geocode&key=AIzaSyD4I4HZ25lHy9WftOj4x3fEKCoEGYmJHgk');
//		$json = file_get_contents('https://maps.googleapis.com/maps/api/place/autocomplete/json?input='.$loc.'&language=es&types=geocode&key=AIzaSyD4I4HZ25lHy9WftOj4x3fEKCoEGYmJHgk');
	} else {
		$json = file_get_contents('https://maps.googleapis.com/maps/api/place/autocomplete/json?input='.$loc.'&types=(cities)&key=AIzaSyD4I4HZ25lHy9WftOj4x3fEKCoEGYmJHgk');
//		$json = file_get_contents('https://maps.googleapis.com/maps/api/place/autocomplete/json?input='.$loc.'&language=es&types=(cities)&key=AIzaSyD4I4HZ25lHy9WftOj4x3fEKCoEGYmJHgk');
	}
	$data = json_decode($json);
	
//	echo "<pre>";
	//print_r($data);
//	echo "</pre>";

	foreach($data->predictions as $result){
		$place_id = $result->place_id;
		$name = $result->structured_formatting->main_text . ', ' . $result->structured_formatting->secondary_text;
		$names[] = $name;
		$locations[] = array('name'=>$name, 'place_id' => $place_id);			
	}	

	echo json_encode($locations, JSON_UNESCAPED_UNICODE);
	
}

if(isset($_GET['sel']) && $_GET['sel']!=""){

	$sel = urldecode($_GET['sel']);

	$json = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$sel.'&components=country:es&types=cities&key=AIzaSyB_unL7sNlPf_bA2EBfdBrWSeYzF-jMERA');
	$data = json_decode($json);
	//echo "<pre>";
	//print_r($data);
	$name = $data->results[0]->address_components[0]->long_name;
	$lat = $data->results[0]->geometry->location->lat;
	$lng = $data->results[0]->geometry->location->lng;
	$data = array($name, $lat, $lng);
	
	echo json_encode($data, JSON_UNESCAPED_UNICODE);
// echo $data->results[0]->address_components[0]->long_name;
//	echo $data->results[0]->address_components[0]->short_name;
//	echo $data->results[0]->address_components[0]->types[0];
		
}
?>
<?php
if(isset($_GET['loc']) && $_GET['loc']!=""){
	$loc = strtolower(str_replace(" ","", urldecode($_GET['loc'])));
	/*
	$locations = array();	
	$json = file_get_contents('https://secure.geonames.org/search?type=json&name_startsWith='.$loc.'&country=ES&continentCode=EU&countryBias=ES&fcl=P&orderby=relevance&username=maxwellstein');
	$data = json_decode($json);
	foreach($data->geonames as $geoname){
		$locations[]=$geoname->name;
		$lats[]=$geoname->lat;
		$lngs[]=$geoname->lng;
	}
	
	echo json_encode($locations, JSON_UNESCAPED_UNICODE);
	*/
	
	//	$json = file_get_contents('https://maps.googleapis.com/maps/api/place/autocomplete/json?input='.$loc.'&types=geocode&components=country:es&key=AIzaSyD4I4HZ25lHy9WftOj4x3fEKCoEGYmJHgk');
	//$json = file_get_contents('https://maps.googleapis.com/maps/api/place/autocomplete/json?input='.$loc.'&types=geocode&components=country:es&key=AIzaSyD4I4HZ25lHy9WftOj4x3fEKCoEGYmJHgk');
	$json = file_get_contents('https://maps.googleapis.com/maps/api/place/autocomplete/json?input='.$loc.'&types=geocode&components&key=AIzaSyD4I4HZ25lHy9WftOj4x3fEKCoEGYmJHgk');
	
	$data = json_decode($json);
	//print_r($data);


	foreach($data->predictions as $result){
		$place_id = $result->place_id;
		$name = $result->structured_formatting->main_text;
		$names[] = $name;
		$locations[] = array('name'=>$name, 'place_id' => $place_id);			
	}	

	$locations = array_unique($locations);
	
	
	//$lats = array_unique($lats);
	//$lngs = array_unique($lngs);
		
	//print_r($locations);
//	$locations = array_unique($locations);
	//$lats = array_unique($lats);
	//$lngs = array_unique($lngs);
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
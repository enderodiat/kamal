<?php header('Content-Type: text/html; charset=utf-8');?>
<?php// print_r($_POST);?>
<?php
$con=mysqli_connect("localhost","maxwell","angeline","kamal");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$userType = mysqli_real_escape_string($con, $_POST['userType']);

if($userType=="agentCultural"){

	$artistNombre = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['artistNombre'])));
	$artistEmail = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['artistEmail'])));
	$artistBirthYear = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['artistBirthYear'])));
	$artistDeathYear = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['artistDeathYear'])));
	$artistGenero = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['artistGenero'])));
	$artistPaginaWeb = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['artistPaginaWeb'])));
	$telefono = "NA";
	$artistBirthLoc = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['artistBirthLoc'])));
	$artistBirthLocLat = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['artistBirthLocLat'])));
	$artistBirthLocLng = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['artistBirthLocLng'])));
	$artistCurrentLoc = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['artistCurrentLoc'])));
	$artistCurrentLocLat = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['artistCurrentLocLat'])));
	$artistCurrentLocLng = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['artistCurrentLocLng'])));

	if (isset($_POST['artistEspacios'])){
		$artistEspacios_init = $_POST['artistEspacios'];
		foreach($artistEspacios_init as $artistEspacio){
			$artistEspacios[] = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $artistEspacio)));
		}
		$artistEspacios = json_encode($artistEspacios);
	} else {
		$artistEspacios = "";
	}

	if (isset($_POST['artistEspacios'])){

		$artistEspaciosOther_init = $_POST['artistEspaciosOther'];

		foreach($artistEspaciosOther_init as $artistEspacioOther){
			$artistEspaciosOther[] = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $artistEspacioOther)));
		}

		$artistEspaciosOther_num = count($artistEspaciosOther)+1;

		$artistEspaciosOther = json_encode($artistEspaciosOther);

		for ($i = 1; $i < $artistEspaciosOther_num; $i++) {
			$artistEspaciosOtherLat[] = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['artistEspaciosOtherLat'.$i])));
			$artistEspaciosOtherLng[] = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['artistEspaciosOtherLng'.$i])));
		}
		
		$artistEspaciosOtherLat = json_encode($artistEspaciosOtherLat);
		$artistEspaciosOtherLng = json_encode($artistEspaciosOtherLng);
		
		
	} else {
		$artistEspaciosOther = "";
	}

	if (isset($_POST['artistEspacios'])){

		$artistEventos_init = $_POST['artistEventos'];

		foreach($artistEventos_init as $artistEvento){
			$artistEventos[] = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $artistEvento)));
		}

		$artistEventos = json_encode($artistEventos);

	} else {
		$artistEventos = "";
	}

	if (isset($_POST['artistEventosOther'])){

		$artistEventosOther_init = $_POST['artistEventosOther'];
		foreach($artistEventosOther_init as $artistEventoOther){
			$artistEventosOther[] = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $artistEventoOther)));
		}

		$artistEventosOther = json_encode($artistEventosOther);

	} else {
		$artistEventosOther = "";
	}

	if (isset($_POST['artistEventosOther'])){

		$artistEtiquetas_init = $_POST['artistEtiquetas'];
		foreach($artistEtiquetas_init as $artistEtiqueta){
			$artistEtiquetas[] = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $artistEtiqueta)));
		}

		$artistEtiquetas = json_encode($artistEtiquetas);

	} else {
		$artistEtiquetas = "";
	}



	$artistEtiquetasOther = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['artistEtiquetasOther'])));

	$artistSuggestions = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['artistSuggestions'])));
	$artistAcceptTerms = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['artistAcceptTerms'])));

	$sql="INSERT INTO userData (type, nombre, email, startYear, endYear, genero, paginaWeb, telefono, startLoc, currentLoc, espacios, espaciosOther, espaciosOtherLat, espaciosOtherLng, eventos, eventosOther, etiquetas, etiquetasOther, suggestions, acceptTerms, entry_date)
	VALUES ('$userType', '$artistNombre', '$artistEmail', '$artistBirthYear', '$artistDeathYear', '$artistGenero', '$artistPaginaWeb', '$telefono', '$artistBirthLoc', '$artistCurrentLoc', '$artistEspacios', '$artistEspaciosOther', '$artistEspaciosOtherLat', '$artistEspaciosOtherLng', '$artistEventos', '$artistEventosOther', '$artistEtiquetas', '$artistEtiquetasOther', '$artistSuggestions', '$artistAcceptTerms', now())";

} else {


	$institucionNombre = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['institucionNombre'])));
	$institucionEmail = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['institucionEmail'])));
	$institucionStartYear = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['institucionStartYear'])));
	$institucionEndYear = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['institucionEndYear'])));

	$genero = "NA";
	$institucionPaginaWeb = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['institucionPaginaWeb'])));
	$institucionTelefono = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['institucionTelefono'])));

	$startLoc = "NA";
	
	$institucionLoc = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['institucionLoc'])));
	$institucionLocOtherLat = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['institucionLocOtherLat'])));
	$institucionLocOtherLng = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['institucionLocOtherLng'])));

	$espacios = "NA";
	$espaciosOther = "NA";

	$espaciosOtherLat = "NA";
	$espaciosOtherLng = "NA";

	if (isset($_POST['institucionEventos'])){

		$institucionEventos_init = $_POST['institucionEventos'];

		foreach($institucionEventos_init as $institucionEvento){
			$institucionEventos[] = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $institucionEvento)));
		}

		$institucionEventos = json_encode($institucionEventos);

	} else {
		$institucionEventos = "";
	}
	
	
	if (isset($_POST['institucionEventosOther'])){

		$institucionEventosOther_init = $_POST['institucionEventosOther'];
		foreach($institucionEventosOther_init as $institucionEventoOther){
			$institucionEventosOther[] = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $institucionEventoOther)));
		}

		$institucionEventosOther = json_encode($institucionEventosOther);

	} else {
		$institucionEventosOther = "";
	}

	if (isset($_POST['institucionEtiquetas'])){

		$institucionEtiquetas_init = $_POST['institucionEtiquetas'];
		foreach($institucionEtiquetas_init as $institucionEtiqueta){
			$institucionEtiquetas[] = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $institucionEtiqueta)));
		}
		$institucionEtiquetas = json_encode($institucionEtiquetas);

	} else {
		$institucionEtiquetas = "";
	}
	
	$institucionEtiquetasOther = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['institucionEtiquetasOther'])));
	

	$institucionSuggestions = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['institucionSuggestions'])));
	$institucionAcceptTerms = utf8_decode(htmlspecialchars(mysqli_real_escape_string($con, $_POST['institucionAcceptTerms'])));


	$sql="INSERT INTO userData (type, nombre, email, startYear, endYear, genero, paginaWeb, telefono, startLoc, currentLoc, espacios, espaciosOther, espaciosOtherLat, espaciosOtherLng, eventos, eventosOther, etiquetas, etiquetasOther, suggestions, acceptTerms, entry_date)
	VALUES ('$userType', '$institucionNombre', '$institucionEmail', '$institucionStartYear', '$institucionEndYear', '$genero', '$institucionPaginaWeb', $institucionTelefono, '$startLoc', '$institucionLoc', '$espacios', '$espaciosOther', '$espaciosOtherLat', '$espaciosOtherLng', '$institucionEventos', '$institucionEventosOther', '$institucionEtiquetas', '$institucionEtiquetasOther', '$institucionSuggestions', '$institucionAcceptTerms', now())";


}

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);



?>
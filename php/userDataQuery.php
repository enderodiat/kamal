<?php
  $sql = "SELECT id, type, nombre, startYear, endYear, genero, paginaWeb, startLoc, currentLoc, espacios, espaciosOther, espaciosOtherLat, espaciosOtherLng, eventos, eventosOther, etiquetas, etiquetasOther, entry_date FROM $tabla order by $order";	
		
if ($result=mysqli_query($con, $sql)){			
  while ($row=mysqli_fetch_assoc($result)){
		$resultados[] = $row;	
  }
}

foreach($resultados as $key=>$resultado){
	$espacios = json_decode($resultado['espacios']);

	$espaciosNombres = array();
	$espaciosLat = array();
	$espaciosLng = array();

	foreach($espacios as $espacio){
		//print_r($espacio);
	  $sql = "SELECT * FROM lugares where Id = $espacio";	
		
		if ($result=mysqli_query($con, $sql)){			
		  while ($row=mysqli_fetch_assoc($result)){
				$espaciosNombres[] = $row["Nombre"];
				$espaciosLat[] = $row["lt"];
				$espaciosLng[] = $row["lg"];
		  }
		}		
	}
	if(!empty($espaciosNombres)){
		$resultados[$key]['espaciosNombres'] = json_encode($espaciosNombres);
		$resultados[$key]['espaciosLat'] = json_encode($espaciosLat);
		$resultados[$key]['espaciosLng'] = json_encode($espaciosLng);		
	} else {
		$resultados[$key]['espaciosNombres'] = "";
		$resultados[$key]['espaciosLat'] = "";
		$resultados[$key]['espaciosLng'] = "";
	}
}

//print_r($resultados);


echo json_encode($resultados, JSON_UNESCAPED_UNICODE);

?>
<?php
  header("Content-Type: text/html;charset=utf-8");
  function devolverJSON($tabla, $order){
    $dbserver = "localhost";
    $dbuser = "kamal";
		$dbpass = "Kamal2018";
  	$dbname = "kamal";
    $con = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);
    mysqli_query($con, "SET NAMES 'utf8'");
    $consulta = "SELECT * FROM $tabla order by $order";
    $datos = mysqli_query($con, $consulta);
    while($row = $datos->fetch_array()) {
      $resultados[] = $row;
    }
    echo json_encode($resultados);
  }
?>

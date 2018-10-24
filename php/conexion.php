<?php
  header("Content-Type: application/json;charset=utf-8");
  function devolverJSON($tabla, $order){
    $dbserver = "localhost";
    //$dbuser = "kamal";
		//$dbpass = "Kamal2018";
  	$dbuser = "maxwell";
		$dbpass = "angeline";
  	$dbname = "kamal";
    $con = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);
    mysqli_query($con, "SET NAMES 'utf8'");
		
		if ( $tabla == "userData"){
			include("userDataQuery.php");
		} else {
	    $sql = "SELECT * FROM $tabla order by $order";	
				
			if ($result=mysqli_query($con, $sql)){			
			  while ($row=mysqli_fetch_assoc($result)){
					$resultados[] = $row;	
			  }
			}

	    echo json_encode($resultados, JSON_UNESCAPED_UNICODE);
		}

  }
?>
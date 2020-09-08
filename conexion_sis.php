<?php
    $serverName = "localhost";
	$connectionInfo = array( "Database"=>"dbventa");
    $con = sqLsrv_connect( $serverName, $connectionInfo);

	if ($con) {
		echo "Conexion exitosa";	# code...
	}
	else{
		echo "Fallo en la conexion";
	}

?>
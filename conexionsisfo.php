<?php
$serverName = "TSOSRVMEX\TSOSRVMEXSQL"; //serverName\instanceName
$connectionInfo = array( "Database"=>"LocatingSystem", "UID"=>"sa", "PWD"=>"M0ther1979");
$con = sqLsrv_connect( $serverName, $connectionInfo);

if( $con ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
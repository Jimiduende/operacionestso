
<!DOCTYPE html>

<meta charset="UTF-8">
<html>
	<head>		
	    <meta charset="UTF-8">	    
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" >
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <!-- Estilos -->	   
	    <title>TSO | Inicio</title>       
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link rel="stylesheet" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
        <link href="https://file.myfontastic.com/xztneUq8QzZmWXZnLJxNub/icons.css" rel="stylesheet">
	</head>
	<body>
	<!--Codigo paa mostrar tabla-->
		<div class="col-md-8 col-md-offset-2">
			<table class="table table-bordered table-responsive">				
				<tr>
					<td>FOLIO</td>
					<td>RUTA</td>
					<td>ESTATUS</td>
					<td>ACTIVO POINTER</td>
					<td>FECHA FIN DE VIAJE</td>
					<td>ACTIVAR</td>
					<td>DESACTIVAR</td>

				</tr>
				<?php
				include("conexionsisfo.php");
					$consulta = "select * from Eliminartabla";
					$ejecutar = sqLsrv_query($con, $consulta);

					$i = 0;
					while ($fila = sqLsrv_fetch_array($ejecutar)) {
						$idfolio = $fila['Idfolio'];
						$rura = $fila['ruta'];
						$estatus = $fila['estatus'];
						$activo = $fila['activo'];
						$fecha = $fila['fechafinviaje'];	
						$i++;	
				?>
				<tr align="centro">
					<td><?php echo $idfolio; ?></td>
					<td><?php echo $rura; ?></td>
					<td><?php echo $estatus; ?></td>
					<td><?php echo $activo; ?></td>				 	
				 	<td><?php echo date_format($fecha, 'Y-m-d')?></td>;
					<td><a href="Operaciones.php?activar=<?php echo $idfolio; ?> " color="LIMEGREEN" >ACTIVAR VIAJE</a></td>								
					<td><a href="Operaciones.php?desactivar=<?php echo $idfolio; ?> " color="CRIMSON" >DESACTIVAR VIAJE</a></td>
					
				</tr>
			<?php } ?>

			</table>
		</div>
		 <!-- activar viaje -->
		<?php
			
			if (isset($_GET['activar'])) {
				include ("activar.php");					
			}
		?>
        <!-- desactivar viaje -->
       <?php
			
			if (isset($_GET['desactivar'])) {
				include ("desactivar.php");					
			}
		?>
</body>
</html>
<?php			
	if (isset($_GET['activar'])){
		$editar_id = $_GET['activar'];	

		$consulta = "SELECT * from Eliminartabla where Idfolio ='$editar_id' ";
		$ejecutar = sqLsrv_query($con, $consulta);

		$fila = sqLsrv_fetch_array($ejecutar);

		$ruta = $fila['ruta'];
		$estatus = $fila['estatus'];
		$activo = $fila['activo'];
	

		} 
?>

<br />

	<div class="col-md-8 col-md-offset-2">
	 		<form method="POST" action="">	
	 			        </div> 			
	 					     <div class="form-group">	 				
	 				         <input type="submit" name="Actualizar" class="btn btn-warning" value="ACTIVAR VIAJE" ><br />
	 			        </div>
	 					<div class="form-group">
			 				<label>Ruta</label>
			 				<input type="text" name="ruta" class="form-control" value="<?php echo $ruta; ?>"><br />
			 			</div>
			 			<div class="form-group">
			 				<label>Estatus</label>
			 				<input type="text" name="estatus" class="form-control" value="<?php echo $estatus; ?>"><br />
			 			</div> 	
			 			<div class="form-group">
			 				<label>Activo</label>
			 				<input type="text" name="nombre" class="form-control" value="<?php echo $activo; ?>"><br />
			 			</div>
			 			
			 					 	 						
	 		</form>		
	</div>

<?php			
	if (isset($_POST['Actualizar'])){

		$ruta = $_POST['ruta'];
		$estatus = $_POST['estatus'];
		$activo = $_POST['activo'];
		


		$consulta = "UPDATE Eliminartabla set ruta = '$ruta', estatus = '$estatus', activo = '1' 
					where Idfolio = '$editar_id '";

		$ejecutar = sqLsrv_query($con, $consulta);

		if ($ejecutar) 
		    {
			echo "<script>alert('Viaje Activado')</script>";	
			echo "<script> window.location='Operaciones.php'; </script>";	
			}
		
		} 
?>
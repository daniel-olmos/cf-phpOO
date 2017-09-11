<h1>HOLA ESTUDIANTE</h1>
<?php 

	$datos = $estudiantes->index();
	while($row = mysqli_fetch_array($datos)){
		echo $row['nombre']."<br>";
	}
?>
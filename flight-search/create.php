<?php 
	
	include('db.php');
	// print_r('<pre>');
	// print_r($_POST);
	// print_r('</pre>');


	
	// //var_dump($connection);

	// // insertar datos
	$sql = "INSERT INTO Vuelos( 
		type, 
		leaving_from, 
		arriving_at, 
		leaving_on, 
		returning_on, 
		adults, 
		children, 
		classe

	) VALUES (
		'".$_POST["type"]."',
		'".$_POST["leaving_from"]."',
		'".$_POST["arriving_at"]."',
		'".$_POST["leaving_on"]."',
		'".$_POST["returning_on"]."',
		'".$_POST["adults"]."',
		'".$_POST["children"]."',
		'".$_POST["classe"]."'
	)";


	// // Ejecutar consulta
	$query = mysqli_query($connection, $sql);

	if (!$query) {
		die("Query failed");
	}

	header("Location: ./");


	// Seleccionar de la db
	// $presentar = "SELECT id, type, leaving_from, arriving_at, leaving_on, returning_on, adults, children, classe FROM 'Vuelos' WHERE 1";

	// $myquery = mysqli_query($connection, $presentar);

?>




<?php 

	include('db.php');


	if (isset($_GET['id'])) {
		
		$id = $_GET['id'];
		$sql = "DELETE FROM Vuelos WHERE id = $id";
		$query = mysqli_query($connection, $sql);

		if (!$query) {
			die('Query failed.');
		}

		header('Location: /flight-search');
	}

	else{
		echo "Hello, I'm working...";
		echo $_GET['id'];
	}
	

?>


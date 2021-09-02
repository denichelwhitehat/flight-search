<?php include('db.php') ?>
<?php include('index.php') ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Flight Search</title>

	<link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="view-result container" style="width: 80%;">
		
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Type</th>
					<th>Leaving from</th>
					<th>Arriving at</th>
					<th>Leaving on</th>
					<th>Returning on</th>
					<th>Adults</th>
					<th>Children</th>
					<th>Class</th>
				</tr>
			</thead>
			<tbody>
				<?php 

				$query = 'SELECT * FROM Vuelos';
				$result = mysqli_query($connection, $query);

				while ($row = mysqli_fetch_array($result)) { ?>

					<tr>
						<td><?php echo $row['type']; ?></td>
						<td><?php echo $row['leaving_from']; ?></td>
						<td><?php echo $row['arriving_at']; ?></td>
						<td><?php echo $row['leaving_on']; ?></td>
						<td><?php echo $row['returning_on']; ?></td>
						<td><?php echo $row['adults']; ?></td>
						<td><?php echo $row['children']; ?></td>
						<td><?php echo $row['classe']; ?></td>

						<td>
							<a href="update.php?id=<?php echo $row['id']; ?>">
								<i class="fas fa-marker"></i>
							</a>
						</td>
						<td>
							<a href="delete.php?id=<?php echo $row['id']; ?>">
								<i class="far fa-trash-alt"></i>
							</a>
						</td>
					</tr>


				<?php } ?>

			</tbody>
		</table>

	</div>


</body>
</html>
	
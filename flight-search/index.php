<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Flight Search</title>

	<link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	
</head>
<body>

	<div class="container" style="border: 1px red solid; position: relative; width: 700px;">

		<div id="header" class="bg-danger text-white p-3">
			<span><a class="a" href="/flight-search"><h1 class="text">SEARCH FOR CHEAP FLIGHTS</h1></a></span>
		</div><br>

		<form action="create.php" class="flight-form row g-3" method="POST" onsubmit="return validateForm()">

			<div id="flight-select">
				<input class="important" type="radio" name="type" value="Return" id="return" checked/>
				<label for="return">RETURN</label>
				<input type="radio" name="type" value="One way" id="one-way">
				<label for="one-way">ONE WAY</label>
			</div><br>

			<div id="flight-away" class="col-md-6">
				<label class="form-label" >LEAVING FROM</label>
				<input class="form-control important" type="text" name="leaving_from" id="leaving-from" placeholder="from..." class="form-control">
			</div>

			<div class="col-md-6">
				<label class="form-label">ARRIVING AT</label>
				<input class="form-control important" type="text" name="arriving_at" id="arriving-at" placeholder="at..." class="form-control">
			</div><br>

			<div id="flight-return" class="col-md-6">
				<label class="form-label" for="living-on">LEAVING ON</label>
				<input class="form-control important" type="date" name="leaving_on" id="living-on" class="form-control">
			</div>

			<div class="col-md-6">
				<label class="form-label" for="arriving-on" id="to-remove">RETURNING ON</label>
				<input class="form-control important" type="date" name="returning_on" id="arriving-on" class="form-control">
			</div><br>

			<div id="flight-person" class="col-md-4">
				<label class="form-label" >ADULTS</label>
				<select id="adults" name="adults" class="form-control">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				</select>
			</div>

			<div class="col-md-4">
				<label class="form-label" >CHILDREN</label>
				<select id="children" name="children" class="form-control">
					<option>o</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
				</select>
			</div>

			<div class="col-md-4">
				<label class="form-label" >CLASS</label>
				<select id="classe" name="classe" class="form-control">
					<option>ECONOMY</option>
					<option>BUSINESS</option>
					<option>FIRST CLASS</option>
				</select>
			</div><br>

			<button type="submit" class="btn btn-primary" style="background: green;">CREATE FLIGHTS</button>

			<button class="btn btn-primary cc" style="background: green;" onclick="window.location.href='./read.php'">Show Flights</button>


		</form>

		<br>		

	</div>

	<br>
	<br>


	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
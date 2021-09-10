<html>
<head>
<title>Mechanic Shop Database</title> 
<link rel="stylesheet" href="styles.css">
</head>

<body style="background-color:lightblue;">
<h1>K Cars With The Most Services</h1>
<hr/>

	<?php
	include "db_connect.php";
	echo "<br>";
	
	$keywordfromform = $_GET["keyword"];
	$a = "SELECT c.make, c.model, COUNT(sr.rid) AS service_requests FROM Car c, Service_Request sr WHERE c.vin = sr.car_vin GROUP BY c.make, c.model ORDER BY service_requests DESC LIMIT ";
	
	$sql = $a . $keywordfromform;
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		echo $row["make"]. " " . $row["model"]. " " . $row["service_requests"]."<br>";
	  }
	} else {
	  echo "0 results";
	}
	?>
	
</body>
</html>
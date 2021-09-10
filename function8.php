<html>
<head>
<title>Mechanic Shop Database</title> 
<link rel="stylesheet" href="styles.css">
</head>

<body style="background-color:lightblue;">
<h1>Cars Before 1995 With 50,000 Miles</h1>
<hr/>


	<?php
	include "db_connect.php";
	echo "<br>";

	$sql = "SELECT c.make, c.model, c.year FROM Car c, Service_Request sr WHERE c.year < 1995 AND c.vin = sr.car_vin AND sr.odemeter < 50000";
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		echo $row["make"]. " " . $row["model"]. " " . $row["year"]."<br>";
	  }
	} else {
	  echo "0 results";
	}
	?>
	
</body>
</html>
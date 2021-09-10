<html>
<head>
<title>Mechanic Shop Database</title> 
<link rel="stylesheet" href="styles.css">
</head>

<body style="background-color:lightblue;">
<h1>Car Table</h1>
<hr/>

	<?php
	include "db_connect.php";
	echo "<br>";
	
	$vinForm = $_GET["vin"];
	$makeForm = $_GET["make"];
	$modelForm = $_GET["model"];
	$yearForm = $_GET["year"];
	
	$a = "INSERT INTO Car (vin,make,model,year) VALUES ( '" . $vinForm . "', '" . $makeForm . "', '" . $modelForm . "', '" . $yearForm . "') ";
	$mysqli->query($a);
	
	$sql = "SELECT * FROM Car";
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		echo $row["vin"]. " " . $row["make"]. " " . $row["model"]. " " . $row["year"]."<br>";
	  }
	} else {
	  echo "0 results";
	}
	?>
	
</body>
</html>
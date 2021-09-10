<html>
<head>
<title>Mechanic Shop Database</title> 
<link rel="stylesheet" href="styles.css">
</head>

<body style="background-color:lightblue;">
<h1>Service Request Table</h1>
<hr/>

	<?php
	include "db_connect.php";
	echo "<br>";
	
	$ridForm = $_GET["rid"];
	$cidForm = $_GET["cid"];
	$vinForm = $_GET["vin"];
	$dateForm = $_GET["date"];
	$odometerForm = $_GET["odometer"];
	$complaintForm = $_GET["complaint"];
	
	$a = "INSERT INTO service_request (rid,customer_id,car_vin,date,odemeter,complain) VALUES ( '" . $ridForm . "', '" . $cidForm . "', '" . $vinForm . "', '" . $dateForm . "', '" . $odometerForm . "', '" . $complaintForm . "' ) ";
	$mysqli->query($a);
	
	$sql = "SELECT * FROM service_request";
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		echo $row["rid"]. " " . $row["customer_id"]. " " . $row["car_vin"]. " " . $row["date"]. " " . $row["odemeter"]. " " . $row["complain"]."<br>";
	  }
	} else {
	  echo "0 results";
	}
	?>
	
</body>
</html>
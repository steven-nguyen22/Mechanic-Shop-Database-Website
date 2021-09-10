<html>
<head>
<title>Mechanic Shop Database</title> 
<link rel="stylesheet" href="styles.css">
</head>

<body style="background-color:lightblue;">
<h1>Customers With More Than 20 Cars</h1>
<hr/>


	<?php
	include "db_connect.php";
	echo "<br>";

	$sql = "SELECT c.fname, c.lname FROM Customer c, Car ca, Owns o WHERE c.id = o.customer_id AND ca.vin = o.car_vin GROUP BY c.fname, c.lname HAVING COUNT(*) > 20";
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		echo $row["fname"]. " " . $row["lname"]."<br>";
	  }
	} else {
	  echo "0 results";
	}
	?>
	
</body>
</html>
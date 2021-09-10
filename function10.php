<html>
<head>
<title>Mechanic Shop Database</title> 
<link rel="stylesheet" href="styles.css">
</head>

<body style="background-color:lightblue;">
<h1>Customers In Descending Order Of Their Total Bill</h1>
<hr/>


	<?php
	include "db_connect.php";
	echo "<br>";

	$sql = "SELECT c.fname, c.lname, SUM(cr.bill) AS totalbill FROM Customer c, Service_Request sr, Closed_Request cr WHERE sr.rid = cr.rid AND c.id = sr.customer_id GROUP BY c.fname, c.lname ORDER BY totalbill DESC";
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		echo $row["fname"]. " " . $row["lname"]. " " . $row["totalbill"]."<br>";
	  }
	} else {
	  echo "0 results";
	}
	?>
	
</body>
</html>
<html>
<head>
<title>Mechanic Shop Database</title> 
<link rel="stylesheet" href="styles.css">
</head>

<body style="background-color:lightblue;">
<h1>Customer Table</h1>
<hr/>

	<?php
	include "db_connect.php";
	echo "<br>";
	
	$cidForm = $_GET["cid"];
	$fnameForm = $_GET["fname"];
	$lnameForm = $_GET["lname"];
	$pnumForm = $_GET["pnum"];
	$addressForm = $_GET["address"];
	
	$a = "INSERT INTO Customer (id,fname,lname,phone,address) VALUES ( '" . $cidForm . "', '" . $fnameForm . "', '" . $lnameForm . "', '" . $pnumForm . "', '" . $addressForm . "') ";
	$mysqli->query($a);
	
	$sql = "SELECT * FROM Customer";
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		echo $row["id"]. " " . $row["fname"]. " " . $row["lname"]. " " . $row["phone"]. " " . $row["address"]."<br>";
	  }
	} else {
	  echo "0 results";
	}
	?>
	
</body>
</html>
<html>
<head>
<title>Mechanic Shop Database</title> 
<link rel="stylesheet" href="styles.css">
</head>

<body style="background-color:lightblue;">
<h1>Mechanic Table</h1>
<hr/>

	<?php
	include "db_connect.php";
	echo "<br>";
	
	$midForm = $_GET["mid"];
	$fnameForm = $_GET["fname"];
	$lnameForm = $_GET["lname"];
	$experienceForm	= $_GET["experience"];
	
	$a = "INSERT INTO Mechanic (id,fname,lname,experience) VALUES ( '" . $midForm . "', '" . $fnameForm . "', '" . $lnameForm . "', '" . $experienceForm . "') ";
	$mysqli->query($a);
	
	$sql = "SELECT * FROM Mechanic";
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		echo $row["id"]. " " . $row["fname"]. " " . $row["lname"]. " " . $row["experience"]."<br>";
	  }
	} else {
	  echo "0 results";
	}
	?>
	
</body>
</html>
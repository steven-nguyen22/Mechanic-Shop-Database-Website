<html>
<head>
<title>Mechanic Shop Database</title> 
<link rel="stylesheet" href="styles.css">
</head>

<body style="background-color:lightblue;">
<h1>Closed Request Table</h1>
<hr/>

	<?php
	include "db_connect.php";
	echo "<br>";
	
	$widForm = $_GET["wid"];
	$ridForm = $_GET["rid"];
	$midForm = $_GET["mid"];
	$dateForm = $_GET["date"];
	$commentForm = $_GET["comment"];
	$billForm = $_GET["bill"];
	
	
	$a = "INSERT INTO closed_request (wid,rid,mid,date,comment,bill) VALUES ( '" . $widForm . "', '" . $ridForm . "', '" . $midForm . "', '" . $dateForm . "', '" . $commentForm . "', '" . $billForm . "' ) ";
	$mysqli->query($a);
	
	$sql = "SELECT * FROM closed_request";
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		echo $row["wid"]. " " . $row["rid"]. " " . $row["mid"]. " " . $row["date"]. " " . $row["comment"]. " " . $row["bill"]."<br>";
	  }
	} else {
	  echo "0 results";
	}
	?>
	
</body>
</html>
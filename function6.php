<html>
<head>
<title>Mechanic Shop Database</title> 
<link rel="stylesheet" href="styles.css">
</head>

<body style="background-color:lightblue;">
<h1>Customers With Bill Less Than 100</h1>
<hr/>


	<?php
	include "db_connect.php";
	echo "<br>";

	$sql = "SELECT cr.date, cr.comment, cr.bill FROM Closed_Request cr WHERE bill < 100";
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		echo $row["date"]. " " . $row["comment"]. " " . $row["bill"]."<br>";
	  }
	} else {
	  echo "0 results";
	}
	?>
	
</body>
</html>
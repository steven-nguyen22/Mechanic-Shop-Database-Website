<html>
<head>
<title>Mechanic Shop Database</title> 
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
 
  <style>
  #feedback { font-size: 1.4em; }
  #selectable .ui-selecting { background: #FECA40; }
  #selectable .ui-selected { background: #F39814; color: white; }
  #selectable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #selectable li { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <link rel="stylesheet" href="styles.css">
</head>

<body style="background-color:lightblue;">
<h1>Mechanic Shop Database</h1> 
<hr/>

<?php

include "db_connect.php";


?>

<ol id="selectable">
  <li><a href="function1.php">1. Add Customer</li>
  <li><a href="function2.php">2. Add Mechanic</li>
  <li><a href="function3.php">3. Add Car</li>
  <li><a href="function4.php">4. Insert Service Request</li>
  <li><a href="function5.php">5. Close Service Request</li>
  <li><a href="function6.php">6. List Customers With Bill Less Than 100</a></li>
  <li><a href="function7.php">7. List Customers With More Than 20 Cars</li>
  <li><a href="function8.php">8. List Cars Before 1995 With 50,000 Miles</li>
  <li><a href="function9.php">9. List K Cars With The Most Services</li>
  <li><a href="function10.php">10. List Customers In Descending Order Of Their Total Bill</li>
</ol>

<?php

$mysqli->close();
?>

</body>
</html>

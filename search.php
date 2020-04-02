<?php

session_start();
$query = $_SESSION['search'];
$conn = new mysqli("localhost","root", "", "cps630");
  $result = $conn->query("SELECT * FROM home WHERE placelocation LIKE '%" . $query ."%' OR placename LIKE '%" . $query ."%'");
  $outp = array();
  while( $rs = $result->fetch_array(MYSQLI_ASSOC)) {

		$outp[] = $rs;
  }

  	echo json_encode($outp);


?>

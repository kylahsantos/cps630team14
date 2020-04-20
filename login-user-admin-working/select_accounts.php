<?php

//select.php

include('db_connection.php');

$query_accounts = "SELECT * FROM accounts ORDER BY id ASC";
$statement = $connect->prepare($query_accounts);
if($statement->execute())
{
  while($row = $statement->fetch(PDO::FETCH_ASSOC))
  {
    $data[] = $row;
  }
  echo json_encode($data);
}

?>

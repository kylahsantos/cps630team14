<?php

//user_fetch_data.php

$connect = new PDO("mysql:host=localhost;dbname=cps630", "root", "");

$form_data = json_decode(file_get_contents("php://input"));

$query = '';
$data = array();

if(isset($form_data->search_query))
{
 $search_query = $form_data->search_query;
 $query = "
 SELECT * FROM home
 WHERE (placename LIKE '%$search_query%'
 OR placelocation LIKE '%$search_query%'
 OR price LIKE '%$search_query%')
 ";
}
else
{
 $query = "SELECT * FROM home ORDER BY place_id ASC";
}

$statement = $connect->prepare($query);

if($statement->execute())
{
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }
 echo json_encode($data);
}

?>

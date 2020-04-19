<?php
 
//user_fetch_data_reviews.php


$connect = new PDO("mysql:host=localhost;dbname=cps630", "root", "");

$form_data = json_decode(file_get_contents("php://input"));

$query = '';
$data = array();
 $place_id = $form_data->place_id;
$query = "SELECT h.place_id as place_id, h.placename as placename 
 FROM home h WHERE h.place_id = '".$place_id."'";


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
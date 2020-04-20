<?php
 
//user_fetch_data_map.php


$connect = new PDO("mysql:host=localhost;dbname=cps630", "root", "");

$form_data = json_decode(file_get_contents("php://input"));

$query = '';
$data = array();
 $place1_id = $form_data->place1_id;
 $place2_id = $form_data->place2_id;
$query = "SELECT mp.place1_id as place1_id, mp.place2_id as place2_id, mp.mapimage as mapimage 
 FROM mappair mp WHERE mp.place1_id = ".$place1_id." AND mp.place2_id = ".$place2_id;

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
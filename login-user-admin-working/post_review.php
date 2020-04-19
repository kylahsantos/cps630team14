<?php

//post_review.php

$connect = new PDO("mysql:host=localhost;dbname=cps630", "root", "");

$form_data = json_decode(file_get_contents("php://input"));

$query = '';
$data = array();
 $place_id = $form_data->place_id;
 $review = str_replace("'","''",$form_data->review);
 $ranking = $form_data->ranking;
 $rev_name = $form_data->rev_name;
$query = "INSERT INTO `review` (`place_id`, `rev_name`, `rev_date`, `review`, `ranking`) VALUES
(".$place_id.", '".$rev_name."', CURDATE(), '".$review."', ".$ranking.")";

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
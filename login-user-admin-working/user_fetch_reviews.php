<?php

//user_fetch_reviews.php

$connect = new PDO("mysql:host=localhost;dbname=cps630", "root", "");

$form_data = json_decode(file_get_contents("php://input"));

$query = '';
$data = array();

if(isset($form_data->search_query))
{
 $search_query = $form_data->search_query;
 $query = "
 SELECT r.id as id, h.place_id as place_id, r.rev_name as rev_name, r.rev_date as rev_date, r.review as review, r.ranking as ranking 
 FROM home h JOIN review r ON h.place_id = r.place_id
 WHERE (h.placename LIKE '%$search_query%'
 OR h.placelocation LIKE '%$search_query%'
 OR h.price LIKE '%$search_query%')
 ";
}
else
{
 $query = "SELECT r.id as id, h.place_id as place_id, r.rev_name as rev_name, r.rev_date as rev_date, r.review as review, r.ranking as ranking 
 FROM home h JOIN review r ON h.place_id = r.place_id ORDER BY place_id ASC";
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

<?php

//delete.php

include('db_connection.php');

$message = '';

$form_data_accounts = json_decode(file_get_contents("php://input"));

$query = "DELETE FROM accounts WHERE id = '".$form_data_accounts->id."'";

$statement = $connect->prepare($query);
if($statement->execute())
{
 $message = 'Data Deleted';
}

$output = array(
 'message' => $message
);

echo json_encode($output);

?>

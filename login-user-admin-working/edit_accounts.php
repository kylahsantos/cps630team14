<?php

//edit.php

include('db_connection.php');

$message = '';

$form_data_accounts = json_decode(file_get_contents("php://input"));

$data = array(
 ':username'  => $form_data_accounts->username,
 ':password'  => $form_data_accounts->password,
 ':id'    => $form_data_accounts->id
);

$query = "
 UPDATE accounts
 SET username = :username, password = :password
 WHERE id = :id
";

$statement = $connect->prepare($query);
if($statement->execute($data))
{
 $message = 'Data Edited';
}

$output = array(
 'message' => $message
);

echo json_encode($output);

?>

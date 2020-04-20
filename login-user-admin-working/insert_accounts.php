
<?php

//insert.php

include('db_connection.php');

$message = '';

$form_data_accounts = json_decode(file_get_contents("php://input"));

$data = array(
 ':username'  => $form_data_accounts->username,
 ':password'  => $form_data_accounts->password
);

$query = "
 INSERT INTO accounts
 (username, password) VALUES
 (:username, :password)
";

$statement = $connect->prepare($query);

if($statement->execute($data))
{
 $message = 'Data Inserted';
}

$output = array(
 'message' => $message
);

echo json_encode($output);

?>

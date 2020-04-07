<?php

//adminlogin.php

include('db_connection.php');

session_start();

$form_data = json_decode(file_get_contents("php://input"));

$validation_error = '';

if(empty($form_data->adminuser))
{
 $error[] = 'Admin Username is Required';
}
else
{
  $data[':adminuser'] = $form_data->adminuser;
}

if(empty($form_data->adminpassword))
{
 $error[] = 'Password is Required';
}

if(empty($error))
{
 $query = "
 SELECT * FROM accounts
 WHERE username = :adminuser
 ";
 $statement = $connect->prepare($query);
 if($statement->execute($data))
 {
  $result = $statement->fetchAll();
  if($statement->rowCount() > 0)
  {
   foreach($result as $row)
   {
    if(strcmp($form_data->adminpassword, $row["password"]) == 0)
    {
     $_SESSION["adminmodename"] = $row["username"];
    }
    else
    {
     $validation_error = 'Wrong Password';
    }
   }
  }
  else
  {
   $validation_error = 'Wrong Username';
  }
 }
}
else
{
 $validation_error = implode(", ", $error);
}

$output = array(
 'error' => $validation_error
);

echo json_encode($output);

?>

<?php

//register.php
include('database_connection.php');

$form_data = json_decode(file_get_contents("php://input"));

$message = '';
$validation_error = '';

//Username
if(empty($form_data->username))
{
 $error[] = 'Username is Required';
}
else
{
 $data[':username'] = $form_data->username;
}

//Full Name
if(empty($form_data->name))
{
 $error[] = 'Name is Required';
}
else
{
 $data[':name'] = $form_data->name;
}

//Address
if(empty($form_data->address))
{
 $error[] = 'Address is Required';
}
else
{
 $data[':address'] = $form_data->address;
}

//Telephone Number
if(empty($form_data->telno))
{
 $error[] = 'Telephone Number is Required';
}
else
{
 $data[':telno'] = $form_data->telno;
}

//Email
if(empty($form_data->email))
{
 $error[] = 'Email is Required';
}
else
{
 if(!filter_var($form_data->email, FILTER_VALIDATE_EMAIL))
 {
  $error[] = 'Invalid Email Format';
 }
 else
 {
  $data[':email'] = $form_data->email;
 }
}

//Password
if(empty($form_data->password))
{
 $error[] = 'Password is Required';
}
else
{
 $data[':password'] = password_hash($form_data->password, PASSWORD_DEFAULT);
}

if(empty($error))
{
 $query = "
 INSERT INTO users (username, fullname, address, telno, email, password) VALUES (:username, :name, :address, :telno, :email, :password)
 ";
 $statement = $connect->prepare($query);
 if($statement->execute($data))
 {
  $message = 'Registration Completed';
 }
}
else
{
 $validation_error = implode(", ", $error);
}

$output = array(
 'error'  => $validation_error,
 'message' => $message
);

echo json_encode($output);


?>

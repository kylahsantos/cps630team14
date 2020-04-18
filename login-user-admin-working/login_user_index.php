<?php

//login_user_index.php

session_start();

?>
<!DOCTYPE html>
<html ng-app="login_register_app">
 <head>
  <title>PLAN YOUR TRAVEL - USER MODE</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href ="user-admin-style.css" type = "text/css" rel ="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular-route.js"></script>

 </head>
 <body >
  <br />
  <img src="../images/banner.png" class = "center-block" id = "banner">

  <br />
	<div ng-view></div>
  
	<script src="app.js"></script>
 </body>
</html>

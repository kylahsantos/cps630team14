<?php

//login_user_index.php

session_start();

?>
<!DOCTYPE html>
<html>
 <head>
  <title>PLAN YOUR TRAVEL - USER MODE</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href ="user-admin-style.css" type = "text/css" rel ="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
 </head>
 <body>
  <br />
  <img src="../images/banner.png" class = "center-block" id = "banner">

  <br />

  <div ng-app="login_register_app" ng-controller="login_register_controller" class="container form_style">

   <?php
   if(!isset($_SESSION["name"]))
   {
   ?>
<div class="alert {{alertClass}} alert-dismissible" ng-show="alertMsg">
<a href="#" class="close" ng-click="closeMsg()" aria-label="close">&times;</a>
{{alertMessage}}
</div>

<!--USER LOGIN FORM -->
 <div class="panel panel-default" ng-show="login_form">
   <div class="panel-heading">
     <h3 class="panel-title">User Login</h3>
   </div>
  <div class="panel-body">
    <form method="post" ng-submit="submitLogin()">
        <!-- email -->
        <div class="form-group">
        <label>Enter Your Email</label>
          <input type="text" name="email" ng-model="loginData.email" class="form-control" />
        </div>
        <!-- password -->
        <div class="form-group">
        <label>Enter Your Password</label>
          <input type="password" name="password" ng-model="loginData.password" class="form-control" />
        </div>
        <!-- submit buttons -->
        <div class="form-group" align="center">
          <input type="submit" name="login" class="btn btn-primary" value="Login" />
          <br />
		  <br />
          <input type="button" name="register_link" class="btn btn-primary" ng-click="showRegister()" value="Register" />

   </form> <!-- end of form -->
   <br />
   <br />
   <button class="btn btn-primary" ng-click="redirect()">Admin Mode</button>
   </div>
 </div> <!-- end of panel body -->
</div> <!-- end of panel -->

<!--REGISTER FORM -->
 <div class="panel panel-default" ng-show="register_form">
   <div class="panel-heading">
     <h3 class="panel-title">Plan Your Travel: Register User</h3>
    </div>
    <div class="panel-body">
      <form method="post" ng-submit="submitRegister()">
        <div class="form-group">
          <label>Enter Your Account Username</label>
            <input type="text" name="username" ng-model="registerData.username" class="form-control" />
        </div>
        <div class="form-group">
          <label>Enter Your Name</label>
            <input type="text" name="name" ng-model="registerData.name" class="form-control" />
        </div>
        <div class="form-group">
          <label>Enter Your Address</label>
            <input type="text" name="address" ng-model="registerData.address" class="form-control" />
        </div>
        <div class="form-group">
          <label>Enter Your Telephone Number</label>
            <input type="text" name="telno" ng-model="registerData.telno" class="form-control" />
        </div>
        <div class="form-group">
          <label>Enter Your Email</label>
            <input type="text" name="email" ng-model="registerData.email" class="form-control" />
        </div>
        <div class="form-group">
          <label>Enter Your Password</label>
            <input type="password" name="password" ng-model="registerData.password" class="form-control" />
        </div>
        <!-- submit button -->
        <div class="form-group" align="center">
          <input type="submit" name="register" class="btn btn-primary" value="Register" />
          <br />
		  <br />
          <input type="button" name="login_link" class="btn btn-primary" ng-click="showLogin()" value="Login" />
		  <br />
		  <br />
		  <button class="btn btn-primary" ng-click="redirect()">Admin Mode</button>
        </div>
   </form> <!-- end of form -->

 </div> <!-- end of panel body -->
</div> <!-- end of panel -->

   <?php
   }
   else
   {
   ?>

   <!-- USER DASHBOARD IS HERE FOR SEARCH AND PLAN STUFF -->
   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">WELCOME TO USER MODE</h3>
    </div>
    <div class="panel-body">
     <h1>Welcome - <?php echo $_SESSION["name"];?></h1>
     <div class="container" ng-app="live_search_app" ng-controller="live_search_controller" ng-init="fetchData()">
   <br />
   <h3 align="center">SEARCH FOR A LOCATION</h3>
   <br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_query" ng-model="search_query" ng-keyup="fetchData()" placeholder="Search by Location Details" class="form-control" />
    </div>
   </div>
   <br />
    <table class="table table-striped table-bordered">
    <thead>
     <tr>
      <th>Select</th>
      <th>Place Name</th>
      <th>Place Location</th>
      <th>Price ($ CAD)</th>
     </tr>
    </thead>
    <tbody>
    <tr ng-repeat="data in searchData">
      <td> <input type= "checkbox"> </td>
      <td>{{ data.placename }}</td>
      <td>{{ data.placelocation }}</td>
      <td>{{ data.price }}</td>
     </tr>
    </tbody>
   </table>
  </div>
     <a href="logout_user.php">Logout</a>
    </div>
   </div>
  </div>
   <!-- END OF USER DASHBOARD IS HERE FOR SEARCH AND PLAN STUFF -->
   <?php
   }
   ?>


 </body>
</html>

<script>
var app = angular.module('login_register_app', []);

app.controller('login_register_controller', function($scope, $http){

$scope.closeMsg = function(){
$scope.alertMsg = false;
};

 $scope.redirect = function(){
   window.location = "login_admin_index.php";
 }

$scope.login_form = true;

$scope.showRegister = function(){
$scope.login_form = false;
$scope.register_form = true;
$scope.alertMsg = false;
};

$scope.showLogin = function(){
$scope.register_form = false;
$scope.login_form = true;
$scope.alertMsg = false;
};

$scope.submitRegister = function(){
$http({
 method:"POST",
 url:"login_user_register.php",
 data:$scope.registerData
}).success(function(data){
 $scope.alertMsg = true;
 if(data.error != '')
 {
  $scope.alertClass = 'alert-danger';
  $scope.alertMessage = data.error;
 }
 else
 {
  $scope.alertClass = 'alert-success';
  $scope.alertMessage = data.message;
  $scope.registerData = {};
 }
});
};

$scope.submitLogin = function(){
 $http({
  method:"POST",
  url:"login_user_auth.php",
  data:$scope.loginData
 }).success(function(data){
  if(data.error != '')
  {
   $scope.alertMsg = true;
   $scope.alertClass = 'alert-danger';
   $scope.alertMessage = data.error;
  }
  else
  {
   location.reload();
  }
 });
};
});
//end of login-register app

app.controller('live_search_controller', function($scope, $http){
 $scope.fetchData = function(){
  $http({
   method:"POST",
   url:"user_fetch_data.php",
   data:{search_query:$scope.search_query}
  }).success(function(data){
   $scope.searchData = data;
  });
 };
});
</script>

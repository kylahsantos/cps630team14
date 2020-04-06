<?php
  //userloginindex.php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title> User Login </title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
  <style>
.form_style
{
 width: 600px;
 margin: 0 auto;
}
</style>
</head>
<body>
<br />
 <h3 align="center">Plan Your Travel: User Mode</h3>
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

<!--LOGIN FORM -->
 <div class="panel panel-default" ng-show="login_form">
  <div class="panel-heading">
   <h3 class="panel-title">Login</h3>
  </div>
  <div class="panel-body">
   <form method="post" ng-submit="submitLogin()">
    <div class="form-group">
     <label>Enter Your Email</label>
     <input type="text" name="email" ng-model="loginData.email" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Your Password</label>
     <input type="password" name="password" ng-model="loginData.password" class="form-control" />
    </div>
    <div class="form-group" align="center">
     <input type="submit" name="login" class="btn btn-primary" value="Login" />
     <br />
     <input type="button" name="register_link" class="btn btn-primary btn-link" ng-click="showRegister()" value="Register" />
    </div>
   </form>
  </div>
 </div>

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
    <div class="form-group" align="center">
     <input type="submit" name="register" class="btn btn-primary" value="Register" />
     <br />
     <input type="button" name="login_link" class="btn btn-primary btn-link" ng-click="showLogin()" value="Login" />
    </div>
   </form>
  </div>
 </div>
 <?php
 }
 else
 {
   include("userdashboard.php");
  }
?>

</div>
</body>
</html>

<script>
var app = angular.module('login_register_app', []);
app.controller('login_register_controller', function($scope, $http){
$scope.closeMsg = function(){
$scope.alertMsg = false;
};

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
 url:"register.php",
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
 url:"userlogin.php",
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
</script>

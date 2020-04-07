<?php
  //loginindex.php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title> Plan Your Travel: Login </title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
  <style>
.form_style
{
 width: 600px;
 margin: 0 auto;
}
body{
background-color: #F6E9DB;
color: #21282D;
font-family: 'Muli', sans-serif;
}
/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
</head>
<body>
<br />
 <h3 align="center">Plan Your Travel</h3>
<br />

<div ng-app="login_register_app" ng-controller="login_register_controller" class="container form_style">
 <?php
 if(!isset($_SESSION["usermodename"]))
 {
 ?>
 <div class="alert {{alertClass}} alert-dismissible" ng-show="alertMsg">
  <a href="#" class="close" ng-click="closeMsg()" aria-label="close">&times;</a>
  {{alertMessage}}
 </div>

 <div class="tab">
   <button class="tablinks" onclick="openCity(event, 'userlogin')">User Mode</button>
   <button class="tablinks" onclick="openCity(event, 'adminlogin')">Admin Mode</button>
 </div>

<div id="userlogin" class="tabcontent">
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
          <input type="button" name="register_link" class="btn btn-primary btn-link" ng-click="showRegister()" value="Register" />
        </div>
   </form> <!-- end of form -->
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
          <input type="button" name="login_link" class="btn btn-primary btn-link" ng-click="showLogin()" value="Login" />
        </div>
   </form> <!-- end of form -->
 </div> <!-- end of panel body -->
</div> <!-- end of panel -->
</div> <!-- end of 'userlogin' tab -->
<br>
<div id="adminlogin" class="tabcontent">
<!--USER LOGIN FORM -->
 <div class="panel panel-default" ng-show="login_form">
   <div class="panel-heading">
     <h3 class="panel-title">Admin Login</h3>
   </div>
  <div class="panel-body">
    <form method="post" ng-submit="submitAdminLogin()">
        <!-- email -->
        <div class="form-group">
        <label>Enter Your Admin Username</label>
          <input type="text" name="adminuser" ng-model="loginData.adminuser" class="form-control" />
        </div>
        <!-- password -->
        <div class="form-group">
        <label>Enter Your Password</label>
          <input type="password" name="adminpassword" ng-model="loginData.adminpassword" class="form-control" />
        </div>
        <!-- submit buttons -->
        <div class="form-group" align="center">
          <input type="submit" name="login" class="btn btn-primary" value="Login" />
        </div>
   </form> <!-- end of form -->
 </div> <!-- end of panel body -->
</div> <!-- end of panel -->
</div> <!-- end of 'adminlogin' tab -->
<?php
}
else
{
   include("userdashboard.php"); //usermode has logged in
}
?>
<?php
if(isset($_SESSION["adminmodename"]))
{
  include('admindashboard.php');
}
?>
</div>

<!-- for the tabs -->
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

</script>

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
 url:"registeruser.php",
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
 url:"loginuser.php",
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

$scope.submitAdminLogin = function(){
$http({
 method:"POST",
 url:"loginadmin.php",
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

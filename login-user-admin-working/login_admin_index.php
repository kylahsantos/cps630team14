<?php

//login_admin_index.php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
  <title>PLAN YOUR TRAVEL - ADMIN LOGIN</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
  <style>
  .form_style
  {
   width: auto;
   margin: 0 auto;
  }
  </style>
 </head>
 <body>
  <br />
   <h3 align="center">PLAN YOUR TRAVEL - ADMIN LOGIN</h3>
  <br />

  <div ng-app="liveApp" ng-controller="login_controller" class="container form_style">
   <?php
   if(!isset($_SESSION["name"]))
   {
   ?>
   <div class="alert {{alertClass}} alert-dismissible" ng-show="alertMsg">
    <a href="#" class="close" ng-click="closeMsg()" aria-label="close">&times;</a>
    {{alertMessage}}
   </div>

   <div class="panel panel-default" ng-show="login_form">
    <div class="panel-heading">
     <h3 class="panel-title">Login</h3>
    </div>
    <div class="panel-body">
     <form method="post" ng-submit="submitLogin()">
      <div class="form-group">
       <label>Enter Your username</label>
       <input type="text" name="username" ng-model="loginData.username" class="form-control" />
      </div>
      <div class="form-group">
       <label>Enter Your Password</label>
       <input type="password" name="password" ng-model="loginData.password" class="form-control" />
      </div>
      <div class="form-group" align="center">
       <input type="submit" name="login" class="btn btn-primary" value="Login" />
            </form>
       <br/>
       <br/>
       <button class="btn btn-primary" ng-click="redirect()">User Mode</button>
       </div>
    </div>
   </div>
   <?php
   }
   else
   {
   ?>
<!--ADMIN DASHBOARD DATABASE MAINTAIN -->
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">WELCOME TO ADMIN MODE</h3>
</div>
<div class="panel-body">
<h1>Welcome - <?php echo $_SESSION["name"];?></h1>

<div class="container">
 <br />
 <h3 align="center">ADMIN MODE - PLAN YOUR TRAVEL DATABASE </h3><br />
 <div class="table-responsive" ng-app="liveApp" ng-controller="liveController" ng-init="fetchData()">
         <div class="alert alert-success alert-dismissible" ng-show="success" >
             <a href="#" class="close" data-dismiss="alert" ng-click="closeMsg()" aria-label="close">&times;</a>
             {{successMessage}}
         </div>
         <form name="testform" ng-submit="insertData()">
             <table class="table table-bordered table-striped">
                 <thead>
                     <tr>
                         <th>username</th>
                         <th>password</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td><input type="text" ng-model="addData.username" class="form-control" placeholder="Enter First Name" ng-required="true" /></td>
                         <td><input type="text" ng-model="addData.password" class="form-control" placeholder="Enter Last Name" ng-required="true" /></td>
                         <td><button type="submit" class="btn btn-success btn-sm" ng-disabled="testform.$invalid">Add</button></td>
                     </tr>
                     <tr ng-repeat="data in namesData" ng-include="getTemplate(data)">
                     </tr>

                 </tbody>
             </table>
         </form>
         <script type="text/ng-template" id="display">
             <td>{{data.username}}</td>
             <td>{{data.password}}</td>
             <td>
                 <button type="button" class="btn btn-primary btn-sm" ng-click="showEdit(data)">Edit</button>
                 <button type="button" class="btn btn-danger btn-sm" ng-click="deleteData(data.id)">Delete</button>
             </td>
         </script>
         <script type="text/ng-template" id="edit">
             <td><input type="text" ng-model="formData.username" class="form-control"  /></td>
             <td><input type="text" ng-model="formData.password" class="form-control" /></td>
             <td>
                 <input type="hidden" ng-model="formData.data.id" />
                 <button type="button" class="btn btn-info btn-sm" ng-click="editData()">Save</button>
                 <button type="button" class="btn btn-default btn-sm" ng-click="reset()">Cancel</button>
             </td>
         </script>
 </div>
 </div>

    </div>
    </div>
<!--ADMIN DASHBOARD DATABASE MAINTAIN -->
    <a href="logout.php">Logout</a>
</div>
   <?php
   }
   ?>

  </div>
 </body>
</html>

<script>
var app = angular.module('liveApp', []);
app.controller('login_controller', function($scope, $http){

 $scope.closeMsg = function(){
  $scope.alertMsg = false;
 };

 $scope.redirect = function(){
   window.location = "login_user_index.php";
 }

 $scope.login_form = true;

 $scope.showLogin = function(){
  $scope.login_form = true;
  $scope.alertMsg = false;
 };

 $scope.submitLogin = function(){
  $http({
   method:"POST",
   url:"login_admin_auth.php",
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

app.controller('liveController', function($scope, $http){

    $scope.formData = {};
    $scope.addData = {};
    $scope.success = false;

    $scope.getTemplate = function(data){
        if (data.id === $scope.formData.id)
        {
            return 'edit';
        }
        else
        {
            return 'display';
        }
    };

    $scope.fetchData = function(){
        $http.get('select_accounts.php').success(function(data){
            $scope.namesData = data;
        });
    };

    $scope.insertData = function(){
        $http({
            method:"POST",
            url:"insert.php",
            data:$scope.addData,
        }).success(function(data){
            $scope.success = true;
            $scope.successMessage = data.message;
            $scope.fetchData();
            $scope.addData = {};
        });
    };

    $scope.showEdit = function(data) {
        $scope.formData = angular.copy(data);
    };

    $scope.editData = function(){
        $http({
            method:"POST",
            url:"edit.php",
            data:$scope.formData,
        }).success(function(data){
            $scope.success = true;
            $scope.successMessage = data.message;
            $scope.fetchData();
            $scope.formData = {};
        });
    };

    $scope.reset = function(){
        $scope.formData = {};
    };

    $scope.closeMsg = function(){
        $scope.success = false;
    };

    $scope.deleteData = function(id){
        if(confirm("Are you sure you want to remove it?"))
        {
            $http({
                method:"POST",
                url:"delete.php",
                data:{'id':id}
            }).success(function(data){
                $scope.success = true;
                $scope.successMessage = data.message;
                $scope.fetchData();
            });
        }
    };

});

</script>

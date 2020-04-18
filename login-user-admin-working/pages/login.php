<div ng-controller="login_register_controller" class="container form_style">

<?php
   session_start();
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
		<div ng-init="redirectSearch()"></div>
   <?php
   }
   ?>
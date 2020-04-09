<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">
      <title>Plan Your Travel</title>
      <link rel="stylesheet" href="./style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
      <script src="./script.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

<style>
body{
background-color: #F6E9DB;
color: #21282D;
font-family: 'Muli', sans-serif;
}
</style>
</head>
<body ng-app="myApp">
<?php include 'pageheader.php'; ?>

  <div ng-view></div>
  
 
 
<script>
var app = angular.module("myApp", ["ngRoute"]);
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
 url:"login_user_register.php",
 data:$scope.registerData
}).then(function(data){
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
}).then(function(data){
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
  }).then(function(data){
   $scope.searchData = data;
  });
 };
});


app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "./pages/main.php"
    })
    .when("/aboutus", {
        templateUrl : "./pages/aboutus.html"
    })
    .when("/contactus", {
        templateUrl : "./pages/contactus.html"
    })
	.when("/shoppingcart", {
        templateUrl : "./pages/shoppingcart.php"	
    })
		.when("/search", {
        templateUrl : "./pages/searchpage.php"	
    })
	
	.when("/userlogin", {
		templateUrl: "./pages/login_user_index.php"
	})
	
	
	
	.when("/statueofliberty", {
        templateUrl : "./pages/main.php?id=1"
    })
	.when("/cloudgate", {
        templateUrl : "./pages/main.php?id=2"
    })
	.when("/cntower", {
        templateUrl : "./pages/main.php?id=3"
    })
	.when("/niagrafalls", {
        templateUrl : "./pages/main.php?id=4"
    })
	.when("/christtheredeemer", {
        templateUrl : "./pages/main.php?id=5"
    })
	.when("/sugarloafmountain", {
        templateUrl : "./pages/main.php?id=6"
    })
	.when("/parquenacionallosglaciares", {
        templateUrl : "./pages/main.php?id=7"
    })
	.when("/aconcagua", {
        templateUrl : "./pages/main.php?id=8"
    })
	.when("/eiffeltower", {
        templateUrl : "./pages/main.php?id=9"
    })
	.when("/louvremuseum", {
        templateUrl : "./pages/main.php?id=10"
    })
	.when("/bigben", {
        templateUrl : "./pages/main.php?id=11"
    })
	.when("/buckinghamplace", {
        templateUrl : "./pages/main.php?id=12"
    })
	.when("/tajmahal", {
        templateUrl : "./pages/main.php?id=13"
    })
	.when("/gatewayofindiamumbai", {
        templateUrl : "./pages/main.php?id=14"
    })
	.when("/boracay", {
        templateUrl : "./pages/main.php?id=15"
    })
	.when("/chocolatehills", {
        templateUrl : "./pages/main.php?id=16"
    })
	.when("/krugernationalpark", {
        templateUrl : "./pages/main.php?id=17"
    })
	.when("/capeofgoodhope", {
        templateUrl : "./pages/main.php?id=18"
    })
	.when("/gizanecropolis", {
        templateUrl : "./pages/main.php?id=19"
    })
	.when("/greatsphinxofgiza", {
        templateUrl : "./pages/main.php?id=20"
    })



	.when("/readmore/thestatueofliberty", {
        templateUrl : "./pages/readmore.php?id=1"
    })
	.when("/readmore/cloudgate", {
        templateUrl : "./pages/readmore.php?id=2"
    })
	.when("/readmore/cntower", {
        templateUrl : "./pages/readmore.php?id=3"
    })
	.when("/readmore/niagrafalls", {
        templateUrl : "./pages/readmore.php?id=4"
    })
	.when("/readmore/christtheredeemer", {
        templateUrl : "./pages/readmore.php?id=5"
    })
	.when("/readmore/sugarloafmountain", {
        templateUrl : "./pages/readmore.php?id=6"
    })
	.when("/readmore/parquenacionallosglaciares", {
        templateUrl : "./pages/readmore.php?id=7"
    })
	.when("/readmore/aconcagua", {
        templateUrl : "./pages/readmore.php?id=8"
    })
	.when("/readmore/eiffeltower", {
        templateUrl : "./pages/readmore.php?id=9"
    })
	.when("/readmore/louvremuseum", {
        templateUrl : "./pages/readmore.php?id=10"
    })
	.when("/readmore/bigben", {
        templateUrl : "./pages/readmore.php?id=11"
    })
	.when("/readmore/buckinghampalace", {
        templateUrl : "./pages/readmore.php?id=12"
    })
	.when("/readmore/tajmahal", {
        templateUrl : "./pages/readmore.php?id=13"
    })
	.when("/readmore/gatewayofindiamumbai", {
        templateUrl : "./pages/readmore.php?id=14"
    })
	.when("/readmore/boracay", {
        templateUrl : "./pages/readmore.php?id=15"
    })
	.when("/readmore/chocolatehills", {
        templateUrl : "./pages/readmore.php?id=16"
    })
	.when("/readmore/krugernationalpark", {
        templateUrl : "./pages/readmore.php?id=17"
    })
	.when("/readmore/capeofgoodhope", {
        templateUrl : "./pages/readmore.php?id=18"
    })
	.when("/readmore/gizanecropolis", {
        templateUrl : "./pages/readmore.php?id=19"
    })
	.when("/readmore/greatsphinxofgiza", {
        templateUrl : "./pages/readmore.php?id=20"
    })
	;
});
</script>
  
  </body>
</html>
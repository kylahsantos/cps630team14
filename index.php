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
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "main.php"
    })
    .when("/aboutus", {
        templateUrl : "aboutus.html"
    })
    .when("/contactus", {
        templateUrl : "contactus.html"
    })
	.when("/shoppingcart", {
        templateUrl : "shoppingcart.php"	
    })
		.when("/search", {
        templateUrl : "searchpage.php"	
    })
	
	.when("/statueofliberty", {
        templateUrl : "main.php?id=1"
    })
	.when("/cloudgate", {
        templateUrl : "main.php?id=2"
    })
	.when("/cntower", {
        templateUrl : "main.php?id=3"
    })
	.when("/niagrafalls", {
        templateUrl : "main.php?id=4"
    })
	.when("/christtheredeemer", {
        templateUrl : "main.php?id=5"
    })
	.when("/sugarloafmountain", {
        templateUrl : "main.php?id=6"
    })
	.when("/parquenacionallosglaciares", {
        templateUrl : "main.php?id=7"
    })
	.when("/aconcagua", {
        templateUrl : "main.php?id=8"
    })
	.when("/eiffeltower", {
        templateUrl : "main.php?id=9"
    })
	.when("/louvremuseum", {
        templateUrl : "main.php?id=10"
    })
	.when("/bigben", {
        templateUrl : "main.php?id=11"
    })
	.when("/buckinghamplace", {
        templateUrl : "main.php?id=12"
    })
	.when("/tajmahal", {
        templateUrl : "main.php?id=13"
    })
	.when("/gatewayofindiamumbai", {
        templateUrl : "main.php?id=14"
    })
	.when("/boracay", {
        templateUrl : "main.php?id=15"
    })
	.when("/chocolatehills", {
        templateUrl : "main.php?id=16"
    })
	.when("/krugernationalpark", {
        templateUrl : "main.php?id=17"
    })
	.when("/capeofgoodhope", {
        templateUrl : "main.php?id=18"
    })
	.when("/gizanecropolis", {
        templateUrl : "main.php?id=19"
    })
	.when("/greatsphinxofgiza", {
        templateUrl : "main.php?id=20"
    })



	.when("/readmore/thestatueofliberty", {
        templateUrl : "readmore.php?id=1"
    })
	.when("/readmore/cloudgate", {
        templateUrl : "readmore.php?id=2"
    })
	.when("/readmore/cntower", {
        templateUrl : "readmore.php?id=3"
    })
	.when("/readmore/niagrafalls", {
        templateUrl : "readmore.php?id=4"
    })
	.when("/readmore/christtheredeemer", {
        templateUrl : "readmore.php?id=5"
    })
	.when("/readmore/sugarloafmountain", {
        templateUrl : "readmore.php?id=6"
    })
	.when("/readmore/parquenacionallosglaciares", {
        templateUrl : "readmore.php?id=7"
    })
	.when("/readmore/aconcagua", {
        templateUrl : "readmore.php?id=8"
    })
	.when("/readmore/eiffeltower", {
        templateUrl : "readmore.php?id=9"
    })
	.when("/readmore/louvremuseum", {
        templateUrl : "readmore.php?id=10"
    })
	.when("/readmore/bigben", {
        templateUrl : "readmore.php?id=11"
    })
	.when("/readmore/buckinghampalace", {
        templateUrl : "readmore.php?id=12"
    })
	.when("/readmore/tajmahal", {
        templateUrl : "readmore.php?id=13"
    })
	.when("/readmore/gatewayofindiamumbai", {
        templateUrl : "readmore.php?id=14"
    })
	.when("/readmore/boracay", {
        templateUrl : "readmore.php?id=15"
    })
	.when("/readmore/chocolatehills", {
        templateUrl : "readmore.php?id=16"
    })
	.when("/readmore/krugernationalpark", {
        templateUrl : "readmore.php?id=17"
    })
	.when("/readmore/capeofgoodhope", {
        templateUrl : "readmore.php?id=18"
    })
	.when("/readmore/gizanecropolis", {
        templateUrl : "readmore.php?id=19"
    })
	.when("/readmore/greatsphinxofgiza", {
        templateUrl : "readmore.php?id=20"
    })
	;
});
</script>
  
  </body>
</html>
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

<script>
$(document).ready(function() {
  var par = $('.searchfunction');
  $(par).hide();

  $('button').click(function(e) {
      $(par).slideToggle('slow');
      e.preventDefault();
  });
});

function toggle_visibility(id) {
 var e = document.getElementById(id);
 if(e.style.display == 'block')
    e.style.display = 'none';
 else
    e.style.display = 'block';
}

$(document).ready(function(){
    $('#content-1, #content-2, #content-3').hide();
    $('a').on('click',function(){
        var container = $(this).data('container');
        if ($(container).css('display') == 'none') {
        $('#content-1, #content-2, #content-3').hide();
        }
        $(container).toggle();
    })
})
</script>
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
	.when("/gatewayofindamumbai", {
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
	;
});
</script>
  
  </body>
</html>
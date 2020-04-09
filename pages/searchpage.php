<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">
      <title>Plan Your Travel</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
      <script src="script.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>



<style>
body{
background-color: #F6E9DB;
color: #21282D;
font-family: 'Muli', sans-serif;
}
</style>
</head>
<body>
  <?php
    session_start();
    ?>

  <div class = 'container'></div>
  <div class = 'container searchdiv' >
  <div id='content-1'>
    <form action='' method='GET'>
    <input class='sb' type='text' name='query' placeholder='Search..'/>
    <input type='submit' value='Search'/>
    </form></div>
  <br>
  <br>
    </div>
  </div>

<?php


//START OF SEARCH FUNCTION
if (isset( $_GET['query']))
  {
      $_SESSION['search'] = $_GET['query'];

?>


<script>
var fetch = angular.module('myapp', []);
fetch.controller('searchCtrl', function ($scope, $http) {
  $http.get("search.php")
   .then(function(response){
     $scope.places = response.data;
   });
      });
</script>


<div id = 'content' ng-app='myapp' ng-controller='searchCtrl'>
    <h1> Results </h1>
    <table class= 'search_res'>
         <tr ng-repeat="data in places">
      <td><input type="checkbox" ></td>
    <td><a ng-href="readmore.php?id={{data.place_id}}"> {{data.placename}}</td>
        <td>{{data.placelocation}}</td>
        <td>${{data.price}}</td>

      </tr>

    </table>


</div>



<?php
}
  ?>


</body>
</html>

<html>
<!--THIS IS THE USER'S DASHBOARD/HOME PAGE -->
<div class="panel panel-default">
 <div class="panel-heading">
  <h3 class="panel-title">Welcome to Plan Your Travel - User Mode</h3>
 </div>
 <div class="panel-body">
  <h1>Welcome - <?php echo $_SESSION["name"];?></h1>
  HELLOO
  <div id='content-1'>
    <form action='' method='GET'>
    <input class='sb' type='text' name='query' placeholder='Search..'/>
    <input type='submit' value='Search'/>
    </form></div>

  <br>


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


<div class='col-md' id = 'content' ng-app='myapp' ng-controller='searchCtrl'>
    <h1> Results </h1>
    <table class= 'search_res'>
   <tr ng-repeat="data in places">
    <td><a ng-href="readmore.php?id={{data.place_id}}"> {{data.placename}}</td>
        <td>{{data.placelocation}}</td>
        <td>${{data.price}}</td>

      </tr>

    </table>
</div>

<?php
}
  ?>
  <a href="userlogout.php">Logout</a>
 </div>
</div>
</html>

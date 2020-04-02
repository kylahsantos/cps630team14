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
<body>
  <?php
    session_start();
    ?>


<?php

$id = '';
if( isset( $_GET['id'])) {}
else { //HOME PAGE ID = NONE
  echo "
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
<div class = 'container'>
<div id='content-2' style='background: #EAC4B3;'>";
echo '
<h2> Database Maintain Login</h2>
<div class="login">
  <form action="authenticate.php" method="post">
    <label for="username">
      <i class="fas fa-user"></i>
    </label>
    <input type="text" name="username" placeholder="Username" id="username" required>
    <label for="password">
      <i class="fas fa-lock"></i>
    </label>
    <input type="password" name="password" placeholder="Password" id="password" required>
    <input type="submit" value="Login">
  </form>
</div>
</div>
</div>';
  echo "
        <div class='container'>
        <div class='row'>
          <div class='col-sm'></div>
          <div class='col-sm'></div>
          ";
}
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

<!-- start of images and content -->
<?php
echo '
<div class="container p-3 my-3 text-center">
  <div class="container p-3 my-3 text-center">'; // --> OPEN TAG MAIN IMAGE DIV

$user = 'root';
$pass = '';
$db = 'cps630';
$id = '';

if( isset( $_GET['id'])) {
    $id = $_GET['id'];
}

$mainrm = 'readmore.php?id=';
$mainrm .= $id;

if( (int)$id == $id && (int)$id > 0 ) {
  //connect to the DB
  $conn = mysqli_connect("localhost", $user, $pass, $db);
  if (!$conn) {echo "failed to connect".mysqli_connect_error(); die; }

  //mySQL query
  $sql = "SELECT * FROM home WHERE place_id=".$id;
  $result = mysqli_query($conn, $sql);

  // MAIN IMAGE CONTENT
  while ($row = mysqli_fetch_array($result)) {
    echo "<h2>" . $row["placename"]. "</h2><br>";
    echo "<img id='mainimage' src=". $row["mainimage"]. "><br>";
    echo "<br><h3><b>". $row["placelocation"]."</b></h3><h4><a href=". $mainrm .">Read More</a></h4>";
    } //end of while loop
   mysqli_free_result($result);
  //end of if statement
  echo "</div>"; // --> CLOSING TAG MAIN IMAGE DIV
  //end of main image content

// START OF OTHER PLACES TO VISIT INFORMATION
  echo "<div class='container p-3 my-3'>"; // <-- OPENING TAG OF OTHER PLACES TO VISIT CONTENT

  echo "
  <div class='container placesheader'>
      <h2 style='color:white'> Other Places to Visit </h1>
  </div>";

  if ($id % 2 == 0) {
    $first = $id - 1;

    $activerm = 'readmore.php?id=';
    $activerm .= $first;
  } else {
    $first = $id + 1;

    $activerm = 'readmore.php?id=';
    $activerm .= $first;
  }

  //mySQL query CLOSEDISTANCES
  $sql = "SELECT * FROM closedistances WHERE place_id=".$id;
  $result = mysqli_query($conn, $sql);
  echo "<div class='row text-center'>"; //row
    while ($row = mysqli_fetch_array($result)) {
        echo "<div class='col topother' id='content'>";
          echo "<img class = 'closedistance' src=". $row["imageA"]. ">";
          echo "<br><b>" .$row["placeA"]. "</b>";
          echo "<br>". $row["locA"]."<br>";
        echo "</div>";
        echo "<div class='col topother' id='content'>";
          echo "<img class = 'closedistance' src=". $row["imageB"]. ">";
          echo "<br><b>" .$row["placeB"]. "</b>";
          echo "<br>". $row["locB"]."<br>";
        echo "</div>
        ";
      } //end of while loop
     mysqli_free_result($result);

     //mySQL query HOME
     $sql = "SELECT * FROM home WHERE place_id=".$first;
     $result = mysqli_query($conn, $sql);
     while ($row = mysqli_fetch_array($result)) {
         echo "<div class='col topother' id='content'>";
          echo "<img class = 'closedistance' src=". $row["mainimage"]. ">";
          echo "<br><b>" .$row["placename"]. "</b>";
          echo "<br>". $row["placelocation"]."<br>
         </div>";
       }//end of while loop

     mysqli_free_result($result);
     echo "<div class='w-100'></div>
  <div class='col bottomother'><a href=''>Read More</a></div>
  <div class='col bottomother'><a href=''>Read More</a></div>
  <div class='col bottomother'><a href='$activerm'>Read More</a></div>";
  echo "</div></div>";
}

?>
</body>
</html>

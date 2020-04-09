<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">
      <title>Plan Your Travel</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="./style.css">
      <script src="./script.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
li.li-no-hover:hover {
    background-color: transparent;
}
body{
background-color: #F6E9DB;
color: #21282D;
font-family: 'Muli', sans-serif;

}
.basic{
background-color: #FFFFFF;
}
.col.left{
margin-left: 20px;
}
.box{display: none;}
.hover{
background-color: #ECCDBF !important;
}
.div_e{
padding: 80px;
font-weight: bold;
font-size: 30px;
}
.div_a{
padding: 80px;
font-weight: bold;
font-size: 30px;
}

</style>
<script>
$(document).ready(function(){
$('.euro').hover(function(){$(this).toggleClass('hover');});
$('#euro').click(function(){
<?php $hello = 1 ?>
$('.asian').hide();
$('.europe').show();
$(this).css("background", "#ECCDBF");
$('.asia').css("background", "#F6E9DB");
});
$('.asia').hover(function(){$(this).toggleClass('hover');});
$('#asia').click(function(){
<?php $hello = 2; ?>
$('.europe').hide();
$('.asian').show();
$(this).css("background", "#ECCDBF");
$('.euro').css("background", "#F6E9DB");
});
});
var something = document.getElementById('something');

something.style.cursor = 'pointer';
something.onclick = function() {
    $(".box").show('slow');

};
</script>
</head>
<body>
<!-- page header (banner, navigation bar and drop downs) -->


<div class="container p-3 m-3 text-center">
<?php
$user = 'root';
$pass = '';
$db = 'cps630';

$conn = mysqli_connect("localhost", $user, $pass, $db);
if (!$conn) {echo "failed to connect".mysqli_connect_error(); die; }
?>

<div class = "row">
  <div class = "col left">
    <h2> Select a Travel Plan Below: </h2>
    <?php
      $sql =  "SELECT * FROM TravelPlan";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_array($result)) {
        if(strpos($row['tour_id'], 'EU') !== false){
          echo "<div class= 'container p-3 m-3 euro' id= 'euro'>";
          $cost1 = (int)$row['total_price'];
        } else {
        echo "<div class= 'container p-3 m-3 asia' id= 'asia'>";
        $cost2 = (int)$row['total_price'];
        }
      echo"Tour ID:" . $row["tour_id"];
      echo "<br>Start Date: " . $row["start_date"].
      "<br>Trip Duration: " . $row["trip_duration"] .
      "<br> Air Fare: $" . $row["air_fare"].
      "<br> You can visit " . $row["country1"].
      " and ".$row["country2"]."<br><ul>
      <li>" .$row["trip_info1"]."</li>
      <li>" .$row["trip_info2"]."</li>
      </ul>Total Price: $" .$row["total_price"].
      "<br><br></div> ";
    }
  ?>

  <input type="submit" id= "something" name="Submit" value="Submit">
  </div>
  <div class = "col">
  <?php
    if(isset($_GET['Submit'])){ //check if form was submitted
      $input = (int)$_GET['num']; //get input text
      if($hello == 1){
        echo "<div class = 'div_e' style= 'display:none'> Total for " .$input. " people is: $" . $cost1 * $input. " </div>
        <div class = 'div_a'> Total for " .$input. " people is: $" . $cost2 * $input. " </div>";
      }
      else if($hello == 2)
      {
        echo "<div class = 'div_e'> Total for " .$input. " people is: $" . $cost1 * $input. " </div>
        <div class = 'div_a' style= 'display:none'> Total for " .$input. " people is: $"  . $cost2 * $input. " </div>";
      }
    }
  ?>
<div class = "Box">
  <form name= "numTravelers" action="" method = "get">
   <label for="num">Number of Travelers:</label><br>
    <input type="text" id="num" name="num" value="" required><br><br>
  <input type="submit" name="Submit" value="Submit"> <br> <br>
  </form>
</div>
        </div>
</div>
<div class ="container p-3 m-3 text-center"><br><br>
<div class = "asian " style="display: none"> <iframe src="https://www.google.com/maps/d/u/0/embed?mid=18PBdsiIZ5RTiEKOJNlqkyGSQvE0lBzT1" width="1280" height="480"></iframe></div>
<div class = "europe" style="display: none"> <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1gCLj3YMq55UZOAeKrtPErrrLv-MF9VxG" width="1280" height="480"></iframe></div>
</div>
</div>
</body>
</html>

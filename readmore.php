<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">
      <title>Plan Your Travel</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="style.css">
      <script src="script.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<!-- page header (banner, navigation bar and drop downs) -->

<div class="container p-3 my-3" id="content">
<div class = "caption" id="content">

<?php
  $user = 'root';
  $pass = '';
  $db = 'cps630';

  $id = '';
  if( isset( $_GET['id'])) {
      $id = $_GET['id'];
  }

  if( (int)$id == $id && (int)$id > 0 ) {

    $conn = mysqli_connect("localhost", $user, $pass, $db);
    if (!$conn) {echo "failed to connect".mysqli_connect_error(); die; }

    $sql =  "SELECT * FROM TravelInfo WHERE place_id=". $id;
      $result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
  echo "<h1>" . $row["place_name"]. "</h1><br> <h3 style = 'text-align:center;color: #D19077'> Price: $". $row["price"]."</h3><div class='row' id='content'>";
  echo "<div class='col-sm-12' id='content'>";
  echo "<img class ='readmore' src=". $row["photo1"]. " >
        <img class='readmore' src=". $row["photo2"]. ">
        <img class='readmore'src=". $row["photo3"]. ">";

  echo "</div>
   <div class = 'row'> <div class='col-sm-12'><p class = 'description'>". $row["place_desc"]."</p></div>
  </div></div>";
  }
   mysqli_free_result($result);
  echo "<div class = 'review'><hr><h2 class= 'review'> Reviews </h2>";
  $sql =   "SELECT * FROM Review WHERE place_id=". $id;
  $result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
  echo "<div class='row review'>";
   echo "<div class='col'><p class = 'head'>". $row["rev_name"]."<br>".$row["rev_date"]."</p>
  <p class = 'review_text'>". $row["review"]."</p></div>
  </div>";
  }
  echo "</div>";
mysqli_free_result($result);

  }

  ?>
</div>
</div>
</body>
</html>

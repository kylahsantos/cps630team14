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
  <!-- WEBSITE BANNER -->
  <div class="container">
            <img class="center-block" id="banner" src="images/banner.png">
  </div>

  <!-- ABOUT US -->
  <div id="about" class="modal model-content">
    <div class="modal-content" id="ontop">
      <span class="close" onClick="closeModal('about')">&times;</span>
        <div style="padding:20px;">
          <h2>About Us</h2>
          <p>
             Team #14:
             <br>Erica Colaco
             <br>Kylah Santos
             <br>Ting Ip
          </p>
        </div>
    </div>
  </div>
  <!-- Contact Us -->
  <div id="contact" class="modal">
    <div class="modal-content" id="ontop">
      <span class="close" onClick="closeModal('contact')">&times;</span>
        <div style="padding:20px;">
          <h2>Contact Us</h2>
          <p>
            Team #14:
              <br>Erica Colaco: ecolaco@ryerson.ca
              <br>Kylah Santos: kylah.santos@ryerson.ca
              <br>Ting Ip: ting.ip@ryerson.ca
          </p>
        </div>
      </div>
  </div>

  <!-- WEBSITE NAVIGATION BAR -->
  <div>
    <nav class="navbar navbar-expand-sm justify-content-center navigation">
       <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="./home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" onClick="displayModal('about')">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" onClick="displayModal('contact')">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./shoppingcart.php">Shopping Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-container="#content-1">Search</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-container="#content-2">db Maintain</a>
        </li>
      </ul>
      </nav>
    </div>

  <!-- DROP DOWN MENUS BELOW -->
  <div class="container">
      <!-- Continents -->
      <ul id="menu">
              <li class="parent"><a href="">Continents</a>
                      <ul class="child">
                      <li class="parent"><a href="">North America<span class="expand">➢</span></a>
                              <ul class="child">
                                      <li><b id='menutitle'>Countries</b></li>
                                      <li class="parent"><a href="">USA<span class="expand">➢</span></a>
                                              <ul class="child">
                                                      <li><b id='menutitle'>Attractions</b></li>
                                                      <li><a href="./home.php?id=1">The Statue of Liberty</a></li>
                                                      <li><a href="./home.php?id=2">Cloud Gate</a></li>
                                              </ul>
                                      </li>
                                      <li class="parent"><a href="">Canada<span class="expand">➢</span></a>
                                              <ul class="child">
                                                      <li><b id='menutitle'>Attractions</b></li>
                                                      <li><a href="./home.php?id=3">CN Tower</a></li>
                                                      <li><a href="./home.php?id=4">Niagara Falls</a></li>
                                              </ul>
                                      </li>
                              </ul>
                      </li>
                      <!-- end of continent 1 -->
                      <!-- start of continent 2 -->
                      <li class="parent"><a href="">South America<span class="expand">➢</span></a>
                              <ul class="child">
                                      <li><b id='menutitle'>Countries</b></li>
                                      <li class="parent"><a href="">Brazil<span class="expand">➢</span></a>
                                              <ul class="child">
                                                      <li><b id='menutitle'>Attractions</b></li>
                                                      <li><a href="./home.php?id=5">Christ the Redeemer</a></li>
                                                      <li><a href="./home.php?id=6">Sugarloaf Mountain</a></li>
                                              </ul>
                                      </li>
                                      <li class="parent"><a href="">Argentina<span class="expand">➢</span></a>
                                              <ul class="child">
                                                      <li><b id='menutitle'>Attractions</b></li>
                                                      <li><a href="./home.php?id=7">Parque Nacional Los Glaciares</a></li>
                                                      <li><a href="./home.php?id=8">Aconcagua</a></li>
                                              </ul>
                                      </li>
                              </ul>
                      </li>
                      <!-- end of continent 2 -->
                      <!-- start of continent 3 -->
                      <li class="parent"><a href="">Europe<span class="expand">➢</span></a>
                              <ul class="child">
                                      <li><b id='menutitle'>Countries</b></li>
                                      <li class="parent"><a href="">France<span class="expand">➢</span></a>
                                              <ul class="child">
                                                      <li><b id='menutitle'>Attractions</b></li>
                                                      <li><a href="./home.php?id=9">Eiffel Tower</a></li>
                                                      <li><a href="./home.php?id=10">Louvre Museum</a></li>
                                              </ul>
                                      </li>
                                      <li class="parent"><a href="">UK<span class="expand">➢</span></a>
                                              <ul class="child">
                                                      <li><b id='menutitle'>Attractions</b></li>
                                                      <li><a href="./home.php?id=11">Big Ben</a></li>
                                                      <li><a href="./home.php?id=12">Buckingham Place</a></li>
                                              </ul>
                                      </li>
                              </ul>
                      </li>
                      <!-- end of continent 3 -->
                      <!-- start of continent 4 -->
                      <li class="parent"><a href="">Asia<span class="expand">➢</span></a>
                              <ul class="child">
                                      <li><b id='menutitle'>Countries</b></li>
                                      <li class="parent"><a href="">India<span class="expand">➢</span></a>
                                              <ul class="child">
                                                      <li><b id='menutitle'>Attractions</b></li>
                                                      <li><a href="./home.php?id=13">Taj Mahal</a></li>
                                                      <li><a href="./home.php?id=14">Gateway Of India Mumbai</a></li>
                                              </ul>
                                      </li>
                                      <li class="parent"><a href="">Philippines<span class="expand">➢</span></a>
                                              <ul class="child">
                                                      <li><b id='menutitle'>Attractions</b></li>
                                                      <li><a href="./home.php?id=15">Boracay</a></li>
                                                      <li><a href="./home.php?id=16">Chocolate Hills</a></li>
                                              </ul>
                                      </li>
                              </ul>
                      </li>
                      <!-- end of continent 4 -->
                      <!-- start of continent 5 -->
                      <li class="parent"><a href="">Africa<span class="expand">➢</span></a>
                              <ul class="child">
                                      <li><b id='menutitle'>Countries</b></li>
                                      <li class="parent"><a href="">South Africa<span class="expand">➢</span></a>
                                              <ul class="child">
                                                      <li><b id='menutitle'>Attractions</b></li>
                                                      <li><a href="./home.php?id=17">Kruger National Park</a></li>
                                                      <li><a href="./home.php?id=18">Cape of Good Hope</a></li>
                                              </ul>
                                      </li>
                                      <li class="parent"><a href="">Egypt<span class="expand">➢</span></a>
                                              <ul class="child">
                                                      <li><b id='menutitle'>Attractions</b></li>
                                                      <li><a href="./home.php?id=19">Giza Necropolis</a></li>
                                                      <li><a href="./home.php?id=20">Great Sphinx of Giza</a></li>
                                              </ul>
                                      </li>
                              </ul>
                      </li>
      </ul>
      <li class="parent"><a href="#">Popular Places</a>
              <ul class="child">
                      <li><a href="./home.php?id=1">The Statue of Liberty</a></li>
                      <li><a href="./home.php?id=5">Christ the Redeemer</a></li>
                      <li><a href="./home.php?id=9">Eiffel Tower</a></li>
                      <li><a href="./home.php?id=13">Taj Mahal</a></li>
                      <li><a href="./home.php?id=19">Giza Necropolis</a></li>
              </ul>
    </ul>
  </div>

<?php
$id = '';
if( isset( $_GET['id'])) {}
else { //HOME PAGE ID = NONE
  echo "
  <div class = 'container'></div>
  <div class = 'container searchdiv' >
  <div id='content-1'>
    <form action='' method='GET'>
    <input class='sb' type='text' name='query' placeholder='Search..''>
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
          <div class='col-sm' id = 'content'>";
          $query = '';
}
if( empty($_GET['query']) ) { }
  elseif (isset( $_GET['query']))
  {
      $query = $_GET['query'];
      //connect to the DB
      $user = 'root';
      $pass = '';
      $db = 'cps630';
      $conn = mysqli_connect("localhost", $user, $pass, $db);
      if (!$conn) {echo "failed to connect".mysqli_connect_error(); die; }

      $sql  = "SELECT * FROM home WHERE placelocation LIKE '%" . $query ."%' OR placename LIKE '%" . $query ."%'";
      $result = mysqli_query($conn, $sql);

      if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
          $link = './readmore.php?id=';
          $link .= $row["place_id"];
          $place = $row["placename"];
          $location = $row["placelocation"];
        }
        echo "<h1> Results </h1>";
        echo "<p class='text-center'>
        <a href='$link'>". $place . " - ". $location."</a></p>";
      }
      else {
        echo "<h1> Results not found! </h1>";
        mysqli_free_result($result);
        }
echo "</div>";
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

$mainrm = './readmore.php?id=';
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

    $activerm = './readmore.php?id=';
    $activerm .= $first;
  } else {
    $first = $id + 1;

    $activerm = './readmore.php?id=';
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

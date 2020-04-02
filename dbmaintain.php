<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: home.php');
	exit();
}
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">
      <title>Plan Your Travel - DB Maintain</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="./style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
      <script src="./script.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <script>
        $(document).ready(function(){
            $(".actionselect").change(function(){
                $(this).find("option:selected").each(function(){
                    var optionValue = $(this).attr("value");
                    if(optionValue){
                        $(".item").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else{
                        $(".item").hide();
                    }
                });
            }).change();
        });

$(window).load(function(){
$('.insertfields').hide()
$('#insertdbtables').change(function () {
var value = this.value;
$('.insertfields').hide()
$('#' + this.value).show();
});
});

$(window).load(function(){
$('.deletefields').hide()
$('#deletedbtables').change(function () {
var value = this.value;
$('.deletefields').hide()
$('#' + this.value).show();
});
});

$(window).load(function(){
$('.updatefields').hide()
$('#updatedbtables').change(function () {
var value = this.value;
$('.updatefields').hide()
$('#' + this.value).show();
});
});

$(window).load(function(){
$('.selectfields').hide()
$('#selectdbtables').change(function () {
var value = this.value;
$('.selectfields').hide()
$('#' + this.value).show();
});
});
      </script>
	</head>
	<body class="loggedin">
			<div class = "container text-center">
				<h1>DB Maintain</h1>
        <h2>Plan Your Travel - Group 14 </h2>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		<div class="container p-3 m-3">
			<h2>Welcome, <?=$_SESSION['name']?>!</p></h2>

      <select class="actionselect" id="dbmaintain">
        <option value="">Select an action</option>
        <option value="insert">Insert</option>
        <option value="delete">Delete</option>
        <option value="select">Select</option>
        <option value="update">Update</option>
      </select>

      <div class="insert item">
        <br>
        <b> INSERT INTO
        <select class="insertdbtables" name="insertdbtables" id="insertdbtables">
            <option value="" selected>Select a table</option>
            <option value="home">home</option>
          <option value="travelinfo">travelinfo</option>
          <option value="travelplan">travelplan</option>
          <option value="accounts">accounts</option>
        </select>
        VALUES <br>
      </div>
      <div class="home insertfields" id="home">
                  <br>
                    <form method="POST" action="">
                      <label for="placename"> placename </label>
                      <input type="text" name="placename" required> <br>
                      <label for="placelocation"> placelocation </label>
                      <input type="text" name="placelocation" required> <br>
                      <label for="mainimage"> mainimage </label>
                      <input type="text" name="mainimage" required> <br>
                      <br>
                      <input type="submit" name="homesubmit" id="homesubmit" value="INSERT NEW RECORD">
                  </form>
                <?php
                 if(isset($_POST['homesubmit'])) {
                   $user = 'root';
                   $pass = '';
                   $db = 'cps630';
                   $conn = mysqli_connect("localhost", $user, $pass, $db);
                   if (!$conn) {echo "failed to connect".mysqli_connect_error(); die; }

                    //if(! get_magic_quotes_gpc() ) {
                    //   $placename = addslashes ($_POST['placename']);
                    //   $placelocation = addslashes ($_POST['placelocation']);
                  //  }else {
                    $sql = "INSERT INTO home(placename, placelocation, mainimage)VALUES ('".$_POST["placename"]."','".$_POST["placelocation"]."','".$_POST["mainimage"]."')";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                       echo "<br> New record created successfully";
                    }

                    mysqli_close($conn);
                    header('Location: '.$_SERVER['PHP_SELF'].'?status=success'); exit;
                 }
                 ?>
        <br>
      </div>
      <div class="travelinfo insertfields" id="travelinfo"><br>
          <form method="POST" action="">
            <label for="placename"> placename </label>
            <input type="text" name="placename" required> <br>
            <label for="photo1"> photo1 </label>
            <input type="text" name="photo1" required> <br>
            <label for="photo2"> photo2 </label>
            <input type="text" name="photo2" required> <br>
            <label for="photo3"> photo3 </label>
            <input type="text" name="photo3" required> <br>
            <label for="placedesc"> place_desc </label>
            <input type="text" name="placedesc" required> <br>
            <br>
            <input type="submit" name="travelinfosubmit" id="travelinfosubmit" value="INSERT NEW RECORD">
        </form>
      <?php
       if(isset($_POST['travelinfosubmit'])) {
         $user = 'root';
         $pass = '';
         $db = 'cps630';
         $conn = mysqli_connect("localhost", $user, $pass, $db);
         if (!$conn) {echo "failed to connect".mysqli_connect_error(); die; }

          //if(! get_magic_quotes_gpc() ) {
          //   $placename = addslashes ($_POST['placename']);
          //   $placelocation = addslashes ($_POST['placelocation']);
        //  }else {
          $sql = "INSERT INTO home(place_name, photo1, photo2, photo3, place_desc)VALUES ('".$_POST["placename"]."','".$_POST["photo1"]."','".$_POST["photo2"]."','".$_POST["photo3"]."','".$_POST["placedesc"]."')";
          $result = mysqli_query($conn, $sql);
          if ($result) {
             echo "<br> New record created successfully";
          }
          mysqli_close($conn);
          header('Location: '.$_SERVER['PHP_SELF'].'?status=success'); exit;
       }
       ?>
     </div>
       <div class="travelplan insertfields" id="travelplan">
                 <br>
                   <form method="POST" action="">
                     <label for="tourid"> tour_id </label> <input type="text" name="tourid" required> <br>
                     <label for="startdate"> start_date </label> <input type="date" name="startdate" min="2020-03-01" required> <br>
                     <label for="tripduration"> trip_duration </label> <input type="number" name="tripduration" min="1" required> <br>
                     <label for="airfare"> air_fare </label> <input type="number" name="airfare" min="1" required> <br>
                     <label for="country1"> country1 </label> <input type="text" name="country1" required> <br>
                     <label for="country2"> country2 </label> <input type="text" name="country2" required> <br>
                     <label for="info1"> info1 </label> <input type="text" name="info1" required> <br>
                     <label for="info2"> info2 </label> <input type="text" name="info2" required> <br>
                     <label for="totalprice"> total_price </label> <input type="number" name="totalprice" min="1" required> <br>
                     <br>
                     <input type="submit" name="travelplansubmit" id="homesubmit" value="INSERT NEW RECORD">
                 </form>
      <?php
                if(isset($_POST['travelplansubmit'])) {

                  $user = 'root';
                  $pass = '';
                  $db = 'cps630';
                  $conn = mysqli_connect("localhost", $user, $pass, $db);
                  if (!$conn) {echo "failed to connect".mysqli_connect_error(); die; }

                 $sql = "INSERT INTO travelplan(tour_id, start_date, air_fare, country1, country2, trip_info1, trip_info2, total_price)VALUES ('".$_POST["tourid"]."','".$_POST["startdate"]."','".$_POST["tripduration"]."','".$_POST["airfare"]."','".$_POST["country1"]."','".$_POST["country2"]."','".$_POST["info1"]."','".$_POST["info2"]."','".$_POST["totalprice"]."')";
                   $result = mysqli_query($conn, $sql);
                   if ($result) {
                      echo "<br> New record created successfully";
                   }
                   mysqli_close($conn);
                   header('Location: '.$_SERVER['PHP_SELF'].'?status=success'); exit;
                }
                ?>
       <br>
       </div>
       <div class="accounts insertfields" id="accounts">
                 <br>
                   <form method="POST" action="">
                     <label for="username"> username </label>
                     <input type="text" name="username" required> <br>
                     <label for="password"> password </label>
                     <input type="text" name="password" required> <br>
                     <br>
                     <input type="submit" name="accountssubmit" id="accountssubmit" value="INSERT NEW RECORD">
                 </form>
               <?php
                if(isset($_POST['accountssubmit'])) {
                  $user = 'root';
                  $pass = '';
                  $db = 'cps630';
                  $conn = mysqli_connect("localhost", $user, $pass, $db);
                  if (!$conn) {echo "failed to connect".mysqli_connect_error(); die; }

                   //if(! get_magic_quotes_gpc() ) {
                   //   $placename = addslashes ($_POST['placename']);
                   //   $placelocation = addslashes ($_POST['placelocation']);
                 //  }else {
                   $sql = "INSERT INTO accounts(username,password)VALUES ('".$_POST["username"]."','".$_POST["password"]."')";
                   $result = mysqli_query($conn, $sql);
                   if ($result) {
                      echo "<br> New record created successfully";
                   }
                   mysqli_close($conn);
                   header('Location: '.$_SERVER['PHP_SELF'].'?status=success'); exit;
                }
                ?>
       <br>
     </div>

    <div class="delete item">
      <br>
      <b> DELETE from
      <select class="deletedbtables" name="deletedbtables" id="deletedbtables">
<option value="" selected>Select a table</option>          <option value="deletehome">home</option>
          <option value="deleteaccounts">accounts</option>
        </select>
      <div class='deletehome deletefields' id='deletehome'>
        <!-- Form -->
        <form method='post' action=''>
          <input type='submit' value='Delete' name='but_deletehome'><br><br>
          <!-- Record list -->
          <table border='1' id='homeTable' style='border-collapse: collapse;' >
            <tr style='background: whitesmoke;'>
              <th>place_id</th>
              <th>placename</th>
              <th>placelocation</th>
              <th>mainimage</th>
              <th>&nbsp;</th>
           </tr>

           <?php
             $user = 'root';
             $pass = '';
             $db = 'cps630';
             $conn = mysqli_connect("localhost", $user, $pass, $db);
             if (!$conn) {echo "failed to connect".mysqli_connect_error(); die; }
           $query = "SELECT * FROM home";
           $result = mysqli_query($conn,$query);

           while($row = mysqli_fetch_array($result) ){
              $id = $row['place_id'];
              $placename = $row['placename'];
              $placelocation = $row['placelocation'];
              $mainimage = $row['mainimage'];
           ?>
           <tr id='tr_<?= $id ?>'>
             <td><?= $id ?></td>
              <td><?= $placename ?></td>
              <td><?= $placelocation ?></td>
              <td><?= $mainimage ?></td>

              <!-- Checkbox -->
              <td><input type='checkbox' name='delete[]' value='<?= $id ?>' ></td>

          </tr>
          <?php
          }
          ?>
         </table>
       </form>
       <?php
        if(isset($_POST['but_deletehome'])){

          if(isset($_POST['delete'])){
            foreach($_POST['delete'] as $deleteid){
              $deleteUser = "DELETE from home WHERE place_id=".$deleteid;
              mysqli_query($conn,$deleteUser);
            }
          }
        }
        ?>
      </div>
      <div class='deleteaccounts deletefields' id='deleteaccounts'>
        <!-- Form -->
        <form method='post' action=''>
          <input type='submit' value='Delete' name='but_deleteaccounts'><br><br>
          <!-- Record list -->
          <table border='1' id='accountsTable' style='border-collapse: collapse;' >
            <tr style='background: whitesmoke;'>
              <th>id</th>
              <th>username</th>
              <th>password</th>
              <th>&nbsp;</th>
           </tr>

           <?php
             $user = 'root';
             $pass = '';
             $db = 'cps630';
             $conn = mysqli_connect("localhost", $user, $pass, $db);
             if (!$conn) {echo "failed to connect".mysqli_connect_error(); die; }
           $query = "SELECT * FROM accounts";
           $result = mysqli_query($conn,$query);

           while($row = mysqli_fetch_array($result) ){
              $id = $row['id'];
              $username = $row['username'];
              $password = $row['password'];
           ?>
           <tr id='tr_<?= $id ?>'>
             <td><?= $id ?></td>
              <td><?= $username ?></td>
              <td><?= $password ?></td>

              <!-- Checkbox -->
              <td><input type='checkbox' name='delete[]' value='<?= $id ?>' ></td>

          </tr>
          <?php
          }
          ?>
         </table>
       </form>
       <?php
        if(isset($_POST['but_deletehome'])){

          if(isset($_POST['delete'])){
            foreach($_POST['delete'] as $deleteid){
              $deleteUser = "DELETE from home WHERE place_id=".$deleteid;
              mysqli_query($conn,$deleteUser);
            }
          }
        }
        ?>
      </div>
    </div>

    <div class="select item">
      <br>
      <b> SELECT * FROM
      <select class="selectdbtables" name="selectdbtables" id="selectdbtables">
        <option value="" selected>Select a table</option>
        <option value="selecthome">home</option>
        <option value="selecttravelinfo">travelinfo</option>
        <option value="selecttravelplan">travelplan</option>
        <option value="selectaccounts">accounts</option>
      </select>
      <br>
      <br>
      <div class="selecthome selectfields" id="selecthome">
        <table border='1' id='homeTable' style='border-collapse: collapse;' >
          <tr style='background: whitesmoke;'>
            <th>place_id</th>
            <th>placename</th>
            <th>placelocation</th>
            <th>mainimage</th>
         </tr>
         <?php
         $user = 'root';
         $pass = '';
         $db = 'cps630';
         $conn = mysqli_connect("localhost", $user, $pass, $db);
         if (!$conn) {echo "failed to connect".mysqli_connect_error(); die; }
       $query = "SELECT * FROM home";
       $result = mysqli_query($conn,$query);

       while($row = mysqli_fetch_array($result) ){
          $id = $row['place_id'];
          $placename= $row['placename'];
          $placelocation = $row['placelocation'];
          $mainimage = $row['mainimage'];
          ?>
       <tr id='tr_<?= $id ?>'>
         <td><?= $id ?></td>
          <td><?= $placename ?></td>
          <td><?= $placelocation ?></td>
          <td><?= $mainimage ?></td>

      </tr>
      <?php
      }
      ?>
     </table>
      </div>

      <div class="selecttravelinfo selectfields" id="selecttravelinfo">
        <table border='1' id='travelinfoTable' style='border-collapse: collapse;' >
          <tr style='background: whitesmoke;'>
            <th>place_id</th>
            <th>place_name</th>
            <th>photo1</th>
            <th>photo2</th>
            <th>photo3</th>
            <th>place_desc</th>
         </tr>
         <?php
         $user = 'root';
         $pass = '';
         $db = 'cps630';
         $conn = mysqli_connect("localhost", $user, $pass, $db);
         if (!$conn) {echo "failed to connect".mysqli_connect_error(); die; }
       $query = "SELECT * FROM travelinfo";
       $result = mysqli_query($conn,$query);

       while($row = mysqli_fetch_array($result) ){
          $id = $row['place_id'];
          $a = $row['place_name'];
          $b = $row['photo1'];
          $c = $row['photo2'];
          $d = $row['photo3'];
          $e = $row['place_desc'];
          ?>
       <tr id='tr_<?= $id ?>'>
         <td><?= $id ?></td>
          <td><?= $a ?></td>
          <td><?= $b ?></td>
          <td><?= $c ?></td>
          <td><?= $d ?></td>
          <td><?= $e ?></td>
      </tr>
      <?php
      }
      ?>
      </table>
      </div>

      <div class="selecttravelplan selectfields" id="selecttravelplan">
        <table border='1' id='travelplanTable' style='border-collapse: collapse;' >
          <tr style='background: whitesmoke;'>
            <th>id</th>
            <th>tour_id</th>
            <th>trip_duration</th>
            <th>air_fare</th>
            <th>country1</th>
            <th>country2</th>
            <th>trip_info1</th>
            <th>trip_info2</th>
            <th>total_price</th>
         </tr>
         <?php
         $user = 'root';
         $pass = '';
         $db = 'cps630';
         $conn = mysqli_connect("localhost", $user, $pass, $db);
         if (!$conn) {echo "failed to connect".mysqli_connect_error(); die; }
       $query = "SELECT * FROM travelplan";
       $result = mysqli_query($conn,$query);

       while($row = mysqli_fetch_array($result) ){
          $id = $row['id'];
          $a = $row['tour_id'];
          $b = $row['trip_duration'];
          $c = $row['air_fare'];
          $d = $row['country1'];
          $e = $row['country2'];
          $f = $row['trip_info1'];
          $g = $row['trip_info2'];
          $h = $row['total_price'];
          ?>
       <tr id='tr_<?= $id ?>'>
         <td><?= $id ?></td>
          <td><?= $a ?></td>
          <td><?= $b ?></td>
          <td><?= $c ?></td>
          <td><?= $d ?></td>
          <td><?= $e ?></td><td><?= $f ?></td><td><?= $g ?></td><td><?= $h ?></td>
      </tr>
      <?php
      }
      ?>
      </table>
      </div>


      <div class="selectaccounts selectfields" id="selectaccounts">
        <table border='1' id='accountsTable' style='border-collapse: collapse;' >
          <tr style='background: whitesmoke;'>
            <th>id</th>
            <th>username</th>
            <th>password</th>
         </tr>
         <?php
         $user = 'root';
         $pass = '';
         $db = 'cps630';
         $conn = mysqli_connect("localhost", $user, $pass, $db);
         if (!$conn) {echo "failed to connect".mysqli_connect_error(); die; }
       $query = "SELECT * FROM accounts";
       $result = mysqli_query($conn,$query);

       while($row = mysqli_fetch_array($result) ){
          $id = $row['id'];
          $user = $row['username'];
          $pass = $row['password'];
          ?>
       <tr id='tr_<?= $id ?>'>
         <td><?= $id ?></td>
          <td><?= $user ?></td>
          <td><?= $pass ?></td>
      </tr>
      <?php
      }
      ?>
      </table>
      </div>
    </div> <!--select -->

    <div class="update item">
      <br>
      UPDATE
      <select class="updatedbtables" name="updatedbtables" id="updatedbtables">
        <option value="">Select a table</option>
        <option value="updateaccounts">accounts</option>
      </select>
      SET <br><br>

<div class="updateaccounts updatefields" id="updateaccounts">
        <!-- Form -->
  <form method='post' action=''>

     <!-- Submit button -->
     <input type='submit' value='Update Selected Records' name='but_update_accounts'><br><br>

     <!-- Record list -->
     <table border='1' style='border-collapse: collapse;' >
       <tr style='background: whitesmoke;'>
         <!-- Check/Uncheck All-->
         <th><input type='checkbox' id='checkAll' > Check</th>
         <th>id</th>
         <th>Username</th>
         <th>Password</th>

       </tr>

       <?php
       $user = 'root';
       $pass = '';
       $db = 'cps630';
       $conn = mysqli_connect("localhost", $user, $pass, $db);
       if (!$conn) {echo "failed to connect".mysqli_connect_error(); die; }
       $query = "SELECT * FROM accounts";
       $result = mysqli_query($conn,$query);

       while($row = mysqli_fetch_array($result) ){
         $id = $row['id'];
         $username = $row['username'];
         $password = $row['password'];
       ?>
         <tr>

           <!-- Checkbox -->
           <td><input type='checkbox' name='update[]' value='<?= $id ?>' ></td>

           <td><?= $username ?></td>
           <td><input type='text' name='username_<?= $id ?>' value='<?= $username ?>' ></td>
           <td><input type='text' name='password_<?= $id ?>' value='<?= $password ?>' ></td>

         </tr>
       <?php
       }

       if(isset($_POST['but_update_accounts'])){

  if(isset($_POST['update'])){
    foreach($_POST['update'] as $updateid){

      $username = $_POST['username_'.$updateid];
      $password = $_POST['password_'.$updateid];

      if($username !=''  && $password != '' ){
         $updateUser = "UPDATE accounts SET
                      username='".$username."',password='".$password."'
                      WHERE id=".$updateid;
         mysqli_query($conn,$updateUser);
      }

    }
  }

}
       ?>
     </table>
   </form>
</div>

<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

  // Check/Uncheck ALl
  $('#checkAll').change(function(){
    if($(this).is(':checked')){
      $('input[name="update[]"]').prop('checked',true);
    }else{
      $('input[name="update[]"]').each(function(){
         $(this).prop('checked',false);
      });
    }
  });

  // Checkbox click
  $('input[name="update[]"]').click(function(){
    var total_checkboxes = $('input[name="update[]"]').length;
    var total_checkboxes_checked = $('input[name="update[]"]:checked').length;

    if(total_checkboxes_checked == total_checkboxes){
       $('#checkAll').prop('checked',true);
    }else{
       $('#checkAll').prop('checked',false);
    }
  });
});
</script>
      </div>
	</body>
</html>

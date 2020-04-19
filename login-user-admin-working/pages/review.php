   <?php
   session_start();
   if(!isset($_SESSION["name"]))
   {
	?>
		<div ng-init="redirectLogin()"></div>

	<?php
   }
   else{
   ?>
   <!-- USER DASHBOARD IS HERE FOR SEARCH AND PLAN STUFF -->
   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">WELCOME TO USER MODE</h3>
    </div>
	
    <div class="panel-body">
	<a href="#/search">Return to Search</a>
     <h1>Welcome - <?php echo $_SESSION["name"];?></h1>
     <div class="container" ng-controller="review_controller" ng-init="fetchData(<?php echo "'".$_SESSION["name"]."'";?>)">
   <br />
   <h3 align="center">WRITE A REVIEW - {{ place[0].placename }}</h3>
   <br />
   <div style="width:100%; text-align:center;">
		<span style="font-weight:bold;">Rating: </span>
		<input type="radio" id="1" ng-model="rating" name="rating" value="1"></input>
		<label for="1">1</label>
		<input type="radio" id="2" ng-model="rating" name="rating" value="2"></input>
		<label for="2">2</label>
		<input type="radio" id="3" ng-model="rating" name="rating" value="3"></input>
		<label for="3">3</label>  
		<input type="radio" id="4" ng-model="rating" name="rating" value="4"></input>
		<label for="4">4</label>
		<input type="radio" id="5" ng-model="rating" name="rating" value="5" checked></input>
		<label for="5">5</label>

     <textarea rows="4" style="width:100%" ng-model="review"></textarea>
	 <br/>
     <button style="padding:5px 0px; width:100%" ng-click="postReview()">Post</button>


   </div>
   <br />

  </div>
     <a href="logout_user.php">Logout</a>
    </div>
   </div>
      <?php
   }
   ?>
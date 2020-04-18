   <?php
   session_start();
   if(!isset($_SESSION["name"]))
   {
		header("Location: /login");
		exit();
   }
   else{
   ?>
   <!-- USER DASHBOARD IS HERE FOR SEARCH AND PLAN STUFF -->
   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">WELCOME TO USER MODE</h3>
    </div>
    <div class="panel-body">
     <h1>Welcome - <?php echo $_SESSION["name"];?></h1>
     <div class="container" ng-app="live_search_app" ng-controller="live_search_controller" ng-init="fetchData()">
   <br />
   <h3 align="center">SEARCH FOR A LOCATION</h3>
   <br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_query" ng-model="search_query" ng-keyup="fetchData()" placeholder="Search by Location Details" class="form-control" />
    </div>
   </div>
   <br />
    <table class="table table-bordered">
    <thead>
     <tr style= "background-color: #92B8AC">
      <th>Select</th>
      <th>Place Name</th>
      <th>Place Location</th>
      <th>Price ($ CAD)</th>
     </tr>
    </thead>
    <tbody>
    <tr ng-repeat="data in searchData" style = "background-color: #EAE1DE">
      <td> <input type= "checkbox"> </td>
      <td>{{ data.placename }}</td>
      <td>{{ data.placelocation }}</td>
      <td>{{ data.price }}</td>
     </tr>
    </tbody>
   </table>
  </div>
     <a href="logout_user.php">Logout</a>
    </div>
   </div>
  </div>
      <?php
   }
   ?>
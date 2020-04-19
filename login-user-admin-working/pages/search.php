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
   <div ng-hide="myValue" class="ng-hide">
		<table class="table" style="text-align: center;">
			<tr>
   <td ng-repeat="data in searchData | filter :{'isSelected': 'true' }" width="{{colWidth}}%">
					{{ data.placename }}
				</td>
			</tr>
			<tr>
				<td ng-repeat="data in searchData | filter :{'isSelected': 'true' }"  width="{{colWidth}}%">
					{{ data.placelocation }}
				</td>
			</tr>
			<tr>
				<td ng-repeat="data in searchData | filter :{'isSelected': 'true' }" width="{{colWidth}}%">
					<img src= "{{ data.mainimage }}" style="display:block; max-height: 300px; margin-left: auto; margin-right: auto; max-width: 50%;"/>
				</td>
			</tr>
			<tr>
				<td ng-repeat="data in searchData | filter :{'isSelected': 'true' }" width="{{colWidth}}%">
					{{ data.place_desc }}
				</td>
			</tr>
			<tr>
				<td ng-repeat="data in searchData | filter :{'isSelected': 'true' }" width="{{colWidth}}%">
					Reviews:
				</td>
			</tr>
			<tr>
				<td ng-repeat="data in searchData | filter :{'isSelected': 'true' }" width="{{colWidth}}%">
					<div class="review" ng-repeat="review in searchReviews | filter : { 'place_id': data.place_id }:true">
						<p class = 'head'>{{review.rev_name}}<br>{{review.ranking}}/5</p>
						<p class="review_text">{{ review.review }}</p>
					</div>
				</td>	
			</tr>
		</table>
   </div>
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
      <td> <input id="{{ data.id }}" type="checkbox" ng-model="data.isSelected" ng-click="check(data)" ng-disabled="!data.isSelected && checkedNumber === limitNumber"> </td>
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
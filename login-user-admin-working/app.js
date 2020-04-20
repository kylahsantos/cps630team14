var app = angular.module('login_register_app', ["ngRoute"]);
app.config(function($routeProvider) { 
$routeProvider   
.when('/', { 
	templateUrl : './pages/login.php', 
	controller : 'login_register_controller'})
.when('/login', { 
	templateUrl : './pages/login.php', 
	controller : 'login_register_controller'}) 
.when('/search', {
	templateUrl : './pages/search.php', 
	controller : 'live_search_controller'})   
.when('/review', { 
	templateUrl : './pages/review.php', 
	controller : 'review_controller'})   
	.otherwise({redirectTo: '/'}); 
});

//login
app.controller('login_register_controller', function($scope, $http,$location){

$scope.closeMsg = function(){
$scope.alertMsg = false;
};

 $scope.redirect = function(){
   window.location = "login_admin_index.php";
 }
 
  $scope.redirectSearch = function(){
   $location.path("search");
 }

$scope.login_form = true;

$scope.showRegister = function(){
$scope.login_form = false;
$scope.register_form = true;
$scope.alertMsg = false;
};

$scope.showLogin = function(){
$scope.register_form = false;
$scope.login_form = true;
$scope.alertMsg = false;
};

$scope.submitRegister = function(){
$http({
 method:"POST",
 url:"login_user_register.php",
 data:$scope.registerData
}).success(function(data){
 $scope.alertMsg = true;
 if(data.error != '')
 {
  $scope.alertClass = 'alert-danger';
  $scope.alertMessage = data.error;
 }
 else
 {
  $scope.alertClass = 'alert-success';
  $scope.alertMessage = data.message;
  $scope.registerData = {};
 }
});
};

$scope.submitLogin = function(){
 $http({
  method:"POST",
  url:"./login_user_auth.php",
  data:$scope.loginData
 }).success(function(data){
  if(data.error != '')
  {
   $scope.alertMsg = true;
   $scope.alertClass = 'alert-danger';
   $scope.alertMessage = data.error;
  }
  else
  {
   $location.path("search");
   
  }
 });
};


});
//end of login-register app


//search
app.controller('live_search_controller', function($scope, $http, $location){
   $scope.redirectLogin = function(){
   $location.path("login");
 };
 
 $scope.checkedNumber = 0;
  $scope.limitNumber = 2;
  $scope.colWidth = 100;
  $scope.check = function(item) {
    if (item.isSelected) {
      $scope.checkedNumber++;
    } else {
      $scope.checkedNumber--;
    }
	if ($scope.checkedNumber == 2) {
		$scope.colWidth=50;
		$scope.arr = [];
		angular.forEach($scope.searchData, function(value, key) {
			if (value.isSelected){
				$scope.arr.push(value.place_id);
			}
		});
		$http({
			method:"POST",
			url:"user_fetch_data_map.php",
			data:{place1_id:$scope.arr[0], place2_id:$scope.arr[1]}
		}).success(function(data){
			$scope.map = data[0].mapimage;
		});
		console.log($scope.map);
		$scope.mapshow = true;
	}
	else {
		colWidth=100;
		$scope.mapshow = false;
	}
	

		
  };
  
 $scope.fetchData = function(){
  $scope.checkedNumber = 0; 
  $http({
   method:"POST",
   url:"user_fetch_data.php",
   data:{search_query:$scope.search_query}
  }).success(function(data){
   $scope.searchData = data;
  });
    $http({
   method:"POST",
   url:"user_fetch_reviews.php",
   data:{search_query:$scope.search_query}
  }).success(function(data){
   $scope.searchReviews = data;
  });

 };
 
 $scope.writeReview = function(place_id){
	$location.path('review').search('place_id', place_id);
 };
  $scope.closeMsg = function(){
	$scope.alertMsg = false;
  };
   $scope.buyPlan = function(placename){
	$scope.alertMsg = true;
  $scope.alertClass = 'alert-success';
  $scope.alertMessage = 'Payment for travel plan ' +placename + ' successful.';
 };
});


//review
app.controller('review_controller', function($scope, $http, $location){
   $scope.redirectLogin = function(){
   $location.path("login");
 };
 
  $scope.place_id = $location.search().place_id;
  $scope.rating = 5;
   $scope.fetchData = function(rev_name){
	$scope.rev_name = rev_name;
  $http({
   method:"POST",
   url:"user_fetch_data_reviews.php",
   data:{place_id:$scope.place_id}
  }).success(function(data){
   $scope.place = data;
  });
  };
  
 $scope.postReview = function(){
  $http({
   method:"POST",
   url:"post_review.php",
   data:{place_id:$scope.place_id, rev_name:$scope.rev_name, review: $scope.review, ranking:$scope.rating}
  }).success(function(data){
   $location.path("search").search('place_id', null);
  });
 };
 

 
});
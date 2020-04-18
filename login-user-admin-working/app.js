var app = angular.module('login_register_app', ["ngRoute"]);
app.config(function($routeProvider) { 
$routeProvider   
.when('/', { 
	templateUrl : './pages/login.php', 
	controller : 'login_register_controller'})
.when('/login', { 
	templateUrl : './pages/login.php', 
	controller : 'login_register_controller'}) 
.when('/aboutus', {
	templateUrl : './pages/search.php', 
	controller : 'live_search_controller'})   
.when('/reviews', { 
	templateUrl : './pages/reviews.html', 
	controller : 'ReviewsController'})   
	.otherwise({redirectTo: '/'}); 
});


app.controller('login_register_controller', function($scope, $http,$route){

$scope.closeMsg = function(){
$scope.alertMsg = false;
};

 $scope.redirect = function(){
   window.location = "login_admin_index.php";
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
   location.reload();
   
  }
 });
};
});
//end of login-register app

app.controller('live_search_controller', function($scope, $http){
 $scope.fetchData = function(){
  $http({
   method:"POST",
   url:"user_fetch_data.php",
   data:{search_query:$scope.search_query}
  }).success(function(data){
   $scope.searchData = data;
  });
 };


});
<!DOCTYPE html>
<html lang="en" ng-app="myApp"  ng-controller="myCtrl">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>{{head_title}}</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/angular.min.js"></script>
	</head>
	<body class="container my-3 bg-dark text-white">

<button ng-click="myFunc()">Click Me!</button>

<div ng-show="showMe">
  <h1>Menu:</h1>
  <div>Pizza</div>
  <div>Pasta</div>
  <div>Pesce</div>
</div>

</div>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
  $scope.showMe = false;
  $scope.myFunc = function() {
    $scope.showMe = !$scope.showMe;
  }
});
</script>

	</body>
</html>
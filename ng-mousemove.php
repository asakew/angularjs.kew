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

<h1 ng-mousemove="myFunc($event)">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque quidem perferendis rem quis corporis quisquam dignissimos dolorum, ratione voluptate, molestiae vel sunt. Quas modi alias, dolorum excepturi facilis odio, sint.</h1>

<p>Coordinates: {{x + ', ' + y}}</p>

</div>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.myFunc = function(myE) {
        $scope.x = myE.clientX;
        $scope.y = myE.clientY;
    }
});
</script> 

	</body>
</html>
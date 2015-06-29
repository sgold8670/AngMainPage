<!doctype html>
<html ng-app="TodoApp">
<head>
<meta charset="utf-8">
<title>Laravel and AngularJS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<!-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> -->

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>

<body>
<div class="container">
	<div class="jumbotron">
        	<h1>Angular and Laravel</h1>
        </div>
	
    <div id="todos" ng-controller="TodoCtrl">
    	<h2 class="page-header">Todos Angular App</h2>
        
        	<input type="text" ng-model="search">
        	<ul class="list-unstyled">
            	<li ng-repeat="todo in todos | filter:search">
                	<input type="checkbox" ng-model="todo.done">{{ todo.text }}
               </li>
            </ul>
            
            <h3 class="page-header">Add New Todo</h3>
            	<form ng-submit="addNew()">
                	<input type="text" ng-model="todotxt">
                    <button type="submit" class="btn btn-primary">Add new</button>
                </form>
    </div>
</div>




	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    	<!--AngularJS-->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.min.js"></script>
	<script src="http://localhost/Test_Site/AngularLaravel/AngMainPage/public/js/app.js"></script>
   <!--  <script src="js/app.js"></script> -->
</body>
</html>
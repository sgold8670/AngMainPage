var app = angular.module('TodoApp',[]);

app.controller('TodoCtrl',function($scope,$http){
	$http.get('api/todos').success(function(todos){
		$scope.todos = todos;	
	});
	
	$scope.addNew = function(){
		var todo = {
			text: $scope.todotxt,
			done: false	
		}
		
		$scope.todos.push(todo);//enters todo in the html but NOT THE DATABASE
		$scope.todotxt = ""; //clears input
		$http.post("api/todos",todo);//adds todo to database
	};//end of function 
		
	
});//end of controller




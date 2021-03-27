app.controller("homeCtrl",function($scope,$http){

	
	$scope.logout = function(){
		console.log("in logout");
		window.location.href = '../Main';
	}
    
});
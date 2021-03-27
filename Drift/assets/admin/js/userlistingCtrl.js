app.controller("listingCtrl",function($scope,$http){
	$scope.list = [];

	$scope.loadList = function(){
		$http({
			url : "User/get_users",
			method : "GET"
		}).then(function(res){
			console.log(res.data);
			$scope.list = res.data;
		},function(err){
			$scope.list = [];
			console.log(err);
		});
	}

	$scope.logout = function(){
			console.log("in logout");
			window.location.href = '../Main';
		}
	
})
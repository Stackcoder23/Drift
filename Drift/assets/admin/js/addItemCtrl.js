app.controller("addItemCtrl",function($scope,$http)
{
    $scope.item = {};
	$scope.addItemForm = {};

	$scope.additems = function(){
        console.log( $scope.item);

		var fd = new FormData();
		fd.append('file', $scope.myFile);
		
		fd.append('data', JSON.stringify($scope.item));
		
		$http.post("add/add_item_data", fd, {
			transformRequest: angular.identity,
			headers: {'Content-Type': undefined},
		}).then(function(res){
			console.log(res.data);
			if(res.data==1){
				alert("item added successfully");
				window.location.reload();
			}
			else{
			   alert("item already exists");
			   window.location.reload();
			}
				
		},function(err){
			console.log(err);
       	});
	}
	
	$scope.logout = function(){
		console.log("in logout");
		window.location.href = '../Main';
	}
	
});

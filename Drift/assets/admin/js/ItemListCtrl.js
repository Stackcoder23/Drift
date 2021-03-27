app.controller("listingCtrl",function($scope,$http){
	
	$scope.list = [];
	$scope.productIndex = 0; 
	$scope.loadList = function(){
		$http({
			url : "Edit/get_items",
			method : "GET"
		}).then(function(res){
			console.log(res.data);
			$scope.list = res.data;
		},function(err){
			$scope.list = [];
			console.log(err);
		});
	}


	$scope.edit	  = function(index) {
			$('#editmodal').modal('show');
			console.log(index);
			$scope.product   	 = angular.copy($scope.list[index]);
			console.log($scope.product  );
			$scope.productIndex = index; 
			console.log(index  );
		}
        
        $scope.loadcategory = function(){
		$http({
			url : "Edit/get_category",
			method : "GET",

		}).then(function(resp){
		    $scope.chooseCategory = resp.data

		},function(err){
			console.log(0);

		})
	}	

		$scope.updateItem = function(){
			$scope.list[$scope.itemIndex] = angular.copy($scope.product);

			var fd = new FormData();
			fd.append('file', $scope.myFile);
			
			fd.append('data', JSON.stringify($scope.product));
			console.log($scope.product);
			$http.post("Edit/update_item", fd, {
				transformRequest: angular.identity,
				headers: {'Content-Type': undefined},
			}).then(function(res){
				console.log(res.data);
				$('#editmodal').modal('hide');
				$scope.loadList();
			},function(err){
				console.log(err);
	       	});	
		}


		$scope.deletee = function(id,index){
			console.log(id);
			console.log(index);
			var userid=id;
			$http({
				url:"Edit/delete_item",
				method : "POST",
				data   :userid
			}).then(function(resp){
				alert('deleted successfully');
				$scope.list.splice(index,1);
				$scope.loadList();
				//window.location.reload();
			},function(err){
				$scope.message = "record not updated!";
			})
		}

		$scope.logout = function(){
			console.log("in logout");
			window.location.href = '../Main';
		}
});
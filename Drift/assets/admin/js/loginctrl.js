app.controller("loginCtrl",function($scope,$http){

	$scope.admin = {};
	$scope.user  = {};
	$scope.login = function(){
		$http({
			url : 'Main/check_login',
			method :'post',
			data :$scope.admin
		}).then(function(resp){
			console.log(resp.data);
			//var data = JSON.parse(resp.data);
			
			if(resp.data['status']==1){
				if(resp.data['type']==1){
					alert("successfully logged in");
					window.location.href = 'admin/Home';
				}else if(resp.data['type']==0){
					alert("successfully logged in");
					window.location.href = 'website/Home';
				}else{
					alert("Something Went Wrong!!");
				}
				
			}
			else{
				alert("wrong credential");
			}
		},function(err){
			console.log(err);
	   });
	}

	$scope.register = function(){
		console.log("register");
		
		console.log($scope.user);
		var fd = new FormData();
		fd.append('file', $scope.myFile);
		
		fd.append('data', JSON.stringify($scope.user));
		
		$http.post("Register/register_user", fd, {
			transformRequest: angular.identity,
			headers: {'Content-Type': undefined},
		}).then(function(resp){
			console.log(resp.data);
			//var data = JSON.parse(resp.data);
			
			if(resp.data['status']==1){
				alert(resp.data['msg']);
			}else if(resp.data['status']==2){
				alert(resp.data['msg']);
			}else{
				alert(resp.data['msg']);
			}
		},function(err){
			console.log(err);
	   });
	}

	$scope.updatepassword = function(){
		console.log("in updatepassword");
		$http({
			url : 'Settings_admin/updatepassword',
			method :'post',
			data :$scope.user
		}).then(function(res){
			console.log(res);
			if(res.data['status']=1){
				alert(res.data['msg']);
				location.reload();
			}else if(res.data['status']=2){
				alert(res.data['msg']);
			}else if (res.data['status']=3){
				alert(res.data['msg']);
			}else{
				alert(res.data['msg']);
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
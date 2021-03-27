app.controller("OrderCtrl",function($scope,$http){

  $scope.list = [];
  $scope.datalist = [];
  $scope.itemIndex = 0; 
  $scope.fullname;
  $scope.loadOrderHistory = function(){

    $http({
      url : "Order/order_history_data",
      method : "get",
    }).then(function(resp){
      console.log(resp.data);
      $scope.list =resp.data;
    },function(err){
      alert(err);
      console.log(err);
    });

  }

    // console.log(1);
    //to get complete  details of the order
    $scope.more = function(id){
        $('#ordermodal').modal('show');
        var id=id;
    $http({
      url : "Order/detail_order_history",
      method : "post",
      data :id
     
    }).then(function(res){
      console.log(res.data);
      $scope.fullname=res.data[0]['fullname'];
      $scope.datalist =res.data;
     console.log($scope.datalist);
    },function(err){
    
      console.log(err);
    });
  }

  $scope.logout = function(){
      console.log("in logout");
      window.location.href = '../Main';
    }
  
});

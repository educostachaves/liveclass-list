
$app.controller('liveclassController',function ($scope,$http,$routeParams,$location) {
	$scope.rows = null;
	$scope.row = null;

	$scope.row = {
        "Disciplines": [{}],
        "Teachers": [{}],
    };

	$scope.currentPage = 0;
	$scope.pageSize = 15;

	$scope.numberOfPages =function(){
		return Math.ceil($scope.rows.length/$scope.pageSize);                
	}

	$scope.loadAll = function(){
		$scope.showLoader();
		$http.get($scope.server("/liveclass")).success(function(data){
			$scope.rows = data;	
			$scope.hideLoader();
		});
	}

	$scope.loadRow = function(){
		$scope.showLoader();
		$http.get($scope.server("/liveclass/"+$routeParams.id)).success(function(data){
			$scope.row = data[0];
			$scope.row.Start = new Date(data[0]["Start"]);
			$scope.hideLoader();
		});
	}

	$scope.save = function(){
		$scope.showLoader();
		$http.post($scope.server("/liveclass/"),$scope.row)
			.success(function(data){
				alert("Saved with Success");
				$scope.hideLoader();
			})
			.error(function(){
				alert("An error appeared on Upload process");
			});
	}

	$scope.update = function(){
		$scope.showLoader();
		$http.post($scope.server("/liveclass/"+$routeParams.id),$scope.row)
			.success(function(data){
				alert("Uploaded with Success");
				$scope.hideLoader();
			})
			.error(function(){
				alert("An error appeared on Upload process");
			});
	}

	$scope.delete = function(){
		if (confirm("Deseja excluir " + $scope.row.CustomerID + "?")){
			$http.delete($scope.server("/liveclass/"+$routeParams.id)).success(function(s){
				$scope.hideLoader();
				alert("Deleted with Success");
				$location.path("/liveclass");
			});
		}
	}

	$scope.addNewTeacher = function() {
		var newItemNo = $scope.row.Teachers.length+1;
		$scope.row.Teachers.push({});
	};

	$scope.removeTeacher = function() {
		var lastItem = $scope.row.Teachers.length-1;
		$scope.row.Teachers.splice(lastItem);
	};

	$scope.addNewDiscipline = function() {
		var newItemNo = $scope.row.Disciplines.length+1;
		$scope.row.Disciplines.push({});
	};

	$scope.removeDiscipline = function() {
		var lastItem = $scope.row.Disciplines.length-1;
		$scope.row.Disciplines.splice(lastItem);
	};

});
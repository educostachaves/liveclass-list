
$app.controller('liveclassController',function ($scope,$http,$routeParams,$location) {
	$scope.rows = null;
	$scope.row = null;

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
		$http.post($scope.server("/liveclass/"+$routeParams.id),$scope.row).success(function(data){
			alert("Salvo com sucesso");
			$scope.row.isUpdate = true;
			$scope.hideLoader();
		});
	}

	$scope.delete = function(){
		if (confirm("Deseja excluir " + $scope.row.CustomerID + "?")){
			$http.delete($scope.server("/liveclass/"+$routeParams.id)).success(function(s){
				$scope.hideLoader();
				alert("Excluído com sucesso");
				$location.path("/liveclass");
			});
		}
	}

	$scope.Teachers = [{}];
	$scope.Disciplines = [{}];

	$scope.addNewTeacher = function() {
		var newItemNo = $scope.Teachers.length+1;
		$scope.Teachers.push({});
	};

	$scope.removeTeacher = function() {
		var lastItem = $scope.Teachers.length-1;
		$scope.Teachers.splice(lastItem);
	};

	$scope.addNewDiscipline = function() {
		var newItemNo = $scope.Disciplines.length+1;
		$scope.Disciplines.push({});
	};

	$scope.removeDiscipline = function() {
		var lastItem = $scope.Disciplines.length-1;
		$scope.Disciplines.splice(lastItem);
	};

});
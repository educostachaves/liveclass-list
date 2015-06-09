SERVER_URL = "http://localhost/liveclass-list/api/";

var $app = angular.module('app',['ngRoute']);

$app.config(['$routeProvider','$httpProvider',function($routeProvider,$httpProvider){

	$routeProvider.
		when('/',{templateUrl:'view/main.html'}).
		when('/liveclass',{templateUrl:'view/liveclass/main.html',controller:'liveclassController'}).
		when('/liveclass/create',{templateUrl:'view/liveclass/create.html',controller:'liveclassController'}).
		when('/liveclass/edit/:id',{templateUrl:'view/liveclass/edit.html',controller:'liveclassController'}).
		otherwise({redirectTo:'/'});

	$httpProvider.interceptors.push(function($q,$rootScope) {
		return function(promise) {
			$rootScope.hideLoader();
			return promise.then(function(response) {
			    return(response);
			}, function(response) {
			    $data = response.data;
			    $error = $data.error;
			    console.error($data);
			    if ($error && $error.text)
			      	alert("ERROR: " + $error.text);
			    else{
			      	if (response.status=404)
			      		alert("Erro ao acessar servidor. Página não encontrada. Veja o log de erros para maiores detalhes");
			      	else
			    		alert("ERROR! See log console");
			    }
			    return $q.reject(response);
			});
		}
	});
	
}]);	

$app.run(['$rootScope',function($rootScope){

	$rootScope.showLoaderFlag = false;

	$rootScope.showLoader=function(){
		$rootScope.showLoaderFlag=true;
	}

	$rootScope.hideLoader=function(){
		$rootScope.showLoaderFlag=false;
	}

	$rootScope.server=function(url){
		return SERVER_URL + url;
	}

}]);

$app.filter('startFrom', function() {
	return function(input, start) {
		if (input==null)
			return null;
        start = +start;
        return input.slice(start);
    }
});

$app.filter('dateFormat', function($filter) {
	return function(input)
	{
		if(input == null){ return ""; } 
		var _date = $filter('date')(new Date(input), 'dd/MM/yyyy HH:mm:ss');
		return _date.toUpperCase();
	};
});
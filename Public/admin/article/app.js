var app = angular.module('ArticleApp', ['ui.bootstrap']);

app.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
});

app.controller('articleCrtl', function ($scope, $http, $timeout) {
    $http.get('getlist').success(function(data){
        $scope.list = data.data;
        $scope.articles = $scope.list.data;
        $scope.currentPage = 1; //current page
        $scope.entryLimit = 5;
        $scope.filteredItems = $scope.list.count;
        $scope.totalItems = $scope.list.count;
    });
    $scope.setPage = function(pageNo) {
        $scope.currentPage = pageNo;
    };
    $scope.filter = function() {
        $timeout(function() { 
            $scope.filteredItems = $scope.filtered.length;
        }, 10);
    };
    $scope.sort_by = function(predicate) {
        $scope.predicate = predicate;
        $scope.reverse = !$scope.reverse;
    };
    $scope.delete = function(aid){
    	if(confirm('确定删除吗?')){
    		$http.post('delete',{aid : aid}).success(function(data){
    			if(data.code == 1){
    				alert(data.msg);
    			}else{
    				alert(data.msg);
    			}
      		});
    	}
    };
});
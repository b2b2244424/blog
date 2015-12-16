angular.module('ArticleCtrl', ['$scope', '$timeout', '$http', '$compile','$location',function ($scope,$timeout,$http,$compile,$location) {
	$scope.isLoading = false;
	$scope.articleCollection = [];
	$scope.totalCount = 0;
	$scope.perpage = 20;
	$scope.currentpage = 1;

	//每页显示条数
	$scope.perpageCollection = [10,20,50,100];
	$scope.currentpage = $scope.perpageCollection[0];
	$scope.$watch("currentpage", function(newval,oldval){
		if(newval && newval != oldval){
			$scope.atCtrl.pipe();
		}
	});

	$scope.getArticles = function(tableState,ctrl){
		if(!$scope.atCtrl && ctrl){
			$scope.atCtrl = ctrl;
		}

		if(!tableState && $scope.atCtrl){
			$scope.atCtrl.pipe();
			return;
		}

		$scope.isLoading = true;

		var pagination = tableState.pagination;
		var search = tableState.search;

		//文章列表
		var number = $scope.currentpage;
		var fields = 'aid,title,cid,create_time';
		var condition = $scope.condition;

		if($scope.curstatusChange){
			$scope.curstatusChange = false;
			$scope.currentpage = 1;
		}else{
			$scope.currentpage = Math.ceil(pagination.start / number) + 1;
		}

		$http.post("getlist",{
			currentpage : $scope.currentpage,
			perpage : number,
			fields : fields,
			condition : condition
		}).success(function(data){
			var data = data.data;
			$scope.isLoading = false;
			$scope.articleCollection = data.data;
			$scope.totalCount = data.count;
			tableState.pagination.numberOfPages = Math.ceil(data.count / number);
		});
	};
}])
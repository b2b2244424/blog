var app = angular.module('ArticleApp', ['ui.bootstrap']);
app.config(function($httpProvider){
    $httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded;charset=utf-8';
    $httpProvider.defaults.headers.post['Accept'] = 'application/json, text/javascript, */*; q=0.01';
    $httpProvider.defaults.transformRequest = [function(data) {
        /**
         * The workhorse; converts an object to x-www-form-urlencoded serialization.
         * @param {Object} obj
         * @return {String}
         */
        var param = function(obj) {
            var query = '';
            var name, value, fullSubName, subName, subValue, innerObj, i;
            for (name in obj) {
                value = obj[name];
                if (value instanceof Array) {
                    for (i = 0; i < value.length; ++i) {
                        subValue = value[i];
                        fullSubName = name + '[' + i + ']';
                        innerObj = {};
                        innerObj[fullSubName] = subValue;
                        query += param(innerObj) + '&';
                    }
                } else if (value instanceof Object) {
                    for (subName in value) {
                        subValue = value[subName];
                        fullSubName = name + '[' + subName + ']';
                        innerObj = {};
                        innerObj[fullSubName] = subValue;
                        query += param(innerObj) + '&';
                    }
                } else if (value !== undefined && value !== null) {
                    query += encodeURIComponent(name) + '='
                            + encodeURIComponent(value) + '&';
                }
            }
            return query.length ? query.substr(0, query.length - 1) : query;
        };
        return angular.isObject(data) && String(data) !== '[object File]' ? param(data) : data;
    }];
});

app.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
});

app.controller('articleCrtl', function ($scope, $http, $timeout, $location) {
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
    $scope.create = function(articleData){
        $http.post('addone',{articledata : articleData}).success(function(data){
            if(data.code == 1){
                swal("操作成功",'已成功添加一篇文章','success');
            }else{
                swal("OMG","操作失败了","error");
            }
        });
    };
    $scope.edit = function(aid) {
        $http.get('edit?aid='+aid).success(function(data){
            if(data.code == 1){
            }else{
                swal("OMG","出错了","error");
            }
        });
    };
    $scope.update = function(data){
        $http.post('updateone',{data : data}).success(function(data){
            if(data.code == 1){
                swal("修改成功","文章修改成功","success");
            }else{
                swal("修改失败","文章修改失败","error");
            }
        });
    };
    $scope.delete = function(article){
    	swal({
            title : '确定要删除吗?',
            text : '确定要删除这篇文章?',
            type : 'warning',
            showCancelButton : true,
            closeOnConfirm : false,
            confirmButtonText : '确定',
            confirmButtonColor : '#ec6c62'
        },function(){
            var aid = article.aid;
            $http.post('delete',{aid : aid}).success(function(data){
                if(data.code == 1){
                    swal("操作成功!", "已成功删除文章", "success");
                    $scope.articles.forEach(function(r,i){
                        if(article.title == r.title){
                            $scope.articles.splice(i,1);
                        }
                    });
                }else{
                    swal("OMG", "删除操作失败了!", "error");
                }
            });
        });
    };
});

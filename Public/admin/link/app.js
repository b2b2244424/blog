var app = angular.module('LinkApp', ['ui.bootstrap']);
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

app.controller('LinkCrtl', function ($scope, $http, $timeout, $location, $window) {
    $http.get('getlist').success(function(data){
        $scope.list = data.data;
        $scope.links = $scope.list.data;
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
    $scope.open = function(link){
        swal({
            title : '确定要启用'+link.linkname+'吗?',
            text : '确定要启用?',
            type : 'warning',
            showCancelButton : true,
            closeOnConfirm : false,
            confirmButtonText : '确定',
            confirmButtonColor : '#ec6c62'
        },function(){
            var lid = link.lid;
            $http.post('open',{lid : lid}).success(function(data){
                if(data.code == 1){
                    swal("操作成功!", "已成功启用该链接", "success");
                    $window.location.href = "../Link/index";
                }else{
                    swal("OMG", "操作失败了!", "error");
                }
            });
        });
    };
    $scope.stop = function(link){
        swal({
            title : '确定要停用'+link.linkname+'吗?',
            text : '确定要停用?',
            type : 'warning',
            showCancelButton : true,
            closeOnConfirm : false,
            confirmButtonText : '确定',
            confirmButtonColor : '#ec6c62'
        },function(){
            var lid = link.lid;
            $http.post('stop',{lid : lid}).success(function(data){
                if(data.code == 1){
                    swal("操作成功!", "已成功停用该链接", "success");
                    $window.location.href = "../Link/index";
                }else{
                    swal("OMG", "操作失败了!", "error");
                }
            });
        });
    };
    $scope.delete = function(user){
        swal({
            title : '确定要删除'+user.username+'吗?',
            text : '确定要删除吗?',
            type : 'warning',
            showCancelButton : true,
            closeOnConfirm : false,
            confirmButtonText : '确定',
            confirmButtonColor : '#ec6c62'
        },function(){
            var uid = user.uid;
            $http.post('delete',{uid : uid}).success(function(data){
                if(data.code == 1){
                    swal("操作成功!", "已成功删除用户", "success");
                    $scope.users.forEach(function(r,i){
                        if(user.uid == r.uid){
                            $scope.users.splice(i,1);
                        }
                    });
                }else{
                    swal("OMG", "删除操作失败了!", "error");
                }
            });
        });
    };
});
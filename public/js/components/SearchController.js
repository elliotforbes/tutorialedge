var myApp = angular.module('myApp',[]);

var myApp = angular.module('myApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

myApp.controller('SearchController', ['$scope', '$http' , function($scope, $http) {
    
    $scope.results = {};
    
    var getInitialResults = function () {
        $http.get('https://tutorialedge.net/api/v1/articles')
            .success(function (response){
                $scope.results = response;
            })
            .error(function (response){
                console.log("Failed to get search results");
            });
    };
    
    getInitialResults();
    
}]);
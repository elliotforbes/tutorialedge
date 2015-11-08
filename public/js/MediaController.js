var mediaApp = angular.module('mediaApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});


mediaApp.controller('MediaController', function ($scope) {
    $scope.imageList = ["laravel5.jpg","1.jpg", "2.jpg", "adapter-design-pattern.png", "Hi.png"];
    
    $scope.getImagePath = function(imageName) {
        return "http://localhost:8080/tuts01/public/uploads/articles/" + imageName;
    };
    
    $scope.getAllImages = function() {
        
    };
    
    
});
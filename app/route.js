
var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    
    .when("/zzz", {
        templateUrl : "templates/post.html"
    })
    ;
});

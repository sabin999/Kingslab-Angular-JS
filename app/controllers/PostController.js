

app.controller('myController', function ($scope) {
           
    
    $scope.hello = function () {
        var a = $scope.name;
        
        var b = $scope.eid;

        $scope.msg1 = a;
        $scope.msg2 = b;
        
    }; 
});
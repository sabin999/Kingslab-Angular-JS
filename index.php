<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="app/route.js"></script>
<script src="app/controllers/PostController.js"></script>
<div class="container p-3 my-3 bg-dark text-white">
<body ng-app="myApp">



<a href="#!zzz">click here to route to post.html 1</a>


<p>Click the Link above</p>



<div ng-view></div>


</div>
</body>
</html>

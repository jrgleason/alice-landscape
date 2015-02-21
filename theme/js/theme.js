var app = angular.module('alice-landscape',['templates-build']);
function Navbar(){
	return{
		restrict: "E",
		replace: true,
		scope: {},
		templateUrl: "main/jade/navbar.jade"
	}
}
app
  .directive('alNavBar', Navbar);
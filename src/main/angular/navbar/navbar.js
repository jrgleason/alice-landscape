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
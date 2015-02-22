angular.module('templates-build', ['main/jade/navbar.jade']);

angular.module("main/jade/navbar.jade", []).run(["$templateCache", function($templateCache) {
  $templateCache.put("main/jade/navbar.jade",
    "<nav class=\"navbar main-navigation\">\n" +
    "  <div class=\"navbar-header\">\n" +
    "    <button type=\"button\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" class=\"navbar-toggle collapsed\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button>\n" +
    "    <div class=\"navbar-brand\">Brand</div>\n" +
    "  </div>\n" +
    "</nav>");
}]);

module.exports = function(grunt) {
	grunt.initConfig({
		compress : {
			main : {
				options : {
					archive : 'alice-landscape.zip'
				},
				files : [ {
					src : [ './theme/**' ]
				} ]
			}
		},
		html2js : {
			build : {
				src : [ 'src/main/jade/**/*.jade', 'src/main/html/**/*.html' ],
				dest : 'build/alice-landscape-templates.js'
			}
		},
		concat : {
			core : {
				src : [ 'src/main/angular/**/app.js',
						'src/main/angular/**/*.js' ],
				dest : 'build/alice-angular-core.js',
			}
		},
		less : {
			default:{
			    files : {
				    "theme/css/theme.css" : "src/main/less/main.less"
			    }
			}
			
		}
	});
	grunt.loadNpmTasks('grunt-contrib-compress');
	grunt.loadNpmTasks('grunt-html2js');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-less');
};

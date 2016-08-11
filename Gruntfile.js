module.exports = function(grunt) {

  // Project configuration.
	grunt.initConfig({
	    pkg: grunt.file.readJSON('package.json'),

	    watch: {
    		files: [
				'assets/less/*.less',
				'assets/js/*.js'
			],
			tasks: ['less:development', 'autoprefixer:development'],
			options: {
				event: ['changed', 'added', 'deleted'], //all
				spawn: false
			}
		},

	    //Less Files
	    less: {
	    	development: {
	    		options: {
					compress: true,
					yuicompress: true,
					optimization: 2,
					sourceMap: true,
					modifyVars: {
                        version: '<%= pkg.version %>'
                    },
                    banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
				},
				files: {
					"assets/css/app-main.min.css": "assets/less/app-main.less",
					"assets/css/app-login.min.css": "assets/less/app-login.less"
				}
	    	}
		},

		//Auto Prefix the CSS Files
		autoprefixer: {
			development: {
				options: {
					//browsers: ['last 2 versions', 'ie 8', 'ie 9']
				},
				files: {
					'assets/css/app-main.min.css': 'assets/css/app-main.min.css',
					'assets/css/app-login.min.css': 'assets/css/app-login.min.css',
				}
			}
		},

		
	});

  // Load the plugins that provides tasks.
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-autoprefixer');


  // Default task(s).
  grunt.registerTask('default', ['watch']);

};
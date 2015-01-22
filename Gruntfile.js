module.exports = function(grunt) {
	grunt.initConfig ({
		pkg: grunt.file.readJSON('package.json'),

		watch: {
			options: {
				livereload: true,
			},
			css: {
				files: ['sass/*.scss', 'sass/pages/*.scss'],
				tasks: ['sass']
			},
			js: {
				files: ['js/javascript.js'],
				tasks: ['uglify']
			}
		},

		sass: {
			dist: {
				options: {
					style: 'compressed'		// Options: expanded, compressed
				},
				files: {
					'css/style.css' : 'sass/style.scss'	//'destination' : 'source'
				}
			}
		},

		imagemin: {
			dynamic: {
				files: [{
					expand: true,
					cwd: 'img/',
					src: ['**/*.{png,jpg,gif}'],
					dest: 'img/'
				}]
			}
		},

		uglify: {
	    options: {
	      mangle: false
	    },
	    my_target: {
	      files: {
	        'js/javascript.min.js': ['js/javascript.js']
	      }
	    }
	  }
		
	});

	grunt.registerTask('default', 'watch');

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');
}
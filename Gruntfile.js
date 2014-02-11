module.exports = function(grunt) {
	grunt.initConfig ({
		pkg: grunt.file.readJSON('package.json'),

		sass: {
			dist: {
				options: {
					style: 'expanded'
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

		watch: {
			options: {
				livereload: true,
			},
			css: {
				files: ['sass/*.scss', 'sass/pages/*.scss'],
				tasks: ['sass']
			}
		}
		
	});

	grunt.registerTask('default', 'watch');

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-contrib-watch');
}
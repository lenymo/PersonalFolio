module.exports = function(grunt) {
	grunt.initConfig ({
		pkg: grunt.file.readJSON('package.json'),

		watch: {
			files: ['css/*.css'],
			tasks: 'cssmin'
		},
		
		cssmin: {
			minify: {
				expand: true,
				cwd: 'css/',
				src: ['*.css', '!*.min.css'],
				dest: 'css/',
				ext: '.min.css'
			}
		}
	});
	grunt.registerTask('default', 'cssmin');

	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
}
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

		watch: {
			css: {
				files: ['sass/*.scss'],
				tasks: ['sass']
			}
		}
		
	});

	grunt.registerTask('default', 'watch');

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
}
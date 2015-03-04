module.exports = function(grunt) {
	"use strict";

	var bourbon = require('node-bourbon').includePaths;

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        modernizr: {
        	dist: {
        		devFile: "js/src/vendor/modernizr/modernizr-dev.js",
        		outputFile: "js/src/vendor/modernizr/modernizr.js",
        		parseFiles: false,
        		files: {
        			src: [
        				"css/style.scss",
        				//"js/src/vendor/circularnav/*.js"
        			]
        		},
        		uglify: false
        	}
        },

	    sass: {
			dist: {
				options: {
					outputStyle: 'compressed', 
					includePaths: ['scss', bourbon],
					sourceMap: true
				},
				files: {
					'css/style.min.css': 'scss/style.scss'
				}
			},
			dev: {
				options: {
					outputStyle: 'expanded',
					includePaths: ['scss', bourbon],
					sourceMap: true
				},
				files: {
					'css/style.css': 'scss/style.scss'
				}
			}
	    },

		copy: {
			dist: {
				files: [
					{expand: true, cwd: 'bower_components/jquery/dist/', src: ['jquery.js'], dest: 'js/src/vendor/jquery/', filter: 'isFile'},
					{expand: true, cwd: 'bower_components/lodash/', src: ['lodash.js'], dest: 'js/src/vendor/lodash/', filter: 'isFile'},
					{expand: true, cwd: 'bower_components/backbone/', src: ['backbone.js'], dest: 'js/src/vendor/backbone/', filter: 'isFile'}
				]
			}
		},

		concat: {
			options: {
				sourceMap: true
			},
			dist: {
				src: [
					'js/src/vendor/modernizr/modernizr.js',
					'js/src/vendor/jquery/jquery.js',
					'js/src/vendor/lodash/lodash.js',
					'js/src/vendor/backbone/backbone.js',
					//'js/src/vendor/circularnav/polyfills.js',
					//'js/src/vendor/circularnav/circularNav.js',
					'js/src/app/**/*.js'
				],
				dest: 'js/scripts.js'
			}
		},

		jshint: {
			beforeconcat: ['Gruntfile.js', 'js/src/app/**/*.js'],
			options: {
				reporter: require('jshint-stylish')
			}
		},

		uglify: {
			options: {
				sourceMap: true
			},
			dist: {
				files: {
					'js/scripts.min.js': 'js/scripts.js'
				}
			}
		},

		sprite:{
	      all: {
	        src: 'img/src/**/*.png',
	        dest: 'img/spritesheet.png',
	        destCss: 'scss/config/sprites.css'
	      }
	    },

	    watch: {
			grunt: { files: ['Gruntfile.js'] },

			sass: {
				files: 'scss/**/*.scss',
				tasks: ['sass:dev'],
				options: {
					livereload: true
				}
			},

			js: {
        		files: ['js/src/**/*.js'],
        		tasks: ['jshint', 'concat', 'uglify']
			}
	    }
    });

    //load tasks
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-modernizr');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-spritesmith');

    // task setup
    grunt.registerTask('build', ['sass:dist', 'copy', 'modernizr', 'jshint', 'concat', 'uglify']);
    grunt.registerTask('default', ['build', 'watch']);
};
module.exports = function (grunt) {

    // Configurable paths
    var config = {
        srcPath:    '.',
        buildPath:  './assets/build',
    };

    // Project configuration.
    grunt.initConfig({

        // Project settings of path
        config: config,

        pkg: grunt.file.readJSON('package.json'),

        concat: {
            options: {
                separator: ';'
            },
            libs: {
                src: [
                    '<%= config.srcPath %>/bower_components/modernizr/modernizr.js',
                    '<%= config.srcPath %>/bower_components/jquery/dist/jquery.js',
                    '<%= config.srcPath %>/bower_components/foundation/js/foundation.js',
                    '<%= config.srcPath %>/bower_components/angular/angular.js',
                    '<%= config.srcPath %>/bower_components/angular-resource/angular-resource.js',
                    '<%= config.srcPath %>/bower_components/angular-route/angular-route.js',
                    '<%= config.srcPath %>/bower_components/foundation/js/vendor/foundation.js',
                ],
                dest: '<%= config.buildPath %>/javascripts/libs.js'
            },
        },

        // Minify all JS "compress"
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
            },
            my_target: {
                files: {
                    '<%= config.buildPath %>/javascripts/libs.js': ['<%= config.buildPath %>/javascripts/libs.js'],
                }
            }
        },

        // Compile SASS for CSS
        compass: {
            dist: {
                options: {
                    sassDir: '<%= config.srcPath %>/assets/scss',
                    cssDir: '<%= config.buildPath %>/css',
                    outputStyle: 'compressed'
                }
            },
        },

        // Preview all the packages modified in project
        watch: {
            css: {
                files: ['<%= config.srcPath %>/scss/**/*.scss'],
                tasks: ['compass']
            },
            scripts: {
                files: ['<%= config.srcPath %>/javascripts/**/*.js'],
                tasks: ['concat']
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Default Task(s).
    grunt.registerTask('build', ['concat', 'uglify', 'compass']);
    // Basic Test Task(s).
    grunt.registerTask('basic', ['concat', 'compass']);
    // Only JS Task(s)
    grunt.registerTask('js', ['concat', 'uglify']);
};

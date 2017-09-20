module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
          dist: {
            files: [{
              expand: true,
              cwd: 'sass',
              src: ['style.scss'],
              dest: './',
              ext: '.css'
            }]
          }
        },

    });

    grunt.loadNpmTasks('grunt-contrib-sass');

    grunt.registerTask('default', [
        'sass:dist'
    ]);
};

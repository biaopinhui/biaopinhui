module.exports = function(grunt) {

  grunt.initConfig({
    less: {
      dev: {
        files: {
          'public/assets/css/app.css': 'resources/assets/less/app.less',
          'public/assets/css/main.css': 'resources/assets/less/main.less'
        }
      }
    },
    watch: {
      files: 'resources/assets/less/*.less',
      tasks: ['less']
    }
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['less']);

};

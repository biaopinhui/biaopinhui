module.exports = function(grunt) {

  grunt.initConfig({
    less: {
      dev: {
        files: {
          'public/assets/css/app.css': 'resources/assets/less/app.less',
          'public/assets/css/main.css': 'resources/assets/less/main.less'
        }
      },
      prod: {
        options: {
          plugins: [
            new (require('less-plugin-clean-css'))()
          ]
        },
        files: {
          'public/assets/css/app.css': 'resources/assets/less/app.less',
          'public/assets/css/main.css': 'resources/assets/less/main.less'
        }
      }
    },
    watch: {
      files: 'resources/assets/less/*.less',
      tasks: ['less:dev']
    }
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['less:dev']);

};

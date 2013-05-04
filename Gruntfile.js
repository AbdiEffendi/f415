module.exports = function(grunt) {
  grunt.initConfig({
    compass: {
      dist: {
        options: {
          config: 'config.rb',
          specify: 'sass/style.sass'
        }
      }
    },
    uglify: {
      my_target: {
        files: {
          'javascripts/main.min.js': ['javascripts/main.js']
        }
      }
    },
    watch: {
      files: '**/*.sass',
      tasks: ['compass']
    }
  });

  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['watch']);


};
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    less:{
      build:{
        src: 'less/compile.less',
        dest: 'css/style.css'
      },
      
    },
    uglify:{
      build:{
        src: 'js/*.js',
        dest: 'dmped.min.js'
      },
    },
    watch: {
      css: {
        files: ['less/*.less'],
        tasks: ['less']
      },
      js: {
        files: ['js/*.js'],
        tasks: ['uglify']
      }
    }
  });
  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  // Default task(s).
  grunt.registerTask('default', ['less', 'watch']);

};
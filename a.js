

  module.exports = function(grunt) {

  // Project configuration.
 

grunt.initConfig({
//---------------------------

    less: {
      development: {
        options: {
          compress: true,
          cleancss: true,
          optimization: 2,
          sourceMap: true
        },
        files: [{
          expand: true,
          cwd: 'css/',
          src: ['**/*.less'],
          dest: 'css/',
          ext: '.css'
        }]
      } 
    },
    watch: {
      styles: {
        files: ['css/**/*.less'], // which files to watch
        tasks: ['less'],
        options: {
          nospawn: true
        }
      }
    }

//----------------------------
});
  
grunt.loadNpmTasks('grunt-contrib-less');
 grunt.loadNpmTasks('grunt-contrib-watch');

grunt.registerTask('default', ['less']);

};
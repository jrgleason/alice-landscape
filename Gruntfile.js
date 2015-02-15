module.exports = function (grunt) {
  grunt.initConfig({
    compress: {
      main: {
        options: {
          archive: 'alice-landscape.zip'
        },
        files: [
          {src: ['./**']}
        ] 
      }
    }
  });
  grunt.loadNpmTasks('grunt-contrib-compress');
};

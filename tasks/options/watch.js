module.exports = {
  options: {
    livereload: true,
  },
  scripts: {
    files: ['js/**/*.js'],
    tasks: ['concat', 'uglify'],
    options: {
      spawn: false,
    }
  },
  css: {
    files: ['scss/**/*.scss'],
    tasks: ['sass', 'autoprefixer', 'cssmin'],
    options: {
      spawn: false,
    }
  },
  html:{
    files: ['./**/*.php'],
    tasks: [],
    options: {
      spawn: false
    }
  }
}
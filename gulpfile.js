var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
  return gulp.src('./jumbotron/jumbotron.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./jumbotron'));
});

gulp.task('sass:watch', function () {
  gulp.watch('./jumbotron/**/*.scss', ['sass']);
});
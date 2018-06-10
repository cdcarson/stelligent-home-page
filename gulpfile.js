var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();


gulp.task('sass', function () {
  return gulp.src('./docs/jumbotron/jumbotron.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./docs/jumbotron'));
});

gulp.task('sass:watch', function () {
  gulp.watch('./docs/jumbotron/**/*.scss', ['sass']);
});

gulp.task('serve', function() {
    browserSync.init({
        server: {
            baseDir: "./docs"
        }
    });
});

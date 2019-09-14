const gulp = require('gulp');
const sass = require('gulp-sass');
const prefix = require('gulp-autoprefixer');
const clean = require('gulp-clean-css');
const browserSync = require('browser-sync').create();

gulp.task('styles', () =>
  gulp
    .src('scss/add-styles.scss')
    .pipe(sass())
    .pipe(prefix())
    .pipe(clean())
    .pipe(gulp.dest('css'))
    .pipe(browserSync.stream())
);

gulp.task('dev', done => {
  browserSync.init({
    proxy: 'http://localhost:8888/',
  });
  gulp.watch('scss/*.scss', gulp.series('styles'));
  gulp.watch('./*.php').on('change', browserSync.reload);
  done();
});

gulp.task('default', gulp.series('dev'));

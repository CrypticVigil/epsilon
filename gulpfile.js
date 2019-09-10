const gulp = require('gulp');
const sass = require('gulp-sass');
const prefix = require('gulp-autoprefixer');
const clean = require('gulp-clean-css');

gulp.task('process', () =>
  gulp
    .src('scss/*.scss')
    .pipe(sass())
    .pipe(prefix())
    .pipe(clean())
    .pipe(gulp.dest('css'))
);

gulp.task('watch', () => gulp.watch('scss/*.scss', gulp.series('process')));

gulp.task('default', gulp.series('watch'));

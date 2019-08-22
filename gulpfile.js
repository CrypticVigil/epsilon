const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();

gulp.task('sass', () =>
  gulp
    .src('scss/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('css'))
    .pipe(browserSync.stream())
);

gulp.task(
  'serve',
  gulp.series('sass', () => {
    browserSync.init({
      server: {
        baseDir: './',
      },
    });

    gulp.watch('scss/*.scss', gulp.series('sass'));
    gulp.watch('*.html').on('change', browserSync.reload);
  })
);

gulp.task('default', gulp.series('serve'));
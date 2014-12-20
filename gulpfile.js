var gulp = require('gulp'),
    concatCss = require('gulp-concat-css'),
    uglify = require('gulp-uglify'),
    autoprefixer = require('gulp-autoprefixer');

gulp.task('default', function () {


    gulp.task('default', function () {
        gulp.src('assets/**/*.css')
            .pipe(concatCss("styles/bundle.css"))
            .pipe(gulp.dest('out/'));
    });
});

gulp.task('compress', function () {
    gulp.src('lib/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('dist'))
});

gulp.task('prefix', function () {
    return gulp.src('src/app.css')
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('dist'));
});


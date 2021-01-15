
//dependencies
var gulp = require('gulp');
var sass = require('gulp-sass');
var rename = require('gulp-rename');
var minifycss = require('gulp-minify-css');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var order = require('gulp-order');
var del = require('del');

//sass
gulp.task('scss', function () {
    gulp.src('_dev/scss/**/style.scss') //set source
    .pipe(sass()) //sass to css
    .pipe(gulp.dest('css')) //output unminified css to root
    .pipe(rename({suffix: '.min'})) //add suffix
    .pipe(minifycss()) //minify css
    .pipe(gulp.dest('css')) //output minified css
});

//js
gulp.task('js', function() {
    return gulp.src('_dev/js/**/*.js') //set source
    .pipe(order([
        'vendor/**/jquery.js',
        'vendor/**/tweenmax.min.js',
        'vendor/**/*.js',
        'helpers.js',
        'scripts.js'
    ]))
    .pipe(concat('scripts.js')) //concatinate to scripts.js
    .pipe(gulp.dest('js')) //output concatinated js
    .pipe(uglify()) //minify js
    .pipe(rename({suffix: '.min'})) //add suffix
    .pipe(gulp.dest('js')); //output minified js
});

//clean
gulp.task('clean', function() {
    del([
        'css', //clean css directory
        'js', //clean js directory
    ])
});

//default
gulp.task('default', ['clean'], function() {
    gulp.start('scss', 'js'); //clean directories before recompile
});

//watch
gulp.task('watch', function() {
    gulp.watch('_dev/scss/**/*.scss', ['scss']); //watch for changes in any .scss files, then run 'scss' task
    gulp.watch('_dev/js/**/*.js', ['js']); //watch for changes in any .js files, then run 'js' task
});
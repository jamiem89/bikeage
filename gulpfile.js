'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass')(require('node-sass'));
var concat = require('gulp-concat');
sass.compiler = require('node-sass');

var themeDir = 'build/wp-content/themes/bikeage/';

gulp.task('sass', function (done) {
    gulp.src(`${themeDir}/sass/**/*.scss`)
   .pipe(concat('custom.scss'))
   .pipe(sass().on('error', sass.logError))
   .pipe(gulp.dest(`${themeDir}/css/`))
   done();
});
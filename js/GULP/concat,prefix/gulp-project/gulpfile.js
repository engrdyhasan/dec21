// "use strict";
var gulp = require('gulp'),
	concat = require('gulp-concat'),
	prefix = require('gulp-autoprefixer'),
	// sass = require('sass');
	// sass = require('node-sass'),
	// sass = require('gulp-sass')(require('sass'));
	sass = require('gulp-sass');
	// dartSass = require("dart-sass");
// sass.compiler = dartSass;

    
// css task
gulp.task('css', function () {
	return gulp.src('PROJECT/css/main.scss')
		.pipe(sass())
		// .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(prefix('last 4 versions'))
		.pipe(concat('test.css'))
		.pipe(gulp.dest('dist/css'))
});

// js task
gulp.task('js', function() {
	return gulp.src('PROJECT/js/*.js')
		.pipe(concat('all.js'))
		.pipe(gulp.dest('dist/js'))
});
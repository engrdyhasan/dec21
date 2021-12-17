"use strict";
var gulp = require('gulp');
var concat = require('gulp-concat');
var prefix = require('gulp-autoprefixer');

// css task
gulp.task('css', function () {
	return gulp.src('PROJECT/*.css')
		.pipe(prefix('last 4 version'))
		// .pipe(prefix())
		.pipe(concat('main.css'))
		.pipe(gulp.dest('dist/standard'))
});

// js task
gulp.task('js', function() {
	return gulp.src('src/*.js')
		.pipe(concat('all.js'))
		.pipe(gulp.dest('dist/standard'))
});
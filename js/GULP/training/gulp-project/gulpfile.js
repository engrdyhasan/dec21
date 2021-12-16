var gulp = require('gulp');
// var plugin = require('gulp-name');

// FIRST TASK
gulp.task('rady', function () {
	// console.log('Gratz first task');
	// return gulp.src('PROJECT/index.html')
	// return gulp.src('PROJECT/*.html')
	// return gulp.src('PROJECT/*.*')
	return gulp.src(['PROJECT/header.html', 'PROJECT/main.js'])
	// .pipe(rdyMinify())
	// .pipe(rdyRename())
	.pipe(gulp.dest('dist/standard'))
});
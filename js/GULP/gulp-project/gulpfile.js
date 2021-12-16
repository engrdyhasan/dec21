var gulp = require('gulp');
var concat = require('gulp-concat');

// css task
gulp.task('css', function () {
	return gulp.src('PROJECT/*.css')
	//return gulp.src(['PROJECT/indx.html', 'PROJECT/main.js'])
	.pipe(concat('main.css'))
	// .pipe(rdyRename())
	.pipe(gulp.dest('dist/standard'))
});

// js task
gulp.task('js', function() {
  return gulp.src('src/*.js')
    // .pipe(sourcemaps.init())
    .pipe(concat('all.js'))
    // .pipe(sourcemaps.write())
    .pipe(gulp.dest('dist/standard'));
});
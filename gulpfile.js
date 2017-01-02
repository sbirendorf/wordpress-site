/**
 * ProspectNow
 * Marketing Site
 * author Joel Lopez
 * not licensed for public use
 */
var gulp 		= require('gulp');
var prefix		= require('gulp-autoprefixer');
var sass		= require('gulp-sass');
var uglify		= require('gulp-uglify');
var sourcemaps	= require('gulp-sourcemaps');
var livereload	= require('gulp-livereload');
var plumber 	= require('gulp-plumber');
var imagemin	= require('gulp-imagemin');
/**
 * Tasks
 */
gulp.task('styles', function() {
	return gulp.src('gulp/scss/**/*.scss')
		.pipe(plumber())
		.pipe(prefix('last 2 versions', 'ie >= 9', 'and_chr >= 2.3'))
		.pipe(sourcemaps.init())
		.pipe(sass({
			outputStyle: 'compressed',
		}).on('error', sass.logError))
		.pipe(sourcemaps.write('./maps'))
		.pipe(gulp.dest('page/_assets/css'))
		.pipe(livereload());
});

gulp.task('js', function() {
	return gulp.src('gulp/js/**/*.js')
		.pipe(plumber())
		.pipe(uglify())
		.pipe(gulp.dest('page/_assets/js'))
		.pipe(livereload());
});

gulp.task('img', function() {
	return gulp.src('gulp/img/**/*.{jpg,jpeg,gif,png}')
		.pipe(plumber())
		.pipe(imagemin())
		.pipe(gulp.dest('page/_assets/img'))
		.pipe(livereload())
});

function changed(file) {
	livereload.changed(file.path);
}

gulp.task('reload', function() {
	gulp.src('')
		.pipe(livereload());
});

gulp.task('watch', function() {
	livereload.listen();

	gulp.watch('gulp/scss/**/*.scss', ['styles'])
		.on('change', function(event) {
	      console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
	    });
	gulp.watch('gulp/js/**/*.js', ['js'])
		.on('change', function(event) {
		  console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
		});
	gulp.watch('gulp/img/**/*.{jpg,jpeg,gif,png}', ['img'])
		.on('change', function(event) {
		  console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
		});
	gulp.watch('page/**/*.{html,php}', ['reload']).on('change', changed)
		.on('change', function(event) {
		  console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
		});
});

gulp.task('default', ['styles', 'js', 'img', 'watch']);

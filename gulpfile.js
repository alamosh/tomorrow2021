// Require Gulp
const gulp 		= require('gulp');

// Gulp SASS processor
const sass 		= require('gulp-sass');

// Concatenation, autoprefixing, and minification of CSS
const autoprefixer = require('autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const postcss = require('gulp-postcss');
const cleanCSS 	= require('gulp-clean-css');
const rename 		= require('gulp-rename');

// Concatenation & minification of JS
const concat 		= require('gulp-concat');
const uglify 		= require('gulp-uglify');

// BrowserSync
const browserSync = require('browser-sync').create();

// Process, prefix, and minifiy sass to main.min.css
function style() {
	return gulp.src('css/sass/**/*.scss')
		.pipe(sourcemaps.init())
			.pipe(sass().on('error', sass.logError))
			.pipe(gulp.dest('css'))
			.pipe(postcss([ autoprefixer() ]))
			.pipe(cleanCSS())
			.pipe(rename('main.min.css'))
		.pipe(sourcemaps.write('../maps'))
		.pipe(gulp.dest('css'))
		.pipe(browserSync.stream());
}

// Minify main.js file
function minifyJS() {
	return gulp.src('js/main.js')
		.pipe(uglify())
		.pipe(rename('main.min.js'))
		.pipe(gulp.dest('js'))
		.pipe(browserSync.stream());
}

// Minify lib stylesheets
function scripts() {
	return gulp.src([
		'node_modules/jquery/dist/jquery.min.js',
		'node_modules/bootstrap/dist/js/bootstrap.min.js',
		'node_modules/@fortawesome/fontawesome-free/js/all.min.js',
		'node_modules/slick-carousel/slick/slick.min.js',
		'js/vendor/gsap/gsap.min.js',
		'js/vendor/gsap/ScrollTrigger.min.js',
		'node_modules/typewriter-effect/dist/core.js'
		])
		.pipe(concat('libs.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest('js'))
}

// Minify lib scripts
function stylesheets() {
	return gulp.src([
		'css/normalize.css',
		'node_modules/@fortawesome/fontawesome-free/css/all.min.css'
		])
		.pipe(concat('libs.min.css'))
		.pipe(cleanCSS())
		.pipe(gulp.dest('css'))
}

// Browsersync setup
function serve() {
	browserSync.init({
		proxy: 'localhost/main/tomorrow-digital',
		files: ['**/*.php', 'css/*.css', 'js/main.js']
	});
	gulp.watch('css/sass/**/*.scss', style);
	gulp.watch('js/main.js', minifyJS).on('change', browserSync.reload);
	gulp.watch('**/*.php').on('change', browserSync.reload);
}


const pre = gulp.series(scripts, stylesheets, style, minifyJS)

const dev = gulp.series(pre, serve);
exports.default = dev;
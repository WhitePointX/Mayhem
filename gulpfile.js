var gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync'),
    autoprefixer = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps'),
    notify = require('gulp-notify'),
    concat = require('gulp-concat'),
    plumber = require('gulp-plumber'),
    uglify = require('gulp-uglify'),

    neat = require('node-neat').includePaths,

    scssSrc = "sass/**/*.scss";

gulp.task('reload-html', function() {
  browserSync.reload();
});


 
//uglify javascript
gulp.task('uglify',function(){
  gulp.src('js/common/**/*.js')
  .pipe(plumber())
  .pipe(concat('scripts.min.js'))
.pipe(uglify())
.pipe(gulp.dest('js'));
});




// Compile SASS
gulp.task('sass', function() {
  return gulp.src(scssSrc)
    .pipe(plumber({
      errorHandler: function (error) {
        console.log(error.message);
        this.emit('end');
    }}))
    .pipe(sourcemaps.init())
    .pipe(sass({
      includePaths: ['styles'].concat(neat)
    }))
    .pipe(autoprefixer())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('css'))
    .pipe(browserSync.reload({
      stream: true
    }));
});

gulp.task('browser-sync', function() {
  browserSync.init(["html/**/*.html", "js/**/*.js", ], {
    proxy: 'http://wordpress.ia/zavrsni_rad'
  });
});

gulp.task('watch', function() {
  gulp.watch('js/*.js', ['uglify']);
  gulp.watch(scssSrc, ['sass']);
  gulp.watch("**/*.php", ['reload-html']);
});

gulp.task('default', ['uglify','sass', 'browser-sync', 'reload-html', 'watch']);

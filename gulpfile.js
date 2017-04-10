'use strict';
const gulp = require('gulp'),
 		sass = require('gulp-sass'),
 		autoprefixer = require('gulp-autoprefixer'),
		watch = require('gulp-watch');

var paths = {
  scss:['./scss/*.*']
};

gulp.task('scss', function () {
 return gulp.src('./scss/*.*')
   .pipe(sass().on('error', sass.logError))   	

	.pipe(autoprefixer({
      browsers: ['> 1%','not ie < 8','last 5 versions'],
      cascade: false
	}))
   .pipe(gulp.dest('./build/css'))
});




// gulp.task('build', gulp.parallel('jade','scss',function(done){
//     done();
// }));

// gulp.task('watch',function(){
//     // gulp.watch(paths.jade,gulp.series('jade'));
//     gulp.watch(paths.scss);
    
// });

// Autoprefixer Task


gulp.task('default', () =>
    gulp.src('scss/*.scss')
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('build/css/'))
);
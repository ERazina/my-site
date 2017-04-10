'use strict';
const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
var paths = {
  scss:['./scss/*.*']
};
gulp.task('scss', function () {
 return gulp.src('./scss/*.*')
   .pipe(sass().on('error', sass.logError))
   .pipe(gulp.dest('./build/css'));
});

// gulp.task('build', gulp.parallel('jade','scss',function(done){
//     done();
// }));

gulp.task('watch',function(){
    // gulp.watch(paths.jade,gulp.series('jade'));
    gulp.watch(paths.scss);
    
});
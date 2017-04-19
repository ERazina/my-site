'use strict';
const gulp = require('gulp'),
 		sass = require('gulp-sass'),
 		autoprefixer = require('gulp-autoprefixer'),
		watch = require('gulp-watch');

var paths = {
  scss:['./scss/*.*']
};

var path ={
  watch: {
    scss: 'scss/*.*'
  }
}

gulp.task('scss', function () {
 return gulp.src('./scss/*.*')
 	.pipe(sass().on('error', sass.logError))   	
	.pipe(autoprefixer({
      browsers: ['> 1%','not ie < 8','last 5 versions'],
      cascade: false
	}))
	.pipe(gulp.dest('./build/css'))
});

gulp.task('watch', ['scss'], function (){
  watch("./scss/*.*", ['scss'])
    });
  // .pipe(sass().on('error', sass.logError))
  // .pipe(autoprefixer({
  //     browsers: ['> 1%','not ie < 8','last 5 versions'],
  //     cascade: false
    //})
  // }))
  //.pipe(gulp.dest('./build/css'));



//gulp.task('watch',function (done) {
//    //gulp.watch(path.watch.pug, gulp.series('build:pug'));
//    gulp.watch(path.watch.scss);
//    //gulp.watch(path.watch.fonts, gulp.series('build:fonts'));
//    //gulp.watch(path.watch.js, gulp.series('build:js'));
//    //gulp.watch(path.watch.img, gulp.series('build:img'));
//    done();
// });


// gulp.task('build', gulp.parallel('jade','scss',function(done){
//     done();
// }));

// gulp.task('watch',function(){
//     // gulp.watch(paths.jade,gulp.series('jade'));
//     gulp.watch(paths.scss);
    
// });

// Autoprefixer Task


// gulp.task('default', () =>
//     gulp.src('scss/*.scss')
//         .pipe(autoprefixer({
//             browsers: ['last 2 versions'],
//             cascade: false
//         }))
//         .pipe(gulp.dest('build/css/'))
// );

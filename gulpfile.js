var gulp = require('gulp'), 
    sass = require('gulp-sass')
    concat = require('gulp-concat'),
    cssnano = require('gulp-cssnano'),
    rename = require('gulp-rename'),
    autoprefixer = require('gulp-autoprefixer');


gulp.task('sass', function(){ 
    return gulp.src(['src/sass/**/*.sass', 'src/sass/**/*.scss'])
        .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
        .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
        .pipe(gulp.dest('src/css')) 
});

gulp.task('mincss', ['sass'],function(){
    return gulp.src(['src/css/main.css', 'src/css/media.css'])
        .pipe(concat('styles.min.css'))
        .pipe(cssnano())
        .pipe(gulp.dest('src/css'));
        
});

gulp.task('watch', ['mincss'],function() {
    gulp.watch(['src/sass/**/*.sass', 'src/sass/**/*.scss'], ['sass']);
    gulp.watch('src/css/**/*.css', ['mincss']);
});

gulp.task('default', ['watch']);
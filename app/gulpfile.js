var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var notify = require("gulp-notify");
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;

// BROWSER SYNC
gulp.task('browser-sync', function () {
//    browserSync.init({
//        proxy: "http://127.0.0.1/horseworldchannel-adm"
//    });

    gulp.watch("./assets/sass/**/*.scss", ['sass']);
    gulp.watch("./assets/js/**/*.js", ['minificar-js']);

    gulp.watch("View/**/*.ctp").on('change', reload);
    gulp.watch("Config/*.php").on('change', reload);
    gulp.watch("Controller/**/*.php").on('change', reload);

    gulp.watch("./webroot/css/**/*.css").on('change', reload);
    gulp.watch("./webroot/js/**/*.css").on('change', reload);
});




// COMPILAR DE SASS PARA CSS
gulp.task('sass', function () {
    return gulp.src('./assets/sass/**/*.scss')
            .pipe(sass({outputStyle: 'compressed'}))
            .on('error', notify.onError({
                title: 'Erro ao compilar o css',
                message: '<%= error.message %>'
            }))
            .pipe(gulp.dest('./webroot/css'))
            .pipe(browserSync.stream());
});


// MINIFICAR JS
gulp.task('minificar-js', function () {
    return gulp.src('./assets/js/**/*.js')
            .pipe(uglify())
            .on('error', notify.onError({
                title: 'Script Error!',
                message: '<%= error.message %>'
            }))
            .pipe(gulp.dest('./webroot/js'));
});


// AQUI É O GULP WATCH
gulp.task('watch', function () {
    gulp.watch('./assets/sass/**/*.scss', ['sass']);
    gulp.watch('./assets/js/**/*.js', ['minificar-js']);

    gulp.watch("View/**/*.ctp").on('change', reload);
    gulp.watch("Config/*.php").on('change', reload);
    gulp.watch("Controller/**/*.php").on('change', reload);

    gulp.watch("./webroot/css/**/*.css").on('change', reload);
    gulp.watch("./webroot/js/**/*.css").on('change', reload);
});


gulp.task('default', ['minificar-js', 'sass', 'browser-sync', 'watch'], function () {});

const gulp = require('gulp');/* галп npm i -D gulp */
const sass = require('gulp-sass')(require('sass'));/*припроцессор sass/scss  npm install sass gulp-sass --save-dev */
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync').create();
const sourcemaps = require('gulp-sourcemaps');
const cleanCss = require('gulp-clean-css');
const concat = require('gulp-concat');
const imagemin = require('gulp-imagemin');
const newer = require('gulp-newer');
const uglify = require('gulp-uglify');
const babel = require('gulp-babel');


function styles() {
    return gulp.src('app/scss/style.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
        overrideBrowserslist: ['last 10 version'],/* префиксы для старых версий последние 10 версий браузеров */
        grid: true
    }))
    .pipe(cleanCss({compatibility: 'ie8'}))
    .pipe(concat('style.min.css'))
    .pipe(sourcemaps.write())
    .pipe(browserSync.stream())
    .pipe(gulp.dest('assets/css'))
}

function scripts() {
    return gulp.src('app/js/*.js')
    .pipe(sourcemaps.init())
    .pipe(babel({
        presets: ['@babel/env']/* для поддержки старых версий js этот пресет необходимо отдельно
        установить npm i -D @babel/preset-env */
    }))
    .pipe(concat('main.min.js'))
    .pipe(uglify())
    .pipe(sourcemaps.write())
    .pipe(browserSync.stream())
    .pipe(gulp.dest('assets/js/'))
}

function img() {
    return gulp.src('app/img/*')
    .pipe(newer('assets/img'))
    .pipe(imagemin(/* минификация */
    [
        imagemin.gifsicle({interlaced: true}),
        imagemin.mozjpeg({quality: 75, progressive: true}),
        imagemin.optipng({optimizationLevel: 5}),
        imagemin.svgo({
            plugins: [
                {removeViewBox: true},
                {cleanupIDs: false}
            ]
        })
    ]
))
    .pipe(browserSync.stream())
    .pipe(gulp.dest('assets/img'))
}

function watching() {
    browserSync.init({/* инициализация browserSync */
    server: {
        baseDir: "./"/* дириктория где находиться проект */
    }
    })

    gulp.watch(['index.html']).on('change', browserSync.reload);
    gulp.watch('app/scss/', styles);
    gulp.watch('app/js', scripts);
    gulp.watch('app/img', img);
}

const build = gulp.parallel(styles, scripts, img, watching);


exports.watching = watching;
exports.styles = styles;
exports.scripts = scripts;
exports.img = img;
exports.default = build;
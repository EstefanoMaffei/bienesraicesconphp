const { src, dest, watch, series, parallel } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const plumber = require('gulp-plumber');
const autoprefixer = require('autoprefixer');
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const concat = require('gulp-concat');
const terser = require('gulp-terser-js');
const sourcemaps = require('gulp-sourcemaps');
const rename = require('gulp-rename');
const imagemin = require('gulp-imagemin'); // Minificar imagenes 
const notify = require('gulp-notify');
const cache = require('gulp-cache');
const clean = require('gulp-clean');
const webp = require('gulp-webp');


const paths = {
     scss: 'src/scss/**/*.scss',
     js: 'src/js/**/*.js',
     imagenes: 'src/img/**/*'
}

function css(done) {
     src('src/scss/**/*.scss')
     .pipe(plumber())
     .pipe(sass())
     .pipe(postcss([autoprefixer(), cssnano()]))
     .pipe(sourcemaps.write('.'))
     .pipe(dest('build/css'));
     done()
}


function javascript() {
     return src(paths.js)
       .pipe(sourcemaps.init())
       .pipe(concat('bundle.js'))
       .pipe(terser())
       .pipe(sourcemaps.write('.'))
       .pipe(rename({ suffix: '.min' }))
       .pipe(dest('build/js'))
 }

function imagenes() {
     return src(paths.imagenes)
        .pipe(cache(imagemin({ optimizationLevel: 3 })))
        .pipe(dest('build/img'))
        .pipe(notify({ message: 'Imagen Completada' }));

}

function versionWebp() {
     return src(paths.imagenes)
         .pipe(webp())
         .pipe(dest('build/img'))
         .pipe(notify({ message: 'Imagen Completada' }));
 }

function dev(done) {
     watch(paths.scss, css);
     watch(paths.imagenes, imagenes);
     watch(paths.js, javascript);
     watch(paths.imagenes, versionWebp);
     done()
}

exports.css = css;
exports.imagenes = imagenes;
exports.dev = dev; 
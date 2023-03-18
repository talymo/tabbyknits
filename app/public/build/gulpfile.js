// Notes
// Upgrade node to latest
// npm install -g node
// Upgrade global gulp to latest
// npm install -g gulp
// Upgrade local project gulp to latest
// npm install gulp --save-dev

const {watch, series, parallel, src, dest } = require('gulp');

const sass =      require('gulp-sass')(require('sass')),
    connect =   require('gulp-connect'),
    autoprefixer = require('gulp-autoprefixer'),
    uglify =    require('gulp-uglify'),
    babel =     require('gulp-babel'),
    sourcemaps = require('gulp-sourcemaps');

const themeFolder = 'tabbyknits';

function styles() {
  return src('styles/**/*.scss')
      .pipe(sourcemaps.init())
      .pipe(sass().on('error', sass.logError))
      .pipe(autoprefixer())
      .pipe(sourcemaps.write())
      .pipe(dest('../wp-content/themes/' + themeFolder))
      .pipe(connect.reload());
}

function scripts() {
  return src('scripts/**/*.js')
      .pipe(sourcemaps.init())
      .pipe(babel())
      .pipe(uglify())
      .pipe(sourcemaps.write())
      .pipe(dest('../wp-content/themes/' + themeFolder))
      .pipe(connect.reload());
}

function server() {
  return connect.server({
    port: 7778,
    livereload: true,
    root: '../'
  })
}

function watchSCSS() {
  return watch('styles/**/*.scss', styles);
}

function watchScripts() {
  return watch('scripts/**/*.js', scripts);
}

exports.build = series(styles, scripts);

exports.run = series(
    parallel(
        watchSCSS,
        watchScripts,
        server
    )
)
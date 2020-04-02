("use sctrict");

const { src, watch, dest, series } = require("gulp");
const sass = require("gulp-sass");
const browserSync = require("browser-sync").create();
const gulpConcat = require("gulp-concat");

function compileStyles() {
  return src("app/scss/index.scss")
    .pipe(sass())
    .pipe(gulpConcat("main.css"))
    .pipe(dest("dist/"));
}

function compileJs() {
  return src(["app/js/main.js"])
    .pipe(gulpConcat("main.js"))
    .pipe(dest("dist/"));
}

function startBrowserSync() {
  browserSync.init({
    server: {
      baseDir: "./"
    },
    notify: false
  });
}

function watcher() {
  startBrowserSync();

  watch("app/scss/**/*.scss").on(
    "change",
    series(compileStyles, browserSync.reload)
  );
  watch("app/js/**/*.js").on("change", series(compileJs, browserSync.reload));
  watch("index.php").on("change", browserSync.reload);
}

exports.run = series(compileStyles, compileJs, watcher);

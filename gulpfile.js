const { src, dest, watch, parallel, series } = require("gulp");
const scss = require("gulp-sass")(require("sass"));
const concat = require("gulp-concat");
const uglify = require("gulp-uglify-es").default;
const autoprefixer = require("gulp-autoprefixer");
const imagemin = require("gulp-imagemin");
const newer = require("gulp-newer");

function images() {
  return src("src/images/*.*")
    .pipe(newer("assets/images"))
    .pipe(imagemin())
    .pipe(dest("assets/images"));
}

function stylesTemplates() {
  return src("src/styles/template-styles/*.scss")
    .pipe(autoprefixer({ overrideBrowserslist: ["last 10 versions"] }))
    .pipe(scss({ outputStyle: "compressed" }))
    .pipe(dest("assets/styles/template-styles"));
}

function stylesTemplatesParts() {
  return src("src/styles/template-parts-styles/*.scss")
    .pipe(autoprefixer({ overrideBrowserslist: ["last 10 versions"] }))
    .pipe(scss({ outputStyle: "compressed" }))
    .pipe(dest("assets/styles/template-parts-styles"));
}

function stylesSinglePages() {
  return src("src/styles/single-pages-styles/*.scss")
    .pipe(autoprefixer({ overrideBrowserslist: ["last 10 versions"] }))
    .pipe(scss({ outputStyle: "compressed" }))
    .pipe(dest("assets/styles/single-pages-styles"));
}

function styles() {
  return src("src/styles/main.scss")
    .pipe(autoprefixer({ overrideBrowserslist: ["last 10 versions"] }))
    .pipe(scss({ outputStyle: "compressed" }))
    .pipe(dest("assets/styles"));
}

function scripts() {
  return src(["src/scripts/*.js"])
    .pipe(concat("main.js"))
    .pipe(uglify())
    .pipe(dest("assets/scripts"));
}

function scriptsTemplates() {
  return src(["src/scripts/template-scripts/*.js"])
    .pipe(uglify())
    .pipe(dest("assets/scripts/template-scripts"));
}

function scriptsTemplatesParts() {
  return src(["src/scripts/template-parts-scripts/*.js"])
    .pipe(uglify())
    .pipe(dest("assets/scripts/template-parts-scripts"));
}

function scriptsSinglePages() {
  return src(["src/scripts/single-pages-scripts/*.js"])
    .pipe(uglify())
    .pipe(dest("assets/scripts/single-pages-scripts"));
}

function watching() {
  watch("src/styles/*scss", styles);
  watch("src/styles/template-styles/*scss", stylesTemplates);
  watch("src/styles/template-parts-styles/*scss", stylesTemplatesParts);
  watch("src/styles/single-pages-styles/*scss", stylesSinglePages);
  watch(["src/images"], images);
  watch("src/scripts/*js", scripts);
  watch("src/scripts/template-scripts/*js", scriptsTemplates);
  watch("src/scripts/template-parts-scripts/*js", scriptsTemplatesParts);
  watch("src/scripts/single-pages-scripts/*js", scriptsSinglePages);
}

exports.styles = styles;
exports.stylesTemplates = stylesTemplates;
exports.stylesTemplatesParts = stylesTemplatesParts;
exports.stylesSinglePages = stylesSinglePages;
exports.images = images;
exports.scripts = scripts;
exports.scriptsTemplates = scriptsTemplates;
exports.scriptsTemplatesParts = scriptsTemplatesParts;
exports.scriptsSinglePages = scriptsSinglePages;
exports.watching = watching;

exports.default = parallel(
  styles,
  stylesTemplates,
  stylesTemplatesParts,
  stylesSinglePages,
  images,
  scripts,
  scriptsTemplates,
  scriptsTemplatesParts,
  scriptsSinglePages,
  watching
);

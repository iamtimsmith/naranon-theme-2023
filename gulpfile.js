const gulp = require("gulp");
const postcss = require("gulp-postcss");
const cleanCss = require("gulp-clean-css");
const rename = require("gulp-rename");
const presetEnv = require("postcss-preset-env");
const atImport = require("postcss-import");
const customMedia = require("postcss-custom-media");

gulp.task("styles", function () {
	var plugins = [atImport(), customMedia(), presetEnv()];

	return gulp
		.src("style.css")
		.pipe(postcss(plugins))
		.pipe(cleanCss())
		.pipe(rename({ suffix: ".min" }))
		.pipe(gulp.dest("./assets"));
});

gulp.task("watch:styles", function () {
	gulp.watch(["style.css", "styles/**/*.css"], gulp.series("styles"));
});

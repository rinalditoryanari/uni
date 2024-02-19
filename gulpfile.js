var autoprefixer,
    browserSync,
    concat,
    config,
    gulp,
    imagemin,
    minify,
    path,
    plumber,
    rename,
    sass,
    streamqueue,
    uglify,
    changed,
    reload;

gulp = require("gulp");
sass = require("gulp-sass");
csso = require("gulp-csso");
plumber = require("gulp-plumber");
rename = require("gulp-rename");
autoprefixer = require("gulp-autoprefixer");
concat = require("gulp-concat");
uglify = require("gulp-uglify");
imagemin = require("gulp-imagemin");
minify = require("gulp-clean-css");
streamqueue = require("streamqueue");
browserSync = require("browser-sync").create();
changed = require("gulp-changed");
reload = browserSync.reload;

config = {
    nodeDir: "./node_modules/",
};

var path = {
    styles: [
        "public/styles/theme.css",
        "public/styles/style.css",
        "public/styles/media.css",
    ],
    corestyle: [
        "public/plugins/bootstrap/bootstrap.min.css",
        "public/plugins/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.css",
        "public/plugins/bootstrap-wysihtml5-master/bootstrap-wysihtml5.css",
        "public/plugins/air-datepicker/dist/css/datepicker.css",
        "public/plugins/timedropper/timedropper.css",
        "public/plugins/highlight.js/src/styles/solarized-dark.css",
        "public/plugins/select2/dist/css/select2.css",
        "public/plugins/bootstrap-select/bootstrap-select.min.css",
    ],
    icon_styles: [
        "public/fonts/bootstrap/bootstrap-icons.css",
        "public/fonts/dropways/dropways.css",
        "public/fonts/font-awesome/css/font-awesome.css",
        "public/fonts/foundation-icons/foundation-icons.css",
        "public/fonts/ionicons-master/css/ionicons.css",
        "public/fonts/themify-icons/themify-icons.css",
    ],
    scripts: ["public/scripts/setting.js"],
    core: [
        "public/scripts/jquery.min.js",
        "public/plugins/bootstrap/popper.min.js",
        "public/plugins/bootstrap/bootstrap.min.js",
        "public/scripts/moment.js",
        "public/plugins/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.js",
        "public/plugins/wysihtml5-master/dist/wysihtml5-0.3.0.js",
        "public/plugins/bootstrap-wysihtml5-master/bootstrap-wysihtml5.js",
        "public/plugins/air-datepicker/dist/js/datepicker.js",
        "public/plugins/air-datepicker/dist/js/i18n/datepicker.en.js",
        "public/plugins/timedropper/timedropper.js",
        "public/plugins/highlight.js/src/highlight.pack.js",
        "public/plugins/select2/dist/js/select2.full.js",
        "public/plugins/bootstrap-select/bootstrap-select.min.js",
        "public/scripts/clipboard.min.js",
    ],
    fonts: [
        "public/fonts/bootstrap/fonts/*.*",
        "public/fonts/dropways/*.*",
        "public/fonts/font-awesome/fonts/*.*",
        "public/fonts/foundation-icons/*.*",
        "public/fonts/ionicons-master/fonts/*.*",
        "public/fonts/themify-icons/fonts/*.*",
        "public/fonts/**/*.*",
    ],
    images: "public/images/**/*.*",
    php: ["*.html"],
};

gulp.task("styles", function () {
    var stream;
    stream = streamqueue({
        objectMode: true,
    });
    stream.queue(gulp.src(path.styles));
    return stream
        .done()
        .pipe(plumber())
        .pipe(sass())
        .pipe(csso())
        .pipe(autoprefixer({browsers: ["last 2 versions"], cascade: false}))
        .pipe(concat("style.css"))
        .pipe(gulp.dest("vendors/styles/"))
        .pipe(minify({keepSpecialComments: 0}))
        .pipe(rename({suffix: ".min"}))
        .pipe(plumber.stop())
        .pipe(gulp.dest("vendors/styles/"))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task("corestyle", function () {
    var stream;
    stream = streamqueue({
        objectMode: true,
    });
    stream.queue(gulp.src(path.corestyle));
    return stream
        .done()
        .pipe(plumber())
        .pipe(sass())
        .pipe(csso())
        .pipe(autoprefixer({browsers: ["last 2 versions"], cascade: false}))
        .pipe(concat("core.css"))
        .pipe(gulp.dest("vendors/styles/"))
        .pipe(minify({keepSpecialComments: 0}))
        .pipe(rename({suffix: ".min"}))
        .pipe(plumber.stop())
        .pipe(gulp.dest("vendors/styles/"))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task("icon_styles", function () {
    var stream;
    stream = streamqueue({
        objectMode: true,
    });
    stream.queue(gulp.src(path.icon_styles));
    return stream
        .done()
        .pipe(plumber())
        .pipe(sass())
        .pipe(csso())
        .pipe(autoprefixer({browsers: ["last 2 versions"], cascade: false}))
        .pipe(concat("icon-font.css"))
        .pipe(gulp.dest("vendors/styles/"))
        .pipe(minify({keepSpecialComments: 0}))
        .pipe(rename({suffix: ".min"}))
        .pipe(plumber.stop())
        .pipe(gulp.dest("vendors/styles/"))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task("scripts", function () {
    var stream;
    stream = streamqueue({
        objectMode: true,
    });
    stream.queue(gulp.src(path.scripts));
    return stream
        .done()
        .pipe(plumber())
        .pipe(concat("script.js"))
        .pipe(gulp.dest("vendors/scripts/"))
        .pipe(rename({suffix: ".min"}))
        .pipe(uglify())
        .pipe(plumber.stop())
        .pipe(gulp.dest("vendors/scripts/"))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task("core", function () {
    var stream;
    stream = streamqueue({
        objectMode: true,
    });
    stream.queue(gulp.src(path.core));
    return stream
        .done()
        .pipe(plumber())
        .pipe(concat("core.js"))
        .pipe(gulp.dest("vendors/scripts/"))
        .pipe(rename({suffix: ".min"}))
        .pipe(uglify())
        .pipe(plumber.stop())
        .pipe(gulp.dest("vendors/scripts/"))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task("php", function () {
    var stream;
    stream = streamqueue({
        objectMode: true,
    });
    stream.queue(gulp.src(path.php));
    return stream.done().pipe(browserSync.reload({stream: true}));
});

gulp.task("fonts", function () {
    var stream;
    stream = streamqueue({
        objectMode: true,
    });
    stream.queue(gulp.src(path.fonts));
    return stream.done().pipe(gulp.dest("vendors/fonts/"));
});

gulp.task("images", function () {
    var stream;
    stream = streamqueue({
        objectMode: true,
    });
    stream.queue(gulp.src(path.images));
    return stream
        .done()
        .pipe(changed("vendors/images/"))
        .pipe(
            imagemin({
                optimizationLevel: 3,
                progressive: true,
                interlaced: true,
                svgoPlugins: [{removeViewBox: false}],
            })
        )
        .pipe(gulp.dest("vendors/images/"));
});

gulp.task("connect-sync", function (done) {
    browserSync.reload();
    done();
    browserSync.init({
        proxy: "localhost/deskapp", // Change this value to match your local URL.
        socket: {
            domain: "localhost:3000",
        },
    });
    gulp.watch("*.html").on("change", reload);
    gulp.watch("public/styles/**/*.css").on("change", reload);
    gulp.watch("public/plugins/**/*.css").on("change", reload);
});

gulp.task("watch", function () {
    gulp.watch("public/styles/**/*.*", gulp.series("styles"));
    gulp.watch("public/styles/**/*.*", gulp.series("corestyle"));
    gulp.watch("public/fonts/**/*", gulp.series("fonts"));
    gulp.watch("public/scripts/**/*.js", gulp.series("scripts"));
    gulp.watch("public/core/**/*.js", gulp.series("core"));
});

gulp.task(
    "default",
    gulp.series(
        gulp.parallel(
            ["styles"],
            "corestyle",
            "fonts",
            "scripts",
            "core",
            "icon_styles",
            ["connect-sync"]
        ),
        function () {
            gulp.watch("public/styles/**/*.css", gulp.series("styles"));
            gulp.watch("public/fonts/**/*", gulp.series("fonts"));
            gulp.watch("public/styles/**/*.*", gulp.series("corestyle"));
            gulp.watch("public/scripts/**/*.js", gulp.series("scripts"));
            gulp.watch("public/scripts/**/*.js", gulp.series("core"));
            gulp.watch("public/fonts/**/*.*", gulp.series("icon_styles"));
        }
    )
);

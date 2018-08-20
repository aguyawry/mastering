//
// elson mastering project gulp file

"use strict";

var gulp        = require('gulp');
var cleanHTML   = require('gulp-htmlclean');
var del         = require('del');
var foreach     = require('gulp-foreach');
var imagemin    = require('gulp-imagemin');
var jsonmin     = require('gulp-jsonminify');
var less        = require('gulp-less');
var minifyCSS   = require('gulp-minify-css');
var rename      = require('gulp-rename');
var strip_debug = require('gulp-strip-debug');
var uglify      = require('gulp-uglify');
var usemin      = require('gulp-usemin');
var notifier    = require('node-notifier');
var runSeq      = require('run-sequence');


// default
//  Set up a LESS file watch and compile. Handy during development.
gulp.task('default', ['watch-less']);



// watch-less
//  + Watch all LESS files and compile when changed.
gulp.task('watch-less', function() {
    gulp.watch('dev/less/*.less', ['build-less']);
});



// build-less
//  + The actual LESS compile to CSS.
gulp.task('build-less', function() {
    return gulp.src('dev/less/elson_mastering.less')
    .pipe( less() )
    .pipe( rename('elson_mastering.css') )
    .pipe( gulp.dest('dev/css') )
    .on('end', function() {
        notifier.notify({
            'title': 'elson mastering',
            'message': 'LESS compile complete!'
        });
    });
});



// build
//  + Full production build task in a specific sequence.
gulp.task('build', function() {
    runSeq( 'build-clean',                                      // remove all files
            'build-less',                                       // make sure LESS is compiled first
            [
                'build-html',
                'build-images',
                'build-json',
                'build-move'
            ],
            function() {                                        // notification when done
                notifier.notify({
                    'title': 'elson mastering',
                    'message': 'Production build complete!'
                });
            }
        );
});



// build-clean
//  + removes all files in a build to froce a fresh set
gulp.task('build-clean', function () {
    del( 'build/**' );
});



// build-html
//  + Assumes LESS has already been compiled.
//  + General optimization of CSS, JS and HTML files.
//  + foreach usage is to overcome usemin multiple file bug: https://github.com/zont/gulp-usemin/issues/91
gulp.task('build-html', function() {
    return gulp.src('dev/*.php')
        .pipe(foreach(function (stream, file) {
            return stream
                .pipe( usemin({
                    css:                    [ minifyCSS() ],
                    html:                   [ cleanHTML() ],
                    js_top:                 [ strip_debug(), uglify() ],
                    js_bottom:              [ strip_debug(), uglify() ]
                }))
                .pipe( gulp.dest('build') );
        }))
});



// build-images
//  + Image optimization / minification.
gulp.task('build-images', function() {
    return gulp.src('dev/img/**/*')
        .pipe( imagemin() )
        .pipe( gulp.dest('build/img') );
});


// build-json
//  + Minify JSON files
gulp.task('build-json', function() {
    return gulp.src('dev/js/*.json')
        .pipe( jsonmin() )
        .pipe( gulp.dest('build/js') );
});


// build-move
//  + Move any other dev files to the production build directory.
gulp.task('build-move', function() {
    var filesToMove = [
        'dev/*.xml',
        'dev/*.ico',
        'dev/*.txt',
        'dev/.htaccess',
        'dev/*.json',
        'dev/Procfile'
    ];

    // the base option sets the relative root for the set of files,
    // preserving the folder structure
    return gulp.src(filesToMove, { base: './dev' })
        .pipe( gulp.dest('./build') );
});
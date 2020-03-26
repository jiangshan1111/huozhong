var gulp = require('gulp');
// var cleanCSS = require('gulp-clean-css');
var cssUglify = require('gulp-minify-css');
// 压缩 css 文件
// 在命令行使用 gulp csscompress 启动此任务
gulp.task('css',function(){
    gulp.src('guanwang/css/*.css')
        .pipe(cssUglify())
        .pipe(gulp.dest('build'))
})
// gulp.task('html',function(){
//     var options = {
//         8
//     };
//     gulp.src('index.html')
//         .pipe(gulpRemoveHtml())//清除特定标签
//         .pipe(removeEmptyLines({removeComments: true}))//清除空白行
//         .pipe(htmlmin(options))
//         .pipe(gulp.dest('build/'));
// });
gulp.task('default',['css'])
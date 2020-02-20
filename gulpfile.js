var gulp = require('gulp');
var minifycss = require('gulp-clean-css');
var uglify = require('gulp-uglify');


// Esta primeira função pegará todos os arquivos do tipo CSS
// dentro da pasta CSS, dentro da pasta app e colocará a versão
// minificada dentro da pasta CSS, dentro de build
gulp.task('minify-css', function() {
    return gulp.src('./css/*.css')
      .pipe(minifycss({
        compatibility: 'ie8'
    }))
    .pipe(gulp.dest('./css/minify'));
});

// Esta segunda função pegará todos os arquivos do tipo
// Javascript, removerá todos os comentários, minificará os arquivos
// e enviará os arquivos minificados para a pasta JS, dentro de build
gulp.task('minify-js', function() {
    return gulp.src('./js/vendor/*.js')
      .pipe(uglify())
      .pipe(gulp.dest('./js/vendor/minify'));
});

// Com esta função, ele irá executar uma sequencia de comandos
// executando cada função passada como parâmetro
gulp.task('build', function(cb) {
    runSequence('minify-css', 'minify-js', cb)
});
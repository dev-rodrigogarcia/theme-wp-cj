const gulp = require('gulp')
const browserSync = require('browser-sync')
const plumber = require('gulp-plumber')
const sass = require('gulp-sass')
const sourcemaps = require('gulp-sourcemaps')
const autoprefixer = require('gulp-autoprefixer')
const cleanCSS = require('gulp-clean-css')
const browserify = require('browserify')
const babelify = require('babelify')
const source = require('vinyl-source-stream')
const buffer = require('vinyl-buffer')
const jsmin = require('gulp-jsmin')
const imagemin = require('gulp-imagemin')
const wpPot = require('gulp-wp-pot')
const sort = require('gulp-sort')


const reload = browserSync.reload,
reloadFiles =[
   './script.js',
   './style.css',
   './**/*.php'
]

gulp.task('css',()=>{
   gulp.src('./css/style.scss') 
   .pipe(sourcemaps.init({ loadMaps: true }))
   .pipe(plumber()) 
   .pipe(sass())
   // .pipe(autoprefixer({ browsers: ['last 2 versions'] }))
   .pipe(cleanCSS())
   .pipe(sourcemaps.write('./css/'))
   .pipe(gulp.dest('./'))
   .pipe(reload({ stream: true })) 

})

gulp.task('js', () => {
    browserify('./js/index.js')
   .transform(babelify)
   .bundle()
   .on('error', err => console.log(err.message))
   .pipe(source('script.js'))
   .pipe(buffer())
   .pipe(sourcemaps.init({ loadMaps: true }))
   .pipe(sourcemaps.write('./js/'))
   .pipe(jsmin())
   .pipe(gulp.dest('./'))
   .pipe(reload({ stream: true }))
})

gulp.task('img', () => {
   gulp.src('./img/raw/**/*.{png,jpg,jpeg,gif,svg}')
   .pipe(imagemin(imageminOptions)) 
   .pipe(gulp.dest('./img')) 
})  

gulp.task('watch', () => {  
   gulp.watch('./css/**/*.+(scss|css)', ['css']) 
   gulp.watch('./js/**/*.js', ['js'])
})

gulp.task('default', gulp.series('css', 'watch'));

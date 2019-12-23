const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')

   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/courses.scss', 'public/css/courses.css')
   .js('resources/js/photo.js', 'public/js/photo')
   .sass('resources/sass/photo.scss', 'public/css/photo.css');

   mix.combine([
      'public/style/css/social.css',
      'public/style/css/jquery.fancybox.min.css',
      'public/style/fonts/ionicons/css/ionicons.min.css',
      'public/style/fonts/fontawesome/css/font-awesome.min.css',
      'public/style/fonts/flaticon/font/flaticon.css',    
      'public/style/css/style.css',
  ], 'public/css/mainApp.css');


   mix.combine([
      'public/style/js/jquery-3.2.1.min.js',
      'public/style/js/jquery-migrate-3.0.1.min.js',
      'public/style/js/popper.min.js',
      'public/style/js/bootstrap.min.js',
      'public/style/js/owl.carousel.min.js',    
      'public/style/js/jquery.waypoints.min.js',
      'public/style/js/jquery.fancybox.min.js',
      'public/style/js/jquery.stellar.min.js',
      'public/style/js/aos.js',
      'public/style/js/main.js',
  ], 'public/js/mainApp.js');
  mix.combine([
   'public/bower_components/jquery/dist/jquery.min.js',
   'public/bower_components/bootstrap/dist/js/bootstrap.min.js',
   'public/bower_components/jquery-ui/jquery-ui.min.js',
   'public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js',
   'public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
   'public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
   'public/bower_components/jquery-knob/dist/jquery.knob.min.js',    
   'public/bower_components/moment/min/moment.min.js',
   'public/bower_components/bootstrap-daterangepicker/daterangepicker.js',
   'public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
   'public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
   'public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js',
   'public/bower_components/fastclick/lib/fastclick.js',
   'public/dist/js/adminlte.min.js',

], 'public/js/backend.js');
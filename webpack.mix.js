const { mix } = require('laravel-mix');

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

const fs = require('fs-extra');
const imagemin = require('imagemin');
const imageminMozjpeg = require('imagemin-mozjpeg');
const imageminPngquant = require('imagemin-pngquant');
const imageminJpegtran = require('imagemin-jpegtran');
const imageminGifSicle = require('imagemin-gifsicle');


var imageminPlugins = {
	plugins : [
		imageminMozjpeg(),
		imageminPngquant(),
		imageminGifSicle()
	]
};

var path = {
	    src: {},
	    build: {},
	    watch: {},
	    clean: ['build/assets', 'build/version_angular', 'build/version_html'],
	    templates: {
	        cleanui: {}
	    },
	    node_modules : 'node_modules/',
	    javascript : 'resources/assets/js'
	};

mix.options.processCssUrls = false;
mix.options({
  processCssUrls: false
});

//!= kill all!
fs.remove('public');

//then repopulate
//~= public folder
mix.copy('resources/public', 'public', false);

//~= general assets
mix.copy('resources/assets/fonts', 'public/assets/fonts', false);   
mix.copy('resources/assets/images/', 'public/assets/images', false);
mix.copy('resources/assets/css/', 'public/assets/css', false);
mix.copy('resources/templates', 'public/templates', false);

//~= application js
// 1== admin
mix.combine(['resources/assets/js/admin/**/*.js'], 'public/assets/js/admin/app.js');
// 2== user
mix.combine(['resources/assets/js/user/**/*.js'], 'public/assets/js/app.js');
//~= application js == end ==

//~= application css
//1== admin
mix.sass('resources/assets/sass/admin/app.scss', 'public/assets/css/admin/app.css');
//2== user
mix.sass('resources/assets/sass/user/app.scss', 'public/assets/css/app.css');	
//~= application css == end ==

// ~= general vendor css
// 1== admin
mix.combine([
	'sweetalert2/dist/sweetalert2.min.css',
	'ladda/dist/ladda-themeless.min.css'
].map(function(p){ 
	return path.node_modules + p; 
}), 'public/assets/css/admin/vendor.css');	 

//~= coco template vendor css
//2== user
// mix.combine([
//    'jquery-ui/themes/ui-lightness/jquery-ui.min.css',
//    'sweetalert2/dist/sweetalert2.min.css',
//    'bootstrap/dist/css/bootstrap.min.css',
//    'animate.css/animate.min.css',
//    'ladda/dist/ladda-themeless.min.css',
//    'daterangepicker/daterangepicker.css',
//    'magnific-popup/dist/magnific-popup.css', 
//    'ios7-switch/ios7-switch.css', 
//    'pace/pace.css',
//    'icheck/skins/all.css',
//    // '/css/style.css', 
//    // '/css/style-responsive.css'
// ].map(function(p){
// 	return path.node_modules + p;

// }), 'public/assets/css/vendor.css');

//~= cleanui general vendor js
//1== admin
mix.combine([
	'jquery/dist/jquery.min.js',
	'moment/min/moment.min.js',
	'angular/angular.min.js',
	'angular-moment/angular-moment.min.js',
	'angular-animate/angular-animate.min.js',
	'angular-sanitize/angular-sanitize.min.js',
	'angular-ui-router/release/angular-ui-router.min.js',
	'angular-cookies/angular-cookies.min.js',
	'angular-route/angular-route.min.js',
	'sweetalert2/dist/sweetalert2.min.js',
	'spin.js/spin.min.js',
	'ladda/dist/ladda.min.js',
].map(function(p){ 	
	return path.node_modules + p; 
}), 'public/assets/js/admin/vendor.js');

// //~= coco templates vendor js
// //2== user
// mix.combine([
// 	'angular/angular.min.js',
// 	'jquery/dist/jquery.min.js', 
// 	'bootstrap/dist/js/bootstrap.min.js', 

// 	'jquery-ui/jquery-ui.js', 
// 	'moment/min/moment.min.js',
	
// 	'angular-moment/angular-moment.min.js',
// 	'angular-animate/angular-animate.min.js',
// 	'angular-sanitize/angular-sanitize.min.js',
// 	'angular-ui-router/release/angular-ui-router.min.js',
// 	'angular-cookies/angular-cookies.min.js',
// 	'angular-route/angular-route.min.js',

// 	'sweetalert2/dist/sweetalert2.min.js',
// 	'daterangepicker/daterangepicker.js', 
// 	'jquery-ui-touch-punch/jquery.ui.touch-punch.min.js', 
// 	'jquery-detectmobile/detect.js', //template provided, copied to node_modules
//     'ios7-switch/ios7.switch.js', //template provided, copied to node_modules
//     'fastclick/lib/fastclick.js',
//     'block-ui/jquery.blockUI.js', 
//     'bootstrap-bootbox/bootbox.min.js', //template provided, copied to node_modules
//     'jquery-slimscroll/jquery.slimscroll.min.js', 
//     'jquery-sparkline/jquery.sparkline.min.js', 
//     'sortable/sortable.min.js',  //template provided, copied to node_modules
//     'bootstrap-select/dist/js/bootstrap-select.min.js',
//     'bootstrap-select2/select2.min.js', //template provided, copied to node_modules
//    	'magnify-popup/dist/jquery.magnific-popup.min.js',
//    	'pace/pace.min.js', //template provided, copied to node_modules
//    	'icheck/icheck.min.js', 
// 	'spin.js/spin.min.js',
// 	'ladda/dist/ladda.min.js',
//    	'bootstrap-fileinput/js/fileinput.min.js', 
	
// ].map(function(p){ 
// 	return path.node_modules + p; 

// }), 'public/assets/js/vendor.js');	 
// End of coco templates vendor for user

mix.then(function () {
	fs.remove('public/images');
});

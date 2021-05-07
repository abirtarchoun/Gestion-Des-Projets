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
    .sass('resources/sass/app.scss', 'public/css/admin.css')
    .styles(
        [
        'resources/css/pages/extra_pages.css',
        'resources/css/pages/formlayout.css',
        'resources/css/pages/inbox.min.css',
        'resources/css/pages/typography.css',
        'resources/css/theme/light/style.css',
        'resources/css/theme/light/theme_style.css',
        'resources/css/theme/light/theme-color.css',
        'resources/css/admin.css',
        'resources/css/material_style.css',
        'resources/css/plugins.min.css',
        'resources/css/responsive.css',
        ],'public/css/admin.css'
        )
    .scripts(
        [
    'resources/js/pages/calendar/calendar.min.js',
    'resources/js/pages/chart/amchart/amchart-data.js',
    'resources/js/pages/chart/apex/apexcharts.data.js',
    'resources/js/pages/chart/chartjs/chartjs-data.js',
    'resources/js/pages/chart/chartjs/home-data.js',
    'resources/js/pages/chart/chartjs/home-data2.js',
    'resources/js/pages/chart/chartjs/home-data3.js',
    'resources/js/pages/chart/echart/echart-data.js',
    'resources/js/pages/chart/morris/morris_chart_data.js',
    'resources/js/pages/date-time/date-time.init.js',
    'resources/js/pages/material-loading/material-loading.js',
    'resources/js/pages/owl-carousel/owl_data.js',
    'resources/js/pages/select2/select2-init.js',
    'resources/js/pages/summernote/summernote-data.js',
    'resources/js/pages/sweet-alert/sweet-alert-data.js',
    'resources/js/pages/table/table_data.js',
    'resources/js/pages/treeview/treeview-data.js',
    'resources/js/pages/validation/form-validation.js',
    'resources/js/app.js',
    'resources/js/bootstrap.js',
    'resources/js/layout.js',
    'resources/js/theme-color.js',
],'public/js/admin.js');

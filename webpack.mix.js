const mix = require('laravel-mix');

mix.webpackConfig({
    resolve: {
        alias: {
            /**
             * An alias for the JS imports.
             *
             * Example of usage:
             * require('@/components/AutocompleteLocation');
             */
            '@': path.resolve(__dirname, './resources/js/rebs'),

            /**
             * An alias for the SASS imports.
             *
             * Example of usage:
             * @import "~sass/_vars";
             */
            'sass': path.resolve(__dirname, './resources/sass/rebs'),
        }
    }
});

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

/** admin Mix */
mix.js(['resources/js/admin/admin.js'], 'public/js')
   .sass('resources/sass/admin/admin.scss', 'public/css');

if (mix.inProduction()) {
    mix.version();
}

/** rebs Mix **/
mix.js(['resources/js/rebs/app.js'], 'public/assets/rebs/js')
   .sass('resources/sass/rebs/app.scss', 'public/assets/rebs/css');

/** Docs Mix */
mix.sass('resources/sass/docs/app.scss', 'public/assets/docs/css')
   .scripts('node_modules/highlightjs/highlight.pack.js', 'public/assets/docs/js/temp.js')
   .js('resources/js/docs/app.js', 'public/assets/docs/js')
   .scripts([
       'node_modules/highlightjs/highlight.pack.js',
       'public/assets/docs/js/app.js',
       'node_modules/dropzone/dist/dropzone.js',
       'node_modules/jquery-tabby/jquery.textarea.js',
       'node_modules/autosize/dist/autosize.js',
       'resources/assets/docs/js/forum.js'
   ], 'public/assets/docs/js/app.js');

mix.copy('node_modules/font-awesome/fonts', 'public/assets/docs/fonts')


/** Home Mix */
mix.js('resources/js/home/app.js', 'public/assets/home/js')
   .sass('resources/sass/home/app.scss', 'public/assets/home/css')

var pluginPath = 'resources/plugins/'

mix.combine([
    // ** Required Plugins **
    pluginPath + 'jquery/jquery.js',
    pluginPath + 'bootstrap/popper.js',
    pluginPath + 'bootstrap/bootstrap.js',
    pluginPath + 'customScrollBar/customScrollBar.js',

    // ** Additional Plugins **
    pluginPath + 'ladda/spin.js',
    pluginPath + 'ladda/ladda.js',
    pluginPath + 'toastr/toastr.js',
    pluginPath + 'notie/notie.js',
    pluginPath + 'jquery-validate/jquery.validate.js',
    pluginPath + 'jquery-validate/additional-methods.js',
    pluginPath + 'clockpicker/bootstrap-clockpicker.js',
    pluginPath + 'switchery/switchery.js',
    pluginPath + 'select2/select2.js',
    pluginPath + 'datatables/jquery.dataTables.js',
    pluginPath + 'datatables/dataTables.bootstrap4.js',
    pluginPath + 'datatables/dataTables.responsive.js',
    pluginPath + 'multiselect/jquery.multi-select.js',
    pluginPath + 'bootstrap-datepicker/bootstrap-datepicker.js',
    pluginPath + 'timepicker/jquery.timepicker.js',
    pluginPath + 'summernote/summernote.js',
    pluginPath + 'simplemde/simplemde.min.js',
    pluginPath + 'prism/prism.js',
    pluginPath + 'charts/chartjs/Chart.js',
    pluginPath + 'charts/sparkline/jquery.sparkline.js',
    pluginPath + 'charts/amcharts/amcharts.js',
    pluginPath + 'charts/amcharts/serial.js',
    pluginPath + 'charts/amcharts/amstock.js',
    pluginPath + 'charts/amcharts/xy.js',
    pluginPath + 'charts/amcharts/ammap.js',
    pluginPath + 'charts/amcharts/worldLow.js',
    pluginPath + 'charts/amcharts/pie.js',
    pluginPath + 'charts/amcharts/animate.js',
    pluginPath + 'charts/amcharts/export.js',
    pluginPath + 'charts/amcharts/radar.js',
    pluginPath + 'charts/amcharts/polarScatter.js',
    pluginPath + 'charts/amcharts/light.js',
    pluginPath + 'charts/morris/raphael.js',
    pluginPath + 'charts/morris/morris.js',
    pluginPath + 'charts/gauges/gauge.js',
    pluginPath + 'alertify/alertify.js',
    pluginPath + 'easypiecharts/jquery.easypiechart.js',
    pluginPath + 'metisMenu/metisMenu.js',
    pluginPath + 'form-wizard/jquery.steps.js',
    pluginPath + 'bar-rating/jquery.barrating.js',
    pluginPath + 'nestable/nestable.js',
    pluginPath + 'jstree/jstree.js',
    pluginPath + 'gallery/image/photoswipe.js',
    pluginPath + 'gallery/image/photoswipe-ui-default.js',
    pluginPath + 'gallery/image/mp.mansory.js',
    pluginPath + 'gallery/image/gallery.js',
    pluginPath + 'gallery/video/videobox.js',
    pluginPath + 'rating/jquery.raty.js',
    pluginPath + 'zoom/transition.js',
    pluginPath + 'zoom/zoom.js',
    pluginPath + 'calendar/moment.js',
    pluginPath + 'calendar/fullcalendar.js',
    pluginPath + 'imageCropper/cropper.js',
    pluginPath + 'ace-editor/ace.js',
    pluginPath + 'icons/evil.js',
    pluginPath + 'ace-editor/twilight.js',

    // ** Default Inits **
    pluginPath + 'inits/layout.js',
    pluginPath + 'inits/notifs.js',
    pluginPath + 'inits/forms.js'

], 'public/assets/home/js/plugins.js')
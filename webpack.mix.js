const mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false
    });

mix.styles(['Aut/VueDashboard/assets/vue-dashboard/css/vuetify-rtl.css'], 'public/css/custom-rtl-app.css');
mix.styles(['Aut/VueDashboard/assets//vue-dashboard/css/vuetify-ltr.css'], 'public/css/custom-ltr-app.css');

mix.copy('resources/assets/fonts', 'public/fonts', false);
mix.copy('resources/assets/images/*', 'public/images');
mix.copy('Aut/VueDashboard/assets/vue-dashboard/Navigation/images/navigation-error-state.svg', 'public/images/empty-states');
mix.copy('node_modules/leaflet/dist/images/*', 'public/images/maps');
mix.copy('resources/assets/images/favicon/favicon.ico', 'public/');
mix.copy('resources/assets/images/favicon', 'public/images/favicon');



mix.copy('node_modules/@fortawesome/fontawesome-free/webfonts/*', 'public/webfonts');



mix.copy('resources/assets/theme/*', 'public/theme');


mix.extract();
mix.version();

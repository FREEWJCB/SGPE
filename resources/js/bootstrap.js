window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');
window.jquery = require('jquery');
window.jqueryui = require('./componentes/jquery-ui.min.js');
window.popper = require('@popperjs/core');
window.turbolinks = require("turbolinks");
window.nprogress = require("nprogress");
window.fontawesome = require('@fortawesome/fontawesome-free/js/all.min.js');
window.bootstrap = require('bootstrap');
window.overhang = require("overhang/dist/overhang.min.js");
window.bootstrapBundle = require("bootstrap/dist/js/bootstrap.bundle.min.js");
window.chart = require("admin-lte/plugins/chart.js/Chart.min.js");
window.sparkline = require("admin-lte/plugins/sparklines/sparkline.js");
window.jqvmap = require("admin-lte/plugins/jqvmap/jquery.vmap.min.js");
window.jqvmap_maps = require("admin-lte/plugins/jqvmap/maps/continents/jquery.vmap.south-america.js");
window.jquery_knob = require("admin-lte/plugins/jquery-knob/jquery.knob.min.js");
// window.moment = require("admin-lte/plugins/moment/moment.min.js");
window.daterangepicker = require("admin-lte/plugins/daterangepicker/daterangepicker.js");
window.tempusdominus = require("admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js");
window.summernote = require("admin-lte/plugins/summernote/summernote-bs4.min.js");
window.overlayScrollbars = require("admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js");
window.adminlte = require("admin-lte/dist/js/adminlte.js");
window.dashboard = require("admin-lte/dist/js/pages/dashboard.js");
window.demo = require("admin-lte/dist/js/demo.js");
window.progress = require('./componentes/progress.js');
//
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });

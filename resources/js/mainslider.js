window.Vue = require('vue');

// Vue.component('main-carrousel', require('./components/sliders/carrousel'));

import mainCarrousel from './components/sliders/carrousel';
import mainDbCarrousel from './components/sliders/dbcarrousel';

new Vue({
    el: '#main-slider',
    components: { mainCarrousel }
});

new Vue({
    el: '#main-events',
    components: { mainDbCarrousel }
});

if(typeof window.Vue === "undefined") window.Vue = require('vue');

import phoneSend from './components/work/PhoneSendComponent';

new Vue({
    el: '#phone_send',
    components: { phoneSend }
});

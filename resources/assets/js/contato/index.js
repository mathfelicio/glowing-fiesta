window.Vue = require('vue');
window.VueResource = require('vue-resource');

const queryString = require('query-string');

import TheMask from 'vue-the-mask'

let config = {
    baseroute: '/vue/route/',
    queryString: queryString,
    csrf_token: $('meta[name=csrf-token]').attr('content')
};

Vue.use(config);
Vue.use(TheMask);
Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name=csrf-token]').attr('content');
Vue.component('lista-contatos', require('../components/ListaContatos.vue'));

new Vue({

}).$mount('#app');



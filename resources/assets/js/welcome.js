window.Vue = require('vue');
window.VueResource = require('vue-resource');
window.VueRouteLaravel = require('vue-route-laravel');

const queryString = require('query-string');
import axios from 'axios';

let config = {
    baseroute: '/vue/route/',
    axios: axios,
    queryString: queryString,
    csrf_token: $('meta[name=csrf-token]').attr('content')
};

Vue.use(VueRouteLaravel, config);
Vue.use(VueResource);
Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name=csrf-token]').attr('content');

const vue = new Vue({

}).$mount('#app');



require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import Buefy from 'buefy'


Vue.use(VueRouter);
Vue.use(Buefy);

const app = new Vue({
    el: '#app',

    router: new VueRouter(routes)
});

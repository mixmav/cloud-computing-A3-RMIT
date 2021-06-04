require('./bootstrap');

import Vue from 'vue';
import Ripple from 'vue-ripple-directive';
import VueRouter from 'vue-router';
import { store } from './store/store';


Ripple.color = 'rgba(255, 255, 255, 0.35)';
Vue.directive('ripple', Ripple);


import routes from './routes';
import App from './App.vue';

const router = new VueRouter({
	routes
})

new Vue({
	el: '#app',
	router,
	store,
	render: h => h(App)
});
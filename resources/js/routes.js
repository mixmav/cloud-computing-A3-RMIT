import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import Home from './router-components/Home.vue';

const routes = [
	{
		path: '/',
		component: Home,
		name: 'Home'
	},
]

export default routes;
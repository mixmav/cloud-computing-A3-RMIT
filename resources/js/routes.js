import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import Home from './router-components/Home.vue';
import AddRecipe from './router-components/AddRecipe.vue';

const routes = [
	{
		path: '/',
		component: Home,
		name: 'Home'
	},
	{
		path: '/add-recipe',
		component: AddRecipe,
		name: 'AddRecipe'
	},
]

export default routes;
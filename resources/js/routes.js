import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import Home from './router-components/Home.vue';
import AddRecipe from './router-components/AddRecipe.vue';
import MyRecipes from './router-components/MyRecipes.vue';
import ShoppingCart from './router-components/ShoppingCart.vue';

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
	{
		path: '/my-recipes',
		component: MyRecipes,
		name: 'MyRecipes'
	},
	{
		path: '/cart',
		component: ShoppingCart,
		name: 'ShoppingCart'
	},
]

export default routes;
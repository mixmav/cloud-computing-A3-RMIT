<template>
	<div class="vRouterPage-my-recipes-page-container">
		<div class="main-page-content">
			<div class="content">
				<h1>Your recipes</h1>
				<div v-for="recipe in recipes" :key="recipe.id" class="recipe">
					<p>{{ recipe.name }}</p>
					<a :href="recipe.link" target="_BLANK" class="link">{{recipe.link}}</a>
					<!-- <i @click="likeRecipe(recipe.id)" class="fa fa-heart like-recipe z-depth-1" v-ripple></i> -->
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import $ from 'jquery';

export default {
	mounted(){
		this.refreshRecipeList();
	},

	data(){
		return {
			recipes: [],
		}
	},

	methods: {
		refreshRecipeList(){
			var vThis = this;
			$.ajax({
				url: '/get-user-recipes',
				method: 'GET',
				success(response){
					vThis.recipes = response;
				}
			});
		},
	}
}
</script>

<style lang="scss" scoped>
	@import "../../scss/variables";

		.recipe{
			margin-top: 40px;
			background: darken(white, 5%);
			padding: 2em;
			border-radius: 10px;
			&:nth-child(even){
				background: $green;
				p{
					color: white;
				}
			}
			a{
				display: inline-block;
				margin-top: 20px;
			}

			.like-recipe{
				color: black;
				border-radius: 100%;
				background: white;
				padding: 1em;
				display: inline-block;
				margin-top: 20px;
				cursor: pointer;

				&.liked{
					color: $red;
				}
			}
		}
</style>



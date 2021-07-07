<template>
	<div class="vRouterPage-add-recipe-page-container">
		<div class="main-page-content">
			<div class="content">
				<h3>Enter the link for the page with the recipe</h3>
				<input type="text" class="text-input full-width" v-model="link" placeholder="https://example.com/xyz">
				<button class="btn full-width green mt-20" v-ripple @click="addRecipe"><i class="fa fa-plus"></i>Add</button>

				
			</div>
		</div>
	</div>
</template>

<script>

import $ from 'jquery';

export default {
	data(){
		return {
			link: '',
		}
	},

	methods: {
		addRecipe(){
			if (this.link.trim() != '') {
				
			} else {
				alert('The link can\'t be empty.');
			}
		}
	},

	mounted(){
		$.ajax({
			url: 'https://xu2pwx8tk1.execute-api.ap-southeast-2.amazonaws.com/',
			method: 'POST',
			data: {
				link: 'hello'
			},
			success(response){
				console.log(response);
			}
		})
	}
}
</script>

<style lang="scss">
	.vRouterPage-add-recipe-page-container{

	}
</style>



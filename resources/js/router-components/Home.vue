<template>
	<div class="vRouterPage-home-page-container">
		<div class="main-page-content">
			
			<div class="content">
				<router-link tag="button" to="/add-recipe" class="btn" v-ripple><i class="fa fa-plus"></i>New recipe</router-link>
			</div>
		</div>
	</div>
</template>

<script>

import { mapActions, mapState } from 'vuex';

export default {
	data(){
		return {
		}
	},
}
</script>
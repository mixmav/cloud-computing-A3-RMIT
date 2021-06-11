<template>
	<div class="vTop-bar-container" :class="{'z-depth-scrolled': scrolled}">
		<router-link to="/" class="link heading">RecipeHand</router-link>
		<a href="/auth/logout" class="link"><i class="fa fa-sign-out-alt"></i>Logout</a>
	</div>
</template>

<script>
import { mapState } from 'vuex'

export default {
	computed: {
		...mapState([
			'scrolled'
		])
	}
}
</script>


<style lang="scss">
	@import "../../scss/variables";

	.vTop-bar-container{
		width: 100%;
		padding: 1em {
			left: 1.4em;
			right: 1.4em;
		}
		background: $indigo;
		display: flex;
		justify-content: space-between;
		align-items: center;
		position: fixed;
		top: 0;
		left: 0;
		z-index: $zIndex-top-bar;
		transition: all .2s;
		a{
			color: white;
			&.heading{
				font-size: 1.6em;
			}
		}
	}
</style>
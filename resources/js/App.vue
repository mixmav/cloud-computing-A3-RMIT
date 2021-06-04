<template>
	<div class="main-app-container" ref="container">
		
		<div class="main-content">
			
			<transition name="router-view" mode="out-in">
				<router-view></router-view>
			</transition>

		</div>

		<go-to-top></go-to-top>
	</div>
</template>

<script>

import GoToTop from './components/GoToTop.vue';

import { mapActions } from 'vuex';
import $ from 'jquery';

export default {
	components: {
		GoToTop,
	},
	created(){
		$(window).on({
			scroll: () => {
				if ($(window).scrollTop() > 0) {
					this.updateScrolled(true);
				} else{
					this.updateScrolled(false);
				}
			},
		}, this.$refs.container);
	},

	beforeDestroy(){
		$(window).off('scroll', this.$refs.container);
	},

	data(){
		return {

		}
	},
	methods: {
		...mapActions([
			'updateScrolled',
		])
	}
}

</script>

<style lang="scss">

@import "../scss/variables";

	.main-app-container{
		& > .main-content{
			// margin-top: 150px; 
			padding: 2em;

			.main-page-content{
				position: relative;
				z-index: $zIndex-router-content;
				overflow: auto;
			}

		}
	}
</style>
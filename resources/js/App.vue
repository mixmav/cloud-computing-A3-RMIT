<template>
	<div class="main-app-container" ref="container">
		
		<div class="main-content">
			<top-bar></top-bar>
			<transition name="router-view" mode="out-in">
				<router-view></router-view>
			</transition>
		</div>

		<go-to-top></go-to-top>
	</div>
</template>

<script>

import TopBar from './components/TopBar.vue';
import GoToTop from './components/GoToTop.vue';

import { mapActions } from 'vuex';
import $ from 'jquery';

export default {
	components: {
		TopBar,
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
			.main-page-content{
				position: relative;
				z-index: $zIndex-router-content;
				overflow: auto;
				padding: 2em;

				background: rgba(white, 0.8);
				border-radius: 5px;
				display: inline-block;
				width: 100%;
				max-width: 600px;

				.content{
					margin-top: 60px;

					p{
						letter-spacing: 1px;
						line-height: 1.4em;
					}

				}
			}
		}
	}
</style>
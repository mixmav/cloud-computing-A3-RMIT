<template>
	<div class="vGo-to-top-container no-select">
		
		<transition name="transform-scale-full">
			
			<div class="icon z-depth-1" v-ripple @click="scrollToTop" v-show="scrolled">
				<i class="fa fa-chevron-up"></i>
			</div>

		</transition>

	</div>
</template>

<script>
import $ from 'jquery';
import { mapState } from 'vuex';

export default {
	computed: {
		...mapState([
			'scrolled',
		])
		
	},

	methods: {
		scrollToTop(){
			var body = $("html, body");
			body.stop().animate({scrollTop:0}, 450, 'swing');
		}
	}
}

</script>

<style lang="scss">
	@import "../../scss/variables";

	.vGo-to-top-container{
		position: fixed;
		bottom: 20px;
		right: 20px;
		z-index: $zIndex-go-to-top;
		cursor: pointer;
		.icon{
			padding: .8em{
				left: 1em;
				right: 1em;
			}
			border-radius: 100%;
			background: $indigo;
			color: white;
			i{
				font-size: .8em;
			}
		}
	}
</style>
<template>
	<div class="vRouterPage-home-page-container">
		<div class="main-page-content">
			
			<div class="content">
				<h1>This is <a href="https://vuejs.org/" target="_BLANK" class="a">Vue.js</a></h1>
				<p class="mt-30">Hello test test</p>
			</div>

			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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

<style lang="scss">

@import "../../scss/variables";

.vRouterPage-home-page-container{
	.main-page-content{
		background: rgba(white, 0.8);
		border-radius: 5px;
		display: inline-block;
		// padding: 2em;
		width: 100%;
		max-width: 600px;

		.content{
			// margin-top: 60px;

			p{
				letter-spacing: 1px;
				line-height: 1.4em;
			}

		}
	}
}

</style>
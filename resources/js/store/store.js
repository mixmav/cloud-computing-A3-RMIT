import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

// import { LetterDialog } from './modules/LetterDialog';

export const store = new Vuex.Store({
	strict: process.env.NODE_ENV !== 'production',

	modules: {
		// LetterDialog: LetterDialog,
	},

	state: {
		scrolled: false,
	},

	mutations: {
		updateScrolled(state, value){
			state.scrolled = value;
		},
	},
	actions: {
		updateScrolled(context, value){
			context.commit('updateScrolled', value);
		},
	},
})
